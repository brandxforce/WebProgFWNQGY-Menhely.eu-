<!DOCTYPE html>
<?php
include ('funkciok/config.php');
include ('funkciok/session.php');
if(!empty($session_uid)){
$userDetails=$userClass->userDetails($session_uid);
}else{
}
$hiraktiv = "";
$menhelyaktiv="";
$segitettunkaktiv="";
$elerhetosegaktiv="";
$uzenetekaktiv="";
?>
<html lang="hu">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Menhely az Állatokért</title>
  <link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
  <style>
  body {
  padding-top: 56px;
}
</style>
</head>
<body style="background-color:#1E5631;">
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color:#89b700;">
    <div class="container">
      <a class="navbar-brand" href="#">Menhely az Állatokért</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="?oldal=hirek">Hírek
              <span class="sr-only">(jelenlegi)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?oldal=orokbefogad">Menhelyes örökbefogadható állatok</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?oldal=segitettunk">Segítettünk</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?oldal=elerhetoseg">Elérhetőségek</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?oldal=contact">Üzenetek</a>
          </li>
		  <?php
		  if(empty($session_uid)){
          echo'<li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Belépés</a>
          </li>';
		  }else{
          echo'<li class="nav-item">
            <a class="nav-link" href="funkciok/logout.php">Kilépés</a>
          </li>';		
		  }		  
		  ?>
        </ul>
      </div>
    </div>
  </nav>
  <header class="py-5 mb-5" style="background-color:#9bc128;">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-lg-12">
		<?php if(!empty($session_uid)){echo '<span class="badge badge-info">Bejelentkezett:'.$userDetails->csaladinev.' '.$userDetails->utonev.'('.$userDetails->username.')</span>'; }{}?>
          <h1 class="display-4 text-white mt-5 mb-2">Környezetvédelmi és Állatvédelmi Közhasznú alapítvány</h1>
          <p class="lead mb-5" style="color:#f0ffc1;">A Menhely az Állatokért Környezetvédelmi és Állatvédelmi Kiemelkedően Közhasznú Alapítvány 2009 decemberében azzal a céllal jött létre, hogy a már meglévő állatvédelemmel és környezetvédelemmel kapcsolatos problémákat kezelje, ezekre térségünkben és országos viszonylatban is megoldást találjon.</p>
        </div>
      </div>
    </div>
 </header>
<div id="fal">
</div>
  <div class="container" >
    <div class="row">
	<?php
   if(isset($_GET['oldal'])){
    $oldal = $_GET['oldal'];
	}else
	{
	$oldal = "kezdolap";
	}
    $oldal = str_replace('"','',$oldal);
    $oldal = str_replace("'",'',$oldal);
    $oldal = str_replace('!','',$oldal);
    $oldal = str_replace('>','',$oldal);
    $oldal = str_replace('<','',$oldal);
    $oldal = str_replace('/','',$oldal);
    $oldal = str_replace('\\','',$oldal);
    $oldal = str_replace('*','',$oldal);
  if (empty($_GET['oldal'])) {
    include('pages/hirek.php');

  }else{
    if(file_exists('pages/' . $oldal . '.php')) {
        include('pages/' . $oldal . '.php');
    } else {
        include('pages/404.php');
    }
  }
  ?>
      <div class="col-md-3 mb-5" style="text-align:center;">
		<div class="panel panel-menhelyzolda">
		  <div class="panel-heading">
			<h3 class="panel-title">FONTOS TUDNIVALÓK</h3>
		  </div>
		  <div class="panel-body" style="background-color:#ACDF87; font-size:14px;">
				<strong>Nyitva tartás</strong><br>
				Hétköznap 09:00-15:30<br>
				Szombat 09:00-12:00<br><br>

				<strong>Adószám</strong><br>
				18000610-1-03<br><br>

				<strong>Számlaszám</strong><br>
				11732002-20387875<br>
				<strong>IBAN</strong><br>
				HU87 1173 2002 2038 7875 0000 0000<br>
				<strong>BIC(SWIFT) KÓD</strong><br>
				OTPVHUHB<br>
		  </div>
		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">A választott szervezet weboldala:</h3>
		  </div>
		  <div class="panel-body" style="text-align: left; background-color: #ACDF87;">
			<a href="http://menhely.eu/">http://menhely.eu/</a>
		  </div>


		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">Hasznos információk</h3>
		  </div>
		  <div class="panel-body" style="text-align: left; background-color: #ACDF87;">
			<a href="#">információk - tanácsok - letölthető dokumentumok</a>
		  </div>


		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">Vendégeink voltak</h3>
		  </div>
		  <div class="panel-body" style="text-align: left;background-color: #ACDF87;">
			<a href="#">Látogatók a menhelyen</a>
		  </div>
		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">Elismerések-köszönetek</h3>
		  </div>
		  <div class="panel-body" style="text-align: left;background-color: #ACDF87;">
			<a href="#">Akik megköszönték munkánkat</a>
		  </div>
		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">Médiamegjelenések</h3>
		  </div>
		  <div class="panel-body" style="text-align: left;background-color: #ACDF87;">
			<a href="#">Nézd meg az összes sajtóhírt! »</a>
		  </div>
		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">Hírlevél</h3>
		  </div>
		  <div class="panel-body" style="text-align: left;background-color: #ACDF87;">
			Rendelje meg hírlevelünket.
			<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email:">
			<button type="submit" style="text-align:right;" class="btn btn-primary">Küld</button>
		  </div>
		</div>
		<div class="panel panel-menhelyzold">
		  <div class="panel-heading">
			<h3 class="panel-title" style="color:#1E5631;">Kormány rendelet 41/2010</h3>
		  </div>
		  <div class="panel-body" style="text-align: left;background-color: #ACDF87;">
A Kormány az állatok védelméről és kíméletéről szóló 1998. évi XXVIII. törvény 49. §-a (3) bekezdésének f) pontjában, a kereskedelemről szóló 2005. évi CLXIV. törvény 12. §-a (1) bekezdésének b) és d) pontjában kapott felhatalmazás alapján az Alkotmány 35. §-a (1) bekezdésének b) pontjában meghatározott feladatkörében eljárva a következőket rendeli el:
		  </div>
		</div>
      </div>
    </div>
  </div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Bejelentkezés</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
	  <form class="form-inline" method="POST" action="funkciok/bejelentkezes.php">
	  <div class="form-group mb-2">
		<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Felhasználónév:" >
	  </div>
	  <div class="form-group mx-sm-3 mb-2">
		<input type="username" name="username" class="form-control" id="" placeholder="" required="required">
	  </div>
	  <div class="form-group mb-2">
		<input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Jelszó:">
	  </div>
	  <div class="form-group mx-sm-3 mb-2">
		<input type="password" name="password" class="form-control" id="" placeholder="******" required="required">
	  </div>
	
      </div>
      <div class="modal-footer">
		<a type="button" style="text-align:left;" href="regisztracio.php" class="btn btn-primary">Regisztráció</a>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Bezárás</button>
        <button type="submit" class="btn btn-primary" name="loginSubmit">Bejelentkezés</button>
		</form>
      </div>
    </div>
  </div>
</div>
  <footer class="py-5" style="background-color:#89b700;">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Menhely az Állatokért Környezetvédelmi és Állatvédelmi Közhasznú alapítvány 2020</p>
    </div>
  </footer>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
(function() {

if(!window.StyleFix) return;
if(hasxmldatauri()) return;
  
// Test unescaped XML data uri
function hasxmldatauri() {
  var img = new Image();
  datauri = 'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0,0 1,1" fill="#000"></svg>';
  img.src = datauri;
  return (img.width == 1 && img.height == 1);
}

StyleFix.register(function(css) {

  return css.replace(RegExp(/url\(\'data:image\/svg\+xml,(.*)\'\)/gi), function($0, svg) {
		return "url('data:image/svg+xml," + escape(svg) + "')";
	});
  
});

})();

/* Radial Gradient Syntax fix */
StyleFix.register(function(css, raw) {
	if (PrefixFree.functions.indexOf('radial-gradient') > -1) {
		css = css.replace(/radial-gradient\(([a-z-\s]+\s+)?at ([^,]+)(?=,)/g, function($0, shape, center){
			return 'radial-gradient(' + center + (shape? ', ' + shape : '');
		});
	}

	return css;
});
</script>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
