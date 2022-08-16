<?php
require "/UwAmp/www/samulasdestekadmin/connection.php";
require "header.php";
try {
  $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
  $user = "root";
  $passwd = "root";
  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM category");
  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  ?>
  <table class="table table-bordered mt-5">
    <tr>
        <td>ID</td>
        <td>KATEGORİ</td>
        <td>AÇIKLAMA</td>
        <td>DURUM</td>
        <td>İŞLEMLER</td>
    </tr>
  <?php
  foreach ($oku as $row) {
  extract($row);
  echo "
  <tr>
  <td>$categoryId</td>
  <td>$categoryName</td>
  <td>$categoryDescription</td>
  <td>$categoryStatus</td>
  <td>
  <a href='updateCategory.php' class='btn btn-outline-primary' name='update'>GÜNCELLE</a>
  <button class='btn btn-outline-danger'>PASİF YAP</button>
  </td>
  </tr>
  ";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
 ?>
 </table>
<a href="addCategory.php" class="btn btn-outline-primary">YENİ KATEGORİ EKLE</a>
 <?php
 require "footer.php";
?>

<?php
?>




