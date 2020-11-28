<?php 
	$countsql = $conn->prepare("SELECT COUNT(id) FROM menhely_kutya_table");
	$countsql->execute();
	$sorok = $countsql->fetch();
	$numrecord = $sorok[0];
	$numberpage=10;
	$numlinks = ceil($numrecord/$numberpage);
	
	if(isset($_GET['start'])){
	$page = $_GET['start'];
	if($page != 1){
	$start = ($page-1) * $numberpage;
	}else{
		$start=0;
	}
	}else{
		$start=0;
	}
 ?>
<div class="col-md-9 mb-5" style="background-color:#236339;">
		  <div class="jumbotron " style="background-color:#236339;">
				<h1>Kedves Látogató!</h1>
				<p>
					Bizonyos kutyák <strong>14 nap karantén</strong> után <strong>új névvel</strong> szerepelnek adatbázisunkban!<br>
					Érdeklődni a <strong>ebrendesz@menhely.eu</strong> és az <strong>info@menhely.eu</strong> e-mail címen, vagy a <strong>+36 70 198 27 27</strong> telefon számon.
				</p>
		  </div>
		<div class="panel panel-success">
		  <div class="panel-heading">
			<h3 class="panel-title">
				<div class="row">
				  <div class="col"></div>
				  <div class="col">Azonosítószám</div>
				  <div class="col">Bekerülés dátuma</div>
				  <div class="col"></div>
				  <div class="col">Azonosítószám</div>
				  <div class="col">Bekerülés dátuma</div>
				</div>
			</h3>
		  </div>
		  <div class="panel-body" style="background-color:#ACDF87; font-size:14px;">

				<?php

					$stmt = $conn->prepare("SELECT * FROM menhely_kutya_table LIMIT $start,$numberpage");
                    $stmt->execute();
					$count =0;
                    while($row = $stmt->fetch(PDO::FETCH_ASSOC))
                    {
						if($count%2 ==0){
							echo '<div class="row">';
						}
                        echo ' 
						
						<div class="col"><img src="funkciok/allat_kep/'.$row['kep'].'" width="110px" height="110px" data-holder-rendered="true" style="width: 110; heigh: 110;"></div>
						<div class="col">'.$row['azonosito'].'</div>
						<div class="col">'.$row['date_in'].'</div>';
						if($count%2 == 1){
							echo '</div>';
						}
						$count++;
                    }
					if($count % 2 != 0){
						echo '<div class="col"></div><div class="col"></div><div class="col"></div></div>';
					}
				?>
				
		  </div>
		</div>

<center>
<nav aria-label="Page navigation example" style="margin-left:35%; padding:40px;">
  <ul class="pagination" >
    <li class="page-item"><a class="page-link" href="#">Előző</a></li>
	<?php
	for($i=1;$i<$numlinks+1;$i++){
		echo '<li class="page-item"><a class="page-link" href="?oldal=orokbefogad&start='.$i.'">'.$i.'</a></li>';
	}
	?>

    <li class="page-item"><a class="page-link" href="#">Következő</a></li>
  </ul>
</nav>
</center>
<?php if(!empty($session_uid)){?>
<button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal2">Új állat regisztrálása &raquo;</button>
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Elveszett állat regisztrálása</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form method="POST" action="funkciok/felvetel.php" enctype="multipart/form-data">
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Neve:</label>
			<div class="col-sm-10">
			  <input type="name" name="animal_name" class="form-control" id="inputPassword" placeholder="Állat neve">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Milyen állat:</label>
			<div class="col-sm-10">
			<select class="form-control" name="animal_allat">
			<option value="0">Kutya</option>
			</select>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Ivara:</label>
			<div class="col-sm-10">
			<select class="form-control" name="animal_ivar">
			<option value="Kan">Kan</option>
			<option value="Ivartalanított kan">Ivartalanított kan</option>
			<option value="Szuka">Szuka</option>
			<option value="Ivartalanított szuka">Ivartalanított szuka</option>
			</select>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Színe:</label>
			<div class="col-sm-10">
			  <input type="name" name="animal_szine" class="form-control" id="inputPassword" placeholder="Színe">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Szőre hossza:</label>
			<div class="col-sm-10">
			  <select class="form-control" name="animal_szore">
			<option value="Rövid">Rövid</option>
			<option value="Hosszú">Hosszú</option>
			</select>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Magassága:</label>
			<div class="col-sm-10">
			  <input type="name" class="form-control" name="animal_magassag" id="inputPassword" placeholder="Állat neve">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Kora</label>
			<div class="col-sm-10">
			  <input type="name" class="form-control" name="animal_kora" id="inputPassword" placeholder="Állat neve">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Bekerülés körülménye:</label>
			<div class="col-sm-10">
			  <textarea class="form-control" name="animal_korulmeny" id="exampleFormControlTextarea1" ></textarea>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Tulajdonságai:</label>
			<div class="col-sm-10">
			  <textarea class="form-control" name="animal_taljdonsag"  id="exampleFormControlTextarea1" ></textarea>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Ismertető jegyei:</label>
			<div class="col-sm-10">
			  <textarea class="form-control" name="animal_ismertetojegy" id="exampleFormControlTextarea1" ></textarea>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Chip</label>
			<div class="col-sm-10">
			  <select class="form-control" name="animal_chip">
			<option value="1">Van</option>
			<option value="0">Nincs</option>
			</select>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Tetoválás</label>
			<div class="col-sm-10">
			  <input type="name" class="form-control" name="animal_tetko" id="inputPassword" placeholder="Állat neve">
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Van róla fénykép?</label>
			<div class="col-sm-10">
			  <select class="form-control" name="animal_vanekep">
			<option value="1">Van</option>
			<option value="0">Nincs</option>
			</select>
			</div>
		  </div>
		  <div class="form-group row">
			<label for="inputPassword" class="col-sm-2 col-form-label">Fénykép</label>
			<div class="col-sm-10">
			<input type="file" class="form-control-file" name="animal_picture" id="exampleFormControlFile1">
			</div>
		  </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
        <button type="submit" class="btn btn-primary" name="submitFelv">Felvétel</button>
		</form>
      </div>
    </div>
  </div>
</div>
<?php }else{}?>
      </div>