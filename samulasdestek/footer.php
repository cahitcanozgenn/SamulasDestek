      <footer>
         <div class="footer">
            <div class="container">
               <div class="row border-top">
                  <div class="col-md-10">
                     <div class="row">
                        <div class="col-md-5 offset-md-1 padding_bottom1">
                           <h3>Hızlı Bağlantılar</h3>
                           <ul class="cont">

                           <?php
                     try {
  $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
  $user = "root";
  $passwd = "root";
  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM hizlibaglanti");
  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  ?>
  <?php
  foreach ($oku as $row) {
  extract($row);
  echo "
  <li><a href='$url'>$adi</a></li>
  ";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
 ?>
                           </ul>
                        </div>
                        
                        <div class="col-md-5 offset-md-1">
                           <h3>Yardım</h3>
                           <ul class="cont">
                           <?php
                     try {
  $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
  $user = "root";
  $passwd = "root";
  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM yardim");
  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  ?>
  <?php
  foreach ($oku as $row) {
  extract($row);
  echo "
  <li><a href='$url'>$adi</a></li>
  ";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
 ?>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <?php
                     try {
  $dsn = "mysql:host=localhost;dbname=samulasdestek;charset=utf8mb4";
  $user = "root";
  $passwd = "root";
  $db = new PDO($dsn, $user, $passwd);
  $db-> setAttribute (PDO :: ATTR_ERRMODE, PDO :: ERRMODE_WARNING);
  $db = $db->query("SELECT * FROM firmabilgileri");
  $oku = $db->fetchAll(PDO::FETCH_ASSOC); //verilerin hepsi

  ?>
  <?php
  foreach ($oku as $row) {
  extract($row);
  echo "
  <p>$Footer1</p>
  ";
  }
          
  } catch ( PDOException $e ){
     echo "Bir Hata Oluştu: ".$e->getMessage();
 }
 ?>
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

