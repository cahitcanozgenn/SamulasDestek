<?php 
require "header.php";
require "/UwAmp/www/samulasdestekadmin/connection.php";


try {
  $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
  $user = "root";
  $passwd = "root";
  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);

  if(isset($_POST['content']))
  {
    $icerikId=$_POST['content'];
  }
    $db = $db->query("SELECT * FROM icerik WHERE icerikId=$icerikId");
 
   
   


 
  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  ?>
  <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">

        <table class="table table-bordered mt-5">
    
  <?php
  foreach ($oku as $row) {
  extract($row);
  echo "

 <h2 class='text-center'>$icerikBaslik</h2>
 $icerikYazi
 </div>


  
  ";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
 ?>
 </table>

        </div>
    </div>
  </div>
  

<?php 
require "footer.php";
?>