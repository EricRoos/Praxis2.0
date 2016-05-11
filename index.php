<html>
  <head>
    <?php include('page_head.php') ?>
  </head>
  <body>
  <?php include('top_bar.php') ?>
  <div id='main-background' class='front-content'>
    <?php
      switch($_SERVER['REQUEST_URI']){
        case "/services":
          include('services.php');
          break;
        case "/home":
          include('home_content.php');
          break;
        case "/about":
          include('about.php');
          break;
        case "/contact":
          include('contact.php');
          break;
        default:
          include('home_content.php');
          break;
      }

    ?>
  </div>
  <?php include('footer.php')?>
  <?php include('google_analytic.php')?>
  </body>
</html>
