<head>
  <meta charset="UTF-8">
  <title>Jeloviar Plataforma | <?php echo $title;?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Somos una comunidad de desarrollo personal y emprendimiento. Estudia">
  <meta name="author" content="U-linex">
  <meta name="keyword" content="U-linex, plataforma de cursos, cursos de arquitectura, aprende arquitectura">
  <meta name="robots" content="Index, Follow">
  <link rel=stylesheet href="<?php echo site_url().'assets/page_front/css/asset/js_composer.min.css';?>" type="text/css" media="all">
  <script src="https://use.fontawesome.com/bd71157fab.js"></script>
  <link rel=stylesheet href="<?php echo site_url().'assets/page_front/css/asset/bootstrap.css';?>" type="text/css" media="all">
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <link rel=stylesheet href="<?php echo site_url().'assets/page_front/css/asset/owl.carousel.css';?>" type=text/css media=all>
  <link rel=stylesheet href="<?php echo site_url().'assets/page_front/css/style.css';?>" type=text/css media=all>
  <link rel=stylesheet href="<?php echo site_url().'assets/page_front/css/wordpress-lms.demo.css';?>" type=text/css media=all>
  <link rel=stylesheet href="<?php echo site_url().'assets/page_front/css/my_style.css';?>" type=text/css media=all>
  <script src="<?php echo site_url().'assets/page_front/js/jquery.js';?>"></script>
  <script src=<?php echo site_url().'assets/page_front/js/jquery-migrate.min.js';?>></script>
  <script>
    var lpCourseSettings = [];
  </script>
  <!--start favicon-->
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url().'assets/page_front/images/logo/favico/apple-touch-icon.png';?>">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url().'assets/page_front/images/logo/favico/favicon-32x32.png';?>">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url().'assets/page_front/images/logo/favico/favicon-16x16.png';?>">
  <link rel="manifest" href="<?php echo site_url().'assets/page_front/images/logo/favico/site.webmanifest';?>">
  <link rel="stylesheet" href="<?php echo site_url().'assets/cms/css/style.css';?>">
    <?php 
   if(isset($meta_description_og)){ ?>
        <meta property="og:type" content="article"/>
        <meta property="og:title" content="<?php echo $title;?>"/>
        <meta property="og:description" content="<?php echo $meta_description_og;?>" />
        <meta property="og:image" content="<?php echo $meta_img_og;?>" />
   <?php  } ?>
</head>
