<?php 
require "header.php";
require "connection.php";

try 
{
      $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
      $user = "root";
      $passwd = "root";
      $db = new PDO($dsn, $user, $passwd);
      $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
      $db = $db->query("SELECT*FROM icerik");
      $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi
  ?>
         <div class="container">
             <div class="row">
                <table class="table table-bordered mt-5">
                      <tr class="text-center">
                           <td><b>MAKALELER</b></td>
                      </tr>
  <?php
  foreach ($oku as $row) 
  {
           extract($row);
               echo "
                      <tr>
                        <td>
                           <form action='content.php' method='POST'>
                                <input type='hidden' name='content' value='$icerikId'>
                                <input class='btn btn-outline-danger' type='submit' value='$icerikBaslik'>
                            </form>
                        </td>
                      </tr>
  ";
  }    
  }
  catch ( PDOException $e )
  {
         echo "Bir Hata Oluştu: ".$e->getMessage();
  }
 ?>
 </table>
    </div>
  </div>
<?php 
require "footer.php";
?>