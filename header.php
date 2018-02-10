<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<!-- Mobile specific metas  -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<link rel="shortcut icon" href="/favicon.ico">
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,300,700,800,400,600' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200italic,300,300italic,400,400italic,600,600italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

	<!-- CSS Style -->

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

	<!-- font-awesome & simple line icons CSS -->
	<link rel="stylesheet" type="text/css" href="/css/font-awesome.css" media="all">
	<link rel="stylesheet" type="text/css" href="/css/simple-line-icons.css" media="all">

	<!-- owl.carousel CSS -->
	<link rel="stylesheet" type="text/css" href="/css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="/css/owl.theme.css">

	<!-- animate CSS  -->
	<link rel="stylesheet" type="text/css" href="/css/animate.css" media="all">

	<!-- flexslider CSS -->
	<link rel="stylesheet" type="text/css" href="/css/flexslider.css" >

	<!-- slider CSS  -->
	<link rel="stylesheet" type="text/css" href="/css/slider.css" media="all">
	<link rel="stylesheet" type="text/css" href="/css/slider-home5.css" media="all">

	<!-- style CSS -->
	<link rel="stylesheet" type="text/css" href="/css/style.css" media="all">

	<!-- shortcodes -->
	<link rel="stylesheet" media="screen" href="/css/shortcodes.css" type="text/css" />

	<!-- accordion -->
	<link rel="stylesheet" type="text/css" href="/js/accordion.css" />

	<!-- tooltips -->
	<link rel="stylesheet" href="/js/tooltip.css" />

	<!-- progressbar -->
	<link rel="stylesheet" href="/js/ui.progress-bar.css">

	<?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
	<div id="page">

		<div id="header">
			  <!-- Header -->
  		<header>
    <div class="header-container">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-4 col-xs-6 language-currency-wrapper">
              <div class="inner-cl">
                <div class="block block-language form-language">
                  <div class="lg-cur"> <span> <img src="/images/flag-default.jpg" alt="French"> <span class="lg-fr">French</span> <i class="fa fa-angle-down"></i> </span> </div>
                  <ul>
                    <li> <a class="selected" href="#"> <img src="/images/flag-english.jpg" alt="flag"> <span>English</span> </a> </li>
                    <li> <a href="#"> <img src="/images/flag-default.jpg" alt="flag"> <span>French</span> </a> </li>
                    <li> <a href="#"> <img src="/images/flag-german.jpg" alt="flag"> <span>German</span> </a> </li>
                    <li> <a href="#"> <img src="/images/flag-brazil.jpg" alt="flag"> <span>Brazil</span> </a> </li>
                    <li> <a href="#"> <img src="/images/flag-chile.jpg" alt="flag"> <span>Chile</span> </a> </li>
                    <li> <a href="#"> <img src="/images/flag-spain.jpg" alt="flag"> <span>Spain</span> </a> </li>
                  </ul>
                </div>
                <div class="block block-currency">
                  <div class="item-cur"> <span>USD </span> <i class="fa fa-angle-down"></i></div>
                  <ul>
                    <li> <a href="#"><span class="cur_icon">€</span> EUR</a> </li>
                    <li> <a href="#"><span class="cur_icon">¥</span> JPY</a> </li>
                    <li> <a class="selected" href="#"><span class="cur_icon">$</span> USD</a> </li>
                  </ul>
                </div>
              </div>
              <!-- Default Welcome Message -->
              <div class="welcome-msg hidden-xs"><span class="info-phone"><i class="fa fa-phone"></i> + 0123 456 789</span> </div>
              <!-- End Default Welcome Message --> 
            </div>
            
            <!-- top links -->
            <div class="headerlinkmenu col-lg-5 col-md-7 col-sm-4 col-xs-6">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="account_page.php"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist" href="wishlist.php"><i class="fa fa-heart"></i><span class="hidden-xs">Wishlist</span></a></div>
                <div class="blog hidden-sm"><a title="Blog" href="blog.php"><i class="fa fa-rss"></i><span class="hidden-xs">Blog</span></a></div>
                <div class="login"><a href="account_page.php"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a></div>
              </div>
            </div>
            <!-- Search -->
            
            <div class="top-search col-lg-3 col-sm-4">
             <?php get_search_form(); ?>
            </div>
            
            <!-- End Search --> 
            
          </div>
        </div>
      </div>
      <div class="container"> 
        
        <!-- Navbar -->
        <nav>
          <div class="mtmegamenu">
            <div class="mm-toggle-wrap">
              <div class="mm-toggle"> <i class="fa fa-align-justify"></i><span class="mm-label">Menu</span> </div>
            </div>
            
            <!-- Header Logo -->
            <div class="logo"><a title="e-commerce" href="/e-comm2/index.php"><img alt="e-commerce" src="/images/logo-home5.png"></a> </div>
            <!-- End Header Logo -->
            <ul class="hidden-xs">
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="index.php">
                  <div class="title title_font"><span class="title-text">Home</span></div>
                  </a></div>
                
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="#">
                  <div class="title title_font"><span class="title-text">Page</span></div>
                  </a></div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 menucol-1-5 ">
                    <div class="title title_font"> <a href="#"> Template Page </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> shop grid </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid_left_sidebar.php"> shop grid left sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_list.php"> shop list </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_list_left_sidebar.php"> shop list left sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shopping_cart.php"> shopping cart </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="quick_view.php"> Quick View </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-5 ">
                    <div class="title title_font"> <a href="#"> Template Page </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="single_product.php"> single product </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="single_product_left_sidebar.php"> single product left sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="single_product_right_sidebar.php"> single product right sidebar</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="wishlist.php"> wishlists </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="checkout.php"> checkout </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="compare.php"> compare </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-5 ">
                    <div class="title title_font"> <a href="#"> Template Page </a></div>
                    <ul class="submenu">
                      <li class="menu-item depth-2 category ">
                        <div class="title"> <a href="account_page.php"> Create Account Page </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="about_us.php"> About Us </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="sitemap.php"> Sites Map </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="contact_us.php"> contact us </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="404error.php"> Error 404 </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="coming_soon.php"> Coming Soon </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item customcontent menucol-2-5 ">
                    <div class="normalized">
                      <div class="custom-menu-bottom">
                        <div class="menu-bottom col2"><a href="#"><img src="/images/page-cat-img.jpg" alt="Women"></a> </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="shop_grid.php">
                  <div class="title title_font"><span class="title-text">Women</span> <span class="menu-label hot-menu hidden-xs">hot</span></div>
                  </a></div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 menucol-1-5 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Accessories </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Cocktail </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Day </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Evening </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Sundresses </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-5 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Dresses </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Accessories </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Hats and Gloves </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Lifestyle </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Bras </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 menucol-1-5 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Top </a></div>
                    <ul class="submenu">
                      <li class="menu-item depth-2 category ">
                        <div class="title"> <a href="shop_grid.php"> Cocktail </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Day </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Evening </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Sundresses </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item customcontent menucol-2-5 ">
                    <div class="normalized">
                      <div class="custom-menu-bottom">
                        <div class="menu-bottom col2"><a href="#"><img src="/images/women-img.png" alt="Women"></a>
                          <div class="menu-bottom-dec">
                            <h3>Women Collection 2015</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#">Shop now</a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item divider "></li>
                  <li class="menu-item depth-1 category menucol-1-5">
                    <div class="title title_font"> <a href="shop_grid.php"> Handbags </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Toter </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Clutches </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Satchels </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Cross body </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-5 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Shoes </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Cocktail </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Hats and Gloves </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Lifestyle </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Bras </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-5 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Clothing </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Coats &amp; Jackets </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Blazers </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Raincoats </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Jackets </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 customcontent menucol-2-5 ">
                    <div class="normalized">
                      <div class="custom-menu-bottom">
                        <div class="menu-bottom col1"><a href="#"><img src="/images/men-img.png" alt="Women"></a>
                          <div class="menu-bottom-dec">
                            <h3>Men Collection 2015</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="#">Shop now</a></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="shop_grid.php">
                  <div class="title title_font"><span class="title-text">Men</span></div>
                  </a></div>
                <ul class="menu-items col-md-9 col-xs-12">
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Clothing </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Coats &amp; Jackets </a></div>
                      </li>
                      <li class="menu-item ">
                        <div class="title"> <a href="shop_grid.phps"> Raincoats </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Blazers </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Jackets </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Shoes </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Accessories </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Hats and Gloves </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Lifestyle </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Satchels </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Bags </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Toter </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Clutches </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Satchels </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Cross body </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Accessories </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Wallets </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Laptop Bags</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Belts </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Bakpacks </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 customcontent menucol-1-1 ">
                    <div class="normalized">
                      <div class="left_column_img col-sm-6"><a href="#"><img src="/images/men-menu-img1-pink.png" alt=""></a></div>
                      <div class="right_column_img col-sm-6"><a href="#"><img src="/images/men-menu-img2-pink.png" alt=""></a></div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="shop_grid.php">
                  <div class="title title_font"><span class="title-text">Electronics</span></div>
                  </a></div>
                <ul class="menu-items col-md-10 col-xs-12">
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Mobiles </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> iPhone </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Samsung </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Nokia </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Sony </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Music & Audio </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Audio </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Cameras </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Appling </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Car Music </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="shop_grid.php"> Accessories </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Home & Office </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> TV & Home Theater </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> Phones & Radio </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shop_grid.php"> All Electronics</a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 customcontent menucol-1-4">
                    <div class="normalized">
                      <div class="right_block_img_menu"><a href="#"> <img src="/images/electronics-img.png" alt="electronics"> </a></div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item"><a href="#">
                  <div class="title title_font"><span class="title-text">Elements </span> <span class="menu-label new-menu hidden-xs">new</span></div>
                  </a></div>
                <ul class="menu-items col-md-9 col-xs-12">
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="#"> Portfolio Page </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="portfolio4.php"> Portfolio 4 Columns </a></div>
                      </li>
                      <li class="menu-item ">
                        <div class="title"> <a href="portfolio3.php"> Portfolio 3 Columns </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="portfolio2.php"> Portfolio 2 Columns</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="portfolio.php"> Portfolio 1 Column </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="portfolio-post.php"> Portfolio Post </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="featured-box.php"> Featured Box </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="#"> Elements Page 1</a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="accordion_toggle.php"> Accordion Toggle </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="buttons.php"> Buttons </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="/images.php"> Images </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="pie_charts.php"> Pie Charts </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="glyphicons.php"> Glyphicons </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="shortcode-post.php"> post </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="#"> Elements Page 2</a></div>
                    <ul class="submenu">
                      <li class="menu-item ">
                        <div class="title"> <a href="typography.php"> Typography </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="pagination.php"> Pagination </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="forms.php"> Forms</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="ani_counters.php"> Animated Counters </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="alerts.php"> Alerts </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="testimonial.php"> testimonial </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 category menucol-1-4 ">
                    <div class="title title_font"> <a href="#"> Elements Page 3 </a></div>
                    <ul class="submenu">
                      <li class="menu-item">
                        <div class="title"> <a href="tables.php"> Tables</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="progress_bars.php"> Progress bars </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="tabs.php"> Tabs</a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="tooltips.php"> Tooltips </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="carousel.php"> Carousel </a></div>
                      </li>
                      <li class="menu-item">
                        <div class="title"> <a href="pricing-table.php"> Pricing Table </a></div>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item depth-1 customcontent menucol-1-1 ">
                    <div class="normalized">
                      <div class="left_column_img col-md-12"><a href="#"><img src="/images/m-cat-img-pink.jpg" alt=""></a></div>
                    </div>
                  </li>
                </ul>
              </li>
              <li class="mt-root demo_custom_link_cms">
                <div class="mt-root-item"><a href="blog.php">
                  <div class="title title_font"><span class="title-text">Blog</span></div>
                  </a></div>
                <ul class="menu-items col-md-2 col-sm-3 col-xs-12">
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="blog_right_sidebar.php"> Blog – Right Sidebar </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="blog_left_sidebar.php"> Blog – Left Sidebar </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="blog_full_width.php"> Blog – Full-Width </a></div>
                  </li>
                  <li class="menu-item depth-1">
                    <div class="title"> <a href="single_post.php"> Single post </a></div>
                  </li>
                </ul>
              </li>
              <li class="mt-root">
                <div class="mt-root-item">
                  <div class="title title_font"><span class="title-text">On sale</span></div>
                </div>
                <ul class="menu-items col-xs-12">
                  <li class="menu-item depth-1 product menucol-1-4 withimage">
                    <div class="product-item">
                      <div class="item-inner fadeInUp">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="product-thumbnail">
                          <div class="pr-img-area"> <a href="single_product.php">
                            <figure> <img class="first-img" src="/images/img01.jpg" alt=""> <img class="hover-img" src="/images/img01.jpg" alt=""></figure>
                            </a>
                            <div class="quick-view"> <a title="Add to my wishlist" class="heart" href="wishlist.php"></a> <a title="Add to compare" class="compare" href="compare.php"></a> <a title="Quick view" class="search" href="quick_view.php"></a> </div>
                            <div class="add-to-cart">
                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.php">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item depth-1 product menucol-1-4 withimage">
                    <div class="product-item">
                      <div class="item-inner fadeInUp">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="product-thumbnail">
                          <div class="pr-img-area"> <a href="single_product.php">
                            <figure> <img class="first-img" src="/images/img18.jpg" alt=""> <img class="hover-img" src="/images/img18.jpg" alt=""></figure>
                            </a>
                            <div class="quick-view"> <a title="Add to my wishlist" class="heart" href="wishlist.php"></a> <a title="Add to compare" class="compare" href="compare.php"></a> <a title="Quick view" class="search" href="quick_view.php"></a> </div>
                            <div class="add-to-cart">
                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.php">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item depth-1 product menucol-1-4 withimage">
                    <div class="product-item">
                      <div class="item-inner fadeInUp">
                        <div class="icon-sale-label sale-left">Sale</div>
                        <div class="icon-new-label new-right">New</div>
                        <div class="product-thumbnail">
                          <div class="pr-img-area"> <a href="single_product.php">
                            <figure> <img class="first-img" src="/images/img19.jpg" alt=""> <img class="hover-img" src="/images/img19.jpg" alt=""></figure>
                            </a>
                            <div class="quick-view"> <a title="Add to my wishlist" class="heart" href="wishlist.php"></a> <a title="Add to compare" class="compare" href="compare.php"></a> <a title="Quick view" class="search" href="quick_view.php"></a> </div>
                            <div class="add-to-cart">
                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.php">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="menu-item depth-1 product menucol-1-4 withimage">
                    <div class="product-item">
                      <div class="item-inner fadeInUp">
                        <div class="icon-sale-label sale-right">Sale</div>
                        <div class="product-thumbnail">
                          <div class="pr-img-area"> <a href="single_product.php">
                            <figure> <img class="first-img" src="/images/img20.jpg" alt=""> <img class="hover-img" src="/images/img20.jpg" alt=""></figure>
                            </a>
                            <div class="quick-view"> <a title="Add to my wishlist" class="heart" href="wishlist.php"></a> <a title="Add to compare" class="compare" href="compare.php"></a> <a title="Quick view" class="search" href="quick_view.php"></a> </div>
                            <div class="add-to-cart">
                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                            </div>
                          </div>
                        </div>
                        <div class="item-info">
                          <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.php">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                              <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> </div>
                              <div class="item-price">
                                <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <!-- top cart -->
            <div class="top-cart">
              <div class="top-cart-contain">
                <div class="mini-cart">
                  <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"><i class="fa fa-shopping-cart"></i><span class="cart-title hidden-sm hidden-md">My Cart (4)</span></a></div>
                  <div>
                    <div class="top-cart-content">
                      <div class="block-subtitle">Recently added item(s)</div>
                      <ul id="cart-sidebar" class="mini-products-list">
                        <li class="item odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="/images/img07.jpg" alt="Lorem ipsum dolor" width="65"></a>
                          <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                            <p class="product-name"><a href="#">Lorem ipsum dolor sit amet Consectetur</a> </p>
                            <strong>1</strong> x <span class="price">$20.00</span> </div>
                        </li>
                        <li class="item even"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="/images/img18.jpg" alt="Lorem ipsum dolor" width="65"></a>
                          <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                            <p class="product-name"><a href="#">Consectetur utes anet adipisicing elit</a> </p>
                            <strong>1</strong> x <span class="price">$230.00</span> </div>
                        </li>
                        <li class="item last odd"> <a href="#" title="Ipsums Dolors Untra" class="product-image"><img src="/images/img10.jpg" alt="Lorem ipsum dolor" width="65"></a>
                          <div class="product-details"> <a href="#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                            <p class="product-name"><a href="#">Sed do eiusmod tempor incidist</a> </p>
                            <strong>2</strong> x <span class="price">$420.00</span> </div>
                        </li>
                      </ul>
                      <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                      <div class="actions">
                        <button class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
                        <button class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <!-- end nav --> 
        
      </div>
    </div>
  </header>
  <!-- end header -->
		</div>