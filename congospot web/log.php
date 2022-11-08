<?php
// (A) surfcard & PASSWORD SHOULD BE KEPT SAFELY IN A DATABASE...
$surfcard = [
  "name" => "Jon Doe",
  "surfcard number" => "098765",
  "password" => "12345"
];

// (B) CHECK USER & PASSWORD
$pass = $_POST['surfcard'] == $surfcard['surfcard number'];
if ($pass) { $pass = $_POST['password'] == $surfcard['password']; }
 
// (C) START SESSION IF VALID USER
if ($pass) {
  session_start();
  $_SESSION['surfcard'] = [
    "name" => $user['name'],
    "surfcard" => $surfcard['surfcard number']
  ];
}
 
// (D) RESPOND TO AJAX
echo $pass ? "OK" : "Invalid user or password";
 
/* (E) PROTECT ALL YOUR PAGES
* session_start();
* if (!is_array(surfcard)) { header("location: http://site.com/login.html"); }
*/
 
/* (F) TO LOGOFF
* unset($_SESSION['surfcard']);
*/