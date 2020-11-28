<?php
include ('config.php');
if(isset($_POST['submitFelv'])){
	$azonosito = $_POST['animal_name']."-".rand(1000, 9999);
	if($_POST['animal_vanekep'] == "1"){
				if(isset($_FILES["animal_picture"]) && $_FILES["animal_picture"]["error"] == 0){
					$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
					$filename = $_FILES["animal_picture"]["name"];
					$filetype = $_FILES["animal_picture"]["type"];
					$filesize = $_FILES["animal_picture"]["size"];
					$ext = pathinfo($filename, PATHINFO_EXTENSION);
					if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
					$maxsize = 5 * 1024 * 1024;
					if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
					if(in_array($filetype, $allowed)){
						if(file_exists("allat_kep/" . $filename)){
							echo $filename . " is already exists.";
						} else{
							$temp = explode(".", $_FILES["animal_picture"]["name"]);
							$newfilename = $azonosito . '.' . end($temp);
							move_uploaded_file($_FILES["animal_picture"]["tmp_name"], "allat_kep/" . $newfilename);
							echo "Sikeresen feltöltöttük a filet!.";
						} 
					} else{
						echo "Hiba: Valami hiba történt! Próbáld újra!"; 
					}
				} else{
					echo "Hiba: " . $_FILES["animal_picture"]["error"];
				}
			}else{
				$newfilename = "nopic.jpg";
			}
				$stmt = $conn->prepare("INSERT INTO menhely_kutya_table(id,azonosito,date_in,neve,ivara,szine,szore_hossza,
				magassaga,kora,bekerules_helye_korulmenye,tulajdonsagai,ismerteto_jegyei,chip,tetovalas,date_out,orokbefogadva,allat,kep) VALUES('',:azonosito,:date_in,
				:animal_name,:animal_ivar,:animal_szine,:animal_szore,:animal_magassag,:animal_kora,:animal_korulmeny,:animal_taljdonsag,:animal_ismertetojegy,
				:animal_chip,:animal_tetko,'','',:animal_allat,:kep)");
				
				$stmt->bindParam("azonosito", $azonosito, PDO::PARAM_STR);
				$date = date("Y-m-d");
				$stmt->bindParam("date_in", $date, PDO::PARAM_STR);
				$stmt->bindParam("animal_name", $_POST['animal_name'], PDO::PARAM_STR);
				$stmt->bindParam("animal_allat", $_POST['animal_allat'], PDO::PARAM_INT);
				$stmt->bindParam("kep", $newfilename, PDO::PARAM_STR);
				$stmt->bindParam("animal_ivar", $_POST['animal_ivar'], PDO::PARAM_STR);
				$stmt->bindParam("animal_szine", $_POST['animal_szine'], PDO::PARAM_STR);
				$stmt->bindParam("animal_chip", $_POST['animal_chip'], PDO::PARAM_STR);
				$stmt->bindParam("animal_szore", $_POST['animal_szore'], PDO::PARAM_STR);
				$stmt->bindParam("animal_magassag", $_POST['animal_magassag'], PDO::PARAM_STR);
				$stmt->bindParam("animal_kora", $_POST['animal_kora'], PDO::PARAM_STR);
				$stmt->bindParam("animal_korulmeny", $_POST['animal_korulmeny'], PDO::PARAM_STR);
				$stmt->bindParam("animal_taljdonsag", $_POST['animal_taljdonsag'], PDO::PARAM_STR);
				$stmt->bindParam("animal_ismertetojegy", $_POST['animal_ismertetojegy'], PDO::PARAM_STR);
				$stmt->bindParam("animal_tetko", $_POST['animal_tetko'], PDO::PARAM_STR);
				$stmt->execute();
				header("Location: $webad?oldal=orokbefogad");
}else{
	
}
?>

	  