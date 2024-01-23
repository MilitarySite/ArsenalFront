<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

        <!-- Titoli Pagine -->
        <?php 
            function get_current_url() { //url corrente
              $protocol = strtolower(substr($_SERVER["SERVER_PROTOCOL"],0,5))=='https://'?'https://':'http://';
              return $protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
            }
            $current_url = get_current_url();
            

            if (strpos($current_url, 'index.php') !== false) {
                echo '<title>Dashboard ArsenalFront</title>';
            } elseif (strpos($current_url, '404.php') !== false) {
                echo '<title>404 Page</title>';
            } elseif (strpos($current_url, '500.php') !== false) {
                echo '<title>500 Page</title>';
            } elseif (strpos($current_url, 'table_list.php') !== false) {
                echo '<title>Table List</title>';
            } elseif (strpos($current_url, 'f_delete.php') !== false) {
                echo '<title>Delete</title>';
            } elseif (strpos($current_url, 'f_insertion.php') !== false) {
                echo '<title>Insertion</title>';
            } elseif (strpos($current_url, 'f_edit.php') !== false) {
                echo '<title>Edit</title>';
            } elseif (strpos($current_url, 'analytics.php') !== false) {
                echo '<title>Analytics</title>';
            }

            elseif (strpos($current_url, 'widgets.php') !== false) {
              echo '<title>Widgets</title>';
            }

        ?>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	  <!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>

</head>
