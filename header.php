<?php 

  $pageID = strtolower($pageTitle);
  $userName = "";

?>



<!DOCTYPE html>
<html>
  <head>
    <!-- Adding the Page Title from the index, about, or contact pages -->
    <title><?php echo $pageTitle; ?> | Hello <?php echo $userName; ?></title>

    <!-- Tell the browser to render the view width correctly -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Link our stylesheet -->
    <link rel="stylesheet" href="style.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  </head>

  <body id="<?php echo $pageID; ?>">
    <header>
      <div class="row clearfix">

        <!-- Our Logo -->
        <a href="index.html"><img class="logo" src="logo.png"/></a>

        <?php include "nav.php" ?>

      </div>
    </header>