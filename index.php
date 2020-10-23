<?php
require_once("includes/initialize.php");
$view = (isset($_GET['p']) && $_GET['p'] != '') ? $_GET['p'] : '';
$account = 'guest/update.php';
$small_nav = 'theme/small-navbar.php';
switch ($view) {

  case 'home' :
    $title="Home";  
    $content='home.php';    
    break;

  case 'about' :
    $title="About Us";  
    $content = 'aboutus.php';   
    break;

   case 'rooms' :
    $title="Rooms and Rates";  
    $content ='room.php';
    break;

  case 'contact' :
    $title="Contacts";
    $content ='contact.php';    
    break;

  case 'booking' :
    $title="Book A Room";  
    $content ='bookAroom.php';    
    break;
        
  case 'accomodation' :
    $title="Accomodation";  
    $content='accomodation.php';
    break;  

  default :
    $title="Home";  
    $content ='home.php';   
}

require_once ('theme/template.php');

?>
 