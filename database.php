<?php require_once("lang.php");require("filtri.php");
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;?>
<!DOCTYPE html>
<html lang="it">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <title>FERMI - Database</title>

<!-- Standard html meta tags -->
    <meta name="description" content="Database of opportunities for physics students" />
    <meta name="keywords" content="aisf associazione italiana studenti di fisica iaps" />

<!-- og -->
    <meta property="og:title" content="Database">
<meta property="og:type" content="website">
<meta property="og:url" content="/database/">

<meta property="og:description" content="        Database of opportunities for physics students     ">
<meta property="og:site_name" content="">
<meta property="og:locale" content="it">

<meta property="fb:admins" content=""> <!-- editable in config.yml -->
<meta property="fb:app_id" content="">

<!-- Twitter metadata. twitter:image should not be necessary, as twitter recognizes og:-->
<meta name="twitter:card"           content="summary" />
<meta name="twitter:site"           content="@aisf_fisica" />
<meta name="twitter:title"          content="Database" />
<meta name="twitter:description"    content="            Support us      If you are interested in promoting our project please write an email to this email address.      "/>
<!-- <meta name="twitter:image:alt"      content=""> Name of image for visually impaired. Will need to add this to all images -->

<!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet prefetch" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
    <link href="css/main.css" type="text/css" rel="stylesheet" media="screen"/>
</head>

<body onload="dbgetdata()">
  <?php require("menu.php");?>
         


         

      

<?php if( $detect->isMobile() && !$detect->isTablet() ){
 include_once('dbmobile.php');
}
else{
  echo "<div class=\"row\">";
  include_once('dbdesktop.php');
  echo "</div>";
}
?>

<?php require("footer.php");?>

  </body>

<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="/js/bin/materialize.min.js"></script>
<script> // Slider
  $(document).ready(function(){
  $('.slider').slider({full_width: false});
  });
</script>
<script> // Initialize collapse button
  $(".button-collapse").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  $('.collapsible').collapsible();
</script>
<script>
  $(document).ready(function(){
  // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
  $('.modal-trigger').leanModal();
  });
</script>
<script>
  $(document).ready(function(){
      $('.carousel').carousel();
  });
</script>
<script src="js/db.js"></script>
</html>
