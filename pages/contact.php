<div class="col-md-9 mb-5" style="background-color:#236339;">
<?php
if(isset($_POST['submitta'])){
	if(!empty($_POST['name'])){
		if(!empty($_POST['phone'])){
			if(!empty($_POST['email'])){
				if(!empty($_POST['message'])){
				$stmt = $conn->prepare("INSERT INTO menhely_kapcsolat_table(id,name,phone,email,text) VALUES('',:name,:phone,:email,:text)");
				$stmt->bindParam("name", $_POST['name'], PDO::PARAM_STR);
				$stmt->bindParam("phone", $_POST['phone'], PDO::PARAM_STR);
				$stmt->bindParam("email", $_POST['email'], PDO::PARAM_STR);
				$stmt->bindParam("text", $_POST['message'], PDO::PARAM_STR);
				$stmt->execute();
				}else{
					echo '<div class="alert alert-danger" role="alert">Az <b>Üzenet</b> mező nem lehet üres!</div>';
				}
			}else{
				echo '<div class="alert alert-danger" role="alert">Az <b>E-mail</b> mező nem lehet üres!</div>';
			}
		}else{
			echo '<div class="alert alert-danger" role="alert">A <b>telefonszám</b> mező nem lehet üres!</div>';
		}
	}else{
		echo '<div class="alert alert-danger" role="alert">A <b>név</b> mező nem lehet üres!</div>';
	}

}else{
	
}
?>

<?php
					$stmt = $conn->prepare("SELECT * FROM menhely_kapcsolat_table ORDER BY id DESC");
                    $stmt->execute();
					$count =0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
                        echo ' 
						<div class="newsroam2" >
						<hr>
						Név: '.$row['name'].'<br>
						Telefonszám: '.$row['phone'].'<br>
						E-mail: '.$row['email'].'<br>
						Üzenet: '.$row['text'].'<br>
						<br>
					   </div>	
						';
                    }
				?>	
</div>
	  