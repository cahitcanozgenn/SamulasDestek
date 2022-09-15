<?php
function post($a = false){
  if (!$a) {
    return (isset($_POST)) ? $_POST : false ;
  }
  return (isset($_POST[$a])) ? $_POST[$a] : false ;
}

function secure($a = false){
  // XSS fonksiyonu eklenecek
  return post($a);
}

 ?>