<?php 
require "header.php";
require "/UwAmp/www/samulasdestekadmin/connection.php";


try {
  $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
  $user = "root";
  $passwd = "root";
  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM category");
  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  ?>
  <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">

        <table class="table table-bordered mt-5">
    <tr class="text-center">
        <td><b>KATEGORİLER</b></td>
    </tr>
  <?php
  foreach ($oku as $row) {
  extract($row);
  echo "
  <tr>
  <td>$categoryName</td>
  </tr>
  ";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
 ?>
 </table>

        </div>
        <div class="col-md-4"></div>
    </div>
  </div>
  

<?php 
require "footer.php";
?>