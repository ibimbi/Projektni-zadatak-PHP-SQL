
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
  <?php include_once "head.php"; ?>
  </head>
  <body>
    <div class="grid-container">
      <header>
          <div class="large-12 cell" > 
            <a href="index.php?menu=1"><img src="https://www.vvg.hr/wp-content/uploads/2018/12/VVG-hrveng.jpg"></a> 
              <div style="text-align:center; background-color: #184D80; padding-top:0.2cm;"> 
                <nav class="topnav">  
                  <a href="index.php?menu=1">Početna stranica</a>
                  <a href="index.php?menu=2">Novosti</a>
                  <a href="index.php?menu=3">Kontakt</a>
                  <a href="index.php?menu=4">O nama</a>
                  <a href="index.php?menu=5">Galerija</a>
                  <a data-open="exampleModal1" class="logsetop">Prijavi se</a>
                  <a data-open="exampleModal2" class="regsetop">Registriraj se</a>
                </nav>                             
              </div>
        </header>
        <?php    
          if (!isset($_GET['menu']) || $_GET['menu'] == 1) { include("pocetna.php"); }
          else if ($_GET['menu'] == 2) { include("novosti.php"); }
          else if ($_GET['menu'] == 3) { include("kontakt.php"); }
          else if ($_GET['menu'] == 4) { include("onama.php"); }
          else if ($_GET['menu'] == 5) { include("galerija.php"); }
          include_once "prijava.php";
          include_once "registracija.php"; 
        ?>
        <footer>  
          <?php include_once "podnozje.php"; ?>
        </footer>
      </div>
  <?php include_once "skripte.php"; ?>             
</html>