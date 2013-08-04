<?php
  $page_title = 'home';
  $dir_info = './';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Christopher A. Wood | Research Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 40px;
      }

      /* Custom container */
      .container-narrow {
        margin: 0 auto;
        max-width: 700px;
      }
      .container-narrow > hr {
        margin: 30px 0;
      }

      /* Main marketing message and sign up button */
      .jumbotron {
        margin: 60px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 72px;
        line-height: 1;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* Supporting marketing content */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }
    </style>
    <!-- <link href="./css/bootstrap-responsive.css" rel="stylesheet"> -->

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="./ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="./ico/favicon.png">

    <!-- Configure mathjax -->
    <script type="text/x-mathjax-config">
      MathJax.Hub.Config({tex2jax: {inlineMath: [['$','$'], ['\\(','\\)']]}});
    </script>
    <script type="text/javascript"
      src="http://cdn.mathjax.org/mathjax/latest/MathJax.js?config=TeX-AMS-MML_HTMLorMML">
    </script>
  </head>

  <body>

    <div class="container">
        <div class="tabbable tabs-left">
          <ul class="nav nav-tabs">
            <li><a href="#home" data-toggle="tab">Overview</a></li>
            <li><a href="#crypto" data-toggle="tab">Cryptography</a></li>
            <li><a href="#snp" data-toggle="tab">Security and Privacy</a></li>
            <li><a href="#cgt" data-toggle="tab">Computational Graph Theory</a></li>
            <li><a href="#comb" data-toggle="tab">Combinatorics</a></li>
            <li><a href="#folkman" data-toggle="tab">Folkman Numbers</a></li>
          </ul>
        <div class="tab-content">
          <div class="tab-pane" id="home">
            <h3>Overview</h3> 
            <p>
              I <emph>try</emph> to maintain a collection of my research progress and results on this page. 
              I'm a complete advocate of open, collaborative research, and believe in the honor code among scientists. 
              That is, I won't steal your work, and I expect the same courtesy.
            </p>
          <div class="tab-pane" id="crypto">
            <h3>Cryptography</h3> 
            <?php include_once('./crypto.htm'); ?>
          </div>
          <div class="tab-pane" id="snp">
            <h3>Security and Privacy</h3> 
            <?php include_once('./snp.htm'); ?>
          </div>
          <div class="tab-pane" id="cgt">
            <h3>Computational Graph Theory</h3> 
            <?php include_once('./cgt.htm'); ?>
          </div>
          <div class="tab-pane" id="comb">
            <h3>Combinatorics</h3> 
            <?php include_once('./comb.htm'); ?>
          </div>
          <div class="tab-pane" id="folkman">
            <h3>Folkman Numbers</h3> 
            <?php include_once('./folkman.htm'); ?>
          </div>
        </div>
      </div>
    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./js/jquery-1.10.2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>

     <script>
        var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
        (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>
