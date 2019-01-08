<?php
/*
 *	Made by Samerton
 *  https://github.com/NamelessMC/Nameless/
 *  NamelessMC version 2.0.0-pr3
 *  License: MIT
 *
 *  Rewrite test
 *  Test nadpisywania plików
 */
?>
<html lang="pl">
  <head>
    <!-- Page Title -->
    <title>Test nadpisywania &bull; NamelessMC</title>

    <!-- Global CSS -->
    <link rel="stylesheet" href="core/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="core/assets/css/custom.css">
    <link rel="stylesheet" href="core/assets/css/font-awesome.min.css">

    <style>
    html {
        overflow-y: scroll;
    }
    body {
        background-color: #eceeef;
    }
    </style>
  </head>

  <body>
    <div style="text-align:center">
      <br /><br /><br />
      
      <h1>NamelessMC v2 <sup><span style="font-size: small;">przedpremiera</span></sup></h1>
      
      <hr />
      
      <div class="row">
        <div class="col-md-6 offset-md-3">
          <?php
          if(isset($_GET['route']) && $_GET['route'] = '/rewrite_test'){
              echo '<div class="alert alert-success">Nadpisywanie jest włączone! :)</div>';
        
          } else {
              echo '<div class="alert alert-danger">Nadpisywanie jest wyłączone! :(</div>';
          }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>