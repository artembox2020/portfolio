    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive HTML5 Website Landing Page for Developers">
    <meta name="author" content="Artem Palamarchuk, software engineer, freelancer">    
    <link rel="shortcut icon" href="favicon.ico">  
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">   
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    
    <!-- github calendar css -->
    <link rel="stylesheet" href="assets/plugins/github-calendar/dist/github-calendar.css" />
    <!-- github acitivity css -->
    <link rel="stylesheet" href="assets/plugins/github-activity/src/github-activity.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/octicons/2.0.2/octicons.min.css">
    <link rel="icon" type="image/png" href="assets/images/profile.png" sizes="128x128" />
    <!-- Theme CSS -->  
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <?php
          require_once "dbworkers/dbh/criteria.php";
          require_once "dbworkers/dbh/rel.php";
          require_once "dbworkers/dbh/dbh.php";
    ?>
    <?php include_once "ConfigLoader.php";  ?>
    <?php include_once "dbworkers/Worker.php";  ?>
    <?php include_once "dbworkers/WorkerExt.php";  ?>
    <?php include_once "classes/Base.php";  ?>