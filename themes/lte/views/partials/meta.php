<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $template['title']; ?></title> 
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/font-awesome/css/font-awesome.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <?php if ($this->uri->segment(2)=='siswa'){?>
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datatables/dataTables.bootstrap.css">
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datatables/dataTables.bootstrap.css">
  <?php } ?>

  <?php if ($this->uri->segment(2)=='siswa')  {?>
    <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/daterangepicker/daterangepicker.css">
      <link rel="stylesheet" href="<?php echo admin_theme_locations();?>plugins/datepicker/datepicker3.css">
  <?php } ?>