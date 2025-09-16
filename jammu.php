<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>

<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Learnpro - Education University School Kindergarten Learning HTML Template" />
<meta name="keywords" content="education,school,university,educational,learn,learning,teaching,workshop" />
<meta name="author" content="ThemeMascot" />

<!-- Page Title -->
<title>JAMMU AND KASHMIR </title>

<!-- Favicon and Touch Icons -->
<link href="images/jk.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<!-- Stylesheet -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/css-plugin-collections.css" rel="stylesheet"/>
<!-- CSS | menuzord megamenu skins -->
<link href="css/menuzord-megamenu.css" rel="stylesheet"/>
<link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-rounded-boxed.css" rel="stylesheet"/>
<!-- CSS | Main style file -->
<link href="css/style-main.css" rel="stylesheet" type="text/css">
<!-- CSS | Preloader Styles -->
<link href="css/preloader.css" rel="stylesheet" type="text/css">
<!-- CSS | Custom Margin Padding Collection -->
<link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet" type="text/css">
<!-- CSS | Responsive media queries -->
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
<!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

<!-- Revolution Slider 5.x CSS settings -->
<link  href="js/revolution-slider/css/settings.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/layers.css" rel="stylesheet" type="text/css"/>
<link  href="js/revolution-slider/css/navigation.css" rel="stylesheet" type="text/css"/>

<!-- CSS | Theme Color -->
<link href="css/colors/theme-skin-color-set3.css" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- JS | jquery plugin collection for this theme -->
<script src="js/jquery-plugin-collection.js"></script>

<!-- Revolution Slider 5.x SCRIPTS -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body class="has-fixed-footer">
<div id="wrapper" class="clearfix">
  <!-- preloader -->

<!-- POPUP START -->
<div class="popup-overlay" id="popupForm">
  <div class="popup">
    <button class="close-btn" onclick="closePopup()">&times;</button>
    
    <img src="images/v1.jpg" width="250" height="180" alt="Explore Jammu & Kashmir">

    <h2 style="margin-top:10px; color:#006400; font-family:Georgia, serif;">
      Explore Jammu & Kashmir
    </h2>

    <p style="border:1px solid #c0c0c054; font-weight:bold; border-radius:5px; padding:10px;">
      "Heaven on Earth awaits your visit."
    </p>
    
    <p style="margin-top:10px; font-family:cursive; font-size:17px;">
      <b>Discover</b><br>
      <strong style="color:#20c997; font-size:20px;">Mountains</strong> | 
      <strong style="color:#20c997; font-size:20px;">Culture</strong> | 
      <strong style="color:#20c997; font-size:20px;">Food</strong> | 
      <strong style="color:#20c997; font-size:20px;">Adventure</strong>
    </p>

    <div class="cause__cta" style="margin-top:12px;">
      <a href="home.php" aria-label="explore now" title="explore now" class="btn--primary">
        Explore Now <i class="fa-solid fa-arrow-right-long"></i>
      </a>
    </div>
  </div>
</div>
<!-- POPUP END -->

<!-- CSS -->
<style>
  .popup-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0,0,0,0.6);
    justify-content: center;
    align-items: center;
    z-index: 9999;
  }

  .popup {
    background: #fff;
    padding: 25px;
    border-radius: 14px;
    width: 380px;
    max-width: 90%;
    text-align: center;
    position: relative;
    animation: fadeInScale 0.3s ease-in-out;
    box-shadow: 0px 5px 25px rgba(0,0,0,0.35);
  }

  .close-btn {
    position: absolute;
    top: 10px;
    right: 12px;
    font-size: 22px;
    border: none;
    background: none;
    cursor: pointer;
    color: #333;
    transition: 0.3s;
  }

  .close-btn:hover {
    color: red;
  }

  @keyframes fadeInScale {
    from { transform: scale(0.7); opacity: 0; }
    to { transform: scale(1); opacity: 1; }
  }

  .btn--primary {
    display: inline-block;
    padding: 10px 20px;
    background: linear-gradient(45deg, #20c997, #006400);
    color: #fff;
    border-radius: 8px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
  }

  .btn--primary:hover {
    background: linear-gradient(45deg, #17a589, #004d00);
  }
</style>

<!-- SCRIPT -->
<script>
  function openPopup() {
    document.getElementById("popupForm").style.display = "flex";
  }

  function closePopup() {
    document.getElementById("popupForm").style.display = "none";
  }

  document.getElementById("popupForm").addEventListener("click", function(e) {
    if (e.target === this) {
      closePopup();
    }
  });

  // Auto open after 5 sec
  setTimeout(openPopup, 5000);

  // Auto open every 3 minutes
  setInterval(openPopup, 180000);
</script>

 
  
  <!-- Header -->
  <header id="header" class="header header-floating">
  <div class="header-top sm-text-center" style="background: linear-gradient(to right, #43cea2, #185a9d);">

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="widget text-white">
             <ul class="list-inline xs-text-center text-white">
                <li class="m-0 pl-10 pr-10"> <a href="#" class="text-white" style="padding: 5px 15px; letter-spacing: 1px;"> 
    Explore Jammu & Kashmir | Adventure · Beauty · Culture 
  </a>  </li>
                             </ul>
            </div>
          </div>
          <div class="col-md-4 pr-0">
            <div class="widget">
              <ul class="styled-icons icon-sm pull-right flip sm-pull-none sm-text-center mt-5">
                <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-2">
            <ul class="list-inline sm-pull-none sm-text-center text-right text-white mb-sm-20 mt-10">
              <li class="m-0 pl-0 pr-10"> 
                <!--<a href="verify.php" class=""><i class="fa fa-edit mr-5"></i>Verify Certificate</a> -->
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>	
    <div class="header-nav navbar-sticky navbar-sticky-animated">
  <div class="header-nav-wrapper">
    <div class="container">
      <nav id="menuzord-right" class="menuzord default no-bg">
        <a href="home.php" class="menuzord-brand">
          <img src="images/hrithik1.png" alt="Logo" class="logo">
        </a>

        <!-- Menu Items -->
        <ul class="menuzord-menu">
          <li class="active"><a href="jammu.php">Jammu</a></li>
          <li><a href="kishtwar.html">Kishtwar</a></li>
          <li><a href="kashmir.php">Kashmir</a></li>

          <li>
            <a href="#">LEH-LADAKH</a>
            <ul class="dropdown">
              <li><a href="leh.php">Leh</a></li>
              <li><a href="ladakh.php">Ladakh</a></li>
            </ul>
          </li>

          <li><a href="contactus.html">Contact Us</a></li>
        </ul>
        <!-- End Menu Items -->

      </nav>
    </div>
  </div>
</div>

  </header>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <section id="home">
      <div class="container-fluid p-0">
        
        <!-- START REVOLUTION SLIDER 5.0.7 -->
        <div id="rev_slider_home_wrapper" class="rev_slider_wrapper" data-alias="news-gallery34" style="margin:0px auto; background-color:#ffffff; padding:0px; margin-top:0px; margin-bottom:0px;">
          <!-- START REVOLUTION SLIDER 5.0.7 fullwidth mode -->
          <div id="rev_slider_home" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.0.7">
            <ul>
              <!-- SLIDE 1 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/v2.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/v2.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-3" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Bagh-e-Bahu <span class="text-theme-colored2">Jammu </span>                 </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><br>
 Bagh-e-Bahu's history originates with the construction of the ancient Bahu Fort, <br>built by Raja Bahu Lochan about 3,000 years ago after his brother, Raja Jambu Lochan, <br>chose the site for a new capital due to a divine vision of a tiger and goat drinking together. <br>The terraced gardens surrounding the fort, known as Bagh-e-Bahu, <br>were later developed from the forest area to provide a scenic complement.

                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                                  </div>
              </li>

              <!-- SLIDE 2 -->
              <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/v1.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/v1.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-2-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-2-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Vaishno Devi<span class="text-theme-colored2">  </span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-2-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"> The history of Vaishno Devi is a blend of legend and myth,<br> originating with the incarnation of Goddess Durga as Vaishnavi,<br> who mediated in a cave in the Trikuta mountains and later defeated the demon Bhairavnath.    
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-2-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                                  </div>
              </li>

              <!-- SLIDE 3 -->
              <li data-index="rs-3" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/v3.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/v3.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-4" 
                  id="slide-3-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.35);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-3-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Shri Raghunath Temple, Jammu<span class="text-theme-colored2">  </span>
                </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-3-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><br>
<br><br> Raghunath Temple is a Hindu temple located in Jammu in the Indian union territory of Jammu and Kashmir.<br> It consists of a complex of seven Hindu shrines.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-3-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                                  </div>
              </li>

<!-- SLIDE 4 -->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/v4.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/v4.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-3" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Shri Ranbireshwar Temple <span class="text-theme-colored2"> </span>                 </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><br>
The biggest Shiva temple in north India, Ranbireshwar Temple is one of the prime attractions in the picturesque Jammu city.<br> It is a very ancient shrine, located in Shalimar Road near the New Secretariat. <br>Maharaja Ranbir Singh built it in 1883, dedicated to Lord Shiva.
                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                                  </div>
              </li>

<!-- SLIDE 5-->
              <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="images/v5.jpg" data-rotate="0"  data-fstransition="fade" data-saveperformance="off" data-title="Web Show" data-description="">
                <!-- MAIN IMAGE -->
                <img src="images/v5.jpg" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                <!-- LAYERS -->
                <!-- LAYER NR. 1 -->
                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme rs-parallaxlevel-0 bg-theme-colored-transparent-3" 
                  id="slide-1-layer-1" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                  data-width="full"
                  data-height="full"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="opacity:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="opacity:0;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                  data-start="500" 
                  data-basealign="slide" 
                  data-responsive_offset="on" 
                  style="z-index: 5;background-color:rgba(0, 0, 0, 0.1);border-color:rgba(0, 0, 0, 1.00);"> 
                </div>
                <!-- LAYER NR. 2 -->
                <div class="tp-caption tp-resizeme rs-parallaxlevel-0 text-white text-uppercase font-roboto-slab font-weight-700" 
                  id="slide-1-layer-2" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['195','195','160','170']" 
                  data-fontsize="['58','48','42','36']"
                  data-lineheight="['70','60','50','45']"
                  data-fontweight="['800','700','700','700']"
                  data-textalign="['center','center','center','center']"
                  data-width="['700','650','600','420']"
                  data-height="none"
                  data-whitespace="normal"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="600" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap; font-weight:700;">Bagh-e-Bahu <span class="text-theme-colored2">Jammu </span>                 </div>
                <!-- LAYER NR. 3 -->
                <div class="tp-caption tp-resizeme text-white rs-parallaxlevel-0" 
                  id="slide-1-layer-3" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['275','260','220','220']"
                  data-fontsize="['16','16',18',16']"
                  data-lineheight="['24','24','24','24']"
                  data-fontweight="['400','400','400','400']"
                  data-textalign="['center','center','center','center']"
                  data-width="['800','650','600','460']"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" 
                  data-mask_out="x:0;y:0;s:inherit;e:inherit;" 
                  data-start="700" 
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  style="z-index: 5; white-space: nowrap;"><br>
 Bagh-e-Bahu's history originates with the construction of the ancient Bahu Fort, <br>built by Raja Bahu Lochan about 3,000 years ago after his brother, Raja Jambu Lochan, <br>chose the site for a new capital due to a divine vision of a tiger and goat drinking together. <br>The terraced gardens surrounding the fort, known as Bagh-e-Bahu, <br>were later developed from the forest area to provide a scenic complement.

                </div>
                <!-- LAYER NR. 4 -->
                <div class="tp-caption rs-parallaxlevel-0" 
                  id="slide-1-layer-4" 
                  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                  data-y="['top','top','top','top']" data-voffset="['350','330','290','290']" 
                  data-width="none"
                  data-height="none"
                  data-whitespace="nowrap"
                  data-transform_idle="o:1;"
                  data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;"
                  data-transform_in="y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" 
                  data-transform_out="auto:auto;s:1000;e:Power3.easeInOut;" 
                  data-mask_in="x:0px;y:0px;" 
                  data-mask_out="x:0;y:0;" 
                  data-start="800"
                  data-splitin="none" 
                  data-splitout="none" 
                  data-responsive_offset="on" 
                  data-responsive="off"
                                  </div>
              </li>


            </ul>
            <div class="tp-bannertimer tp-bottom" style="height: 5px; background-color: rgba(255, 255, 255, 0.2);"></div>
          </div>
        </div>

        <!-- END REVOLUTION SLIDER -->
        <script type="text/javascript">
          var tpj=jQuery;
          var revapi34;
          tpj(document).ready(function() {
            if(tpj("#rev_slider_home").revolution == undefined){
              revslider_showDoubleJqueryError("#rev_slider_home");
            }else{
              revapi34 = tpj("#rev_slider_home").show().revolution({
                sliderType:"standard",
                jsFileLocation:"js/revolution-slider/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:5000,
                navigation: {
                  keyboardNavigation:"on",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation:"off",
                  onHoverStop:"on",
                  touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                  }
                  ,
                  arrows: {
                    style:"zeus",
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                    left: {
                      h_align:"left",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    },
                    right: {
                      h_align:"right",
                      v_align:"center",
                      h_offset:30,
                      v_offset:0
                    }
                  },
                  bullets: {
                    enable:true,
                    hide_onmobile:true,
                    hide_under:600,
                    style:"metis",
                    hide_onleave:true,
                    hide_delay:200,
                    hide_delay_mobile:1200,
                    direction:"horizontal",
                    h_align:"center",
                    v_align:"bottom",
                    h_offset:0,
                    v_offset:30,
                    space:5,
                    tmp:'<span class="tp-bullet-img-wrap"><span class="tp-bullet-image"></span></span>'
                  }
                },
                viewPort: {
                  enable:true,
                  outof:"pause",
                  visible_area:"80%"
                },
                responsiveLevels:[1240,1024,778,480],
                gridwidth:[1240,1024,778,480],
                gridheight:[600,550,500,450],
                lazyType:"none",
                parallax: {
                  type:"scroll",
                  origo:"enterpoint",
                  speed:400,
                  levels:[5,10,15,20,25,30,35,40,45,50],
                },
                shadow:0,
                spinner:"off",
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,
                shuffle:"off",
                autoHeight:"off",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                  simplifyAll:"off",
                  nextSlideOnWindowFocus:"off",
                  disableFocusListener:false,
                }
              });
            }
          }); /*ready*/
        </script>
      <!-- END REVOLUTION SLIDER -->

      </div>
    </section>

    <!-- Section: home-boxes -->
    <section>
      <div class="container pt-0 pb-0">
        <div class="section-content">
          <div class="row equal-height-inner home-boxes" data-margin-top="-100px">
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay1">
              <div class="sm-height-auto" data-bg-color="#5D9CEC">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-map-marker font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">About Jammu</a></h4>
                  <p class="text-white" style="text-align: justify;">Jammu is the most populous district in the Indian state of Jammu and Kashmir and is home to the winter capital (Jammu) of Jammu and Kashmir. (The capital moves to Srinagar city in the summer). The largest city is Jammu. As of 2011 it is the most populous district of Jammu and Kashmir. District has a population of around 15 Lacs has per census 2011 and has further 7 sub-divisons and 21 tehsils and 20 rural development blocks.</p>
                                  </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay2">
              <div class="sm-height-auto" data-bg-color="#EF5861">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-plane font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Must-Visit Places In Jammu</a></h4>
                  <p class="text-white" style="text-align: justify;">1. Vaishno Devi Temple<br>
2. Raghunath Bazaar<br>
3. Ranbireshwar Temple<br>
4. Mubarak Mandi Palace<br>
5. Bahu Fort & Bagh-e-Bahu<br>
6. Tawi River<br>
7. Amar Mahal Palace Museum<br>
8. Peer Kho Cave Temple<br>
9. Mansar Lake<br>
10. Patnitop</p>
                                  </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay3">
              <div class="sm-height-auto" data-bg-color="#E79800">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-map-marker font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Jammu Division</a></h4>
                  <p class="text-white">1. Jammu<br>
2. Kathua<br>
3. Samba<br>
4. Udhampur<br>
5. Reasi<br>
6. Rajouri<br>
7. Poonch<br>
8. Doda<br>
9. Kishtwar<br>
10. Ramban</p>
</p>
                  
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-3 pl-0 pl-sm-15 pr-0 pr-sm-15 sm-height-auto mt-sm-0 wow fadeInLeft animation-delay4">
              <div class="sm-height-auto" data-bg-color="#43B14B">
                <div class="features-box-colored text-center p-15 pt-30 pb-20">
                  <i class="fa fa-map-marker font-54 mb-20 text-white"></i>
                  <h4 class="text-uppercase font-weight-600 mt-0"><a href="page-donate.html" class="text-white">Kashmir Division</a></h4>
                  <p class="text-white" > 
1. Anantnag<br>
2. Kulgam<br>
3. Pulwama<br>
4. Shopian<br>
5. Budgam<br>
6. Srinagar<br>
7. Ganderbal<br>
8. Bandipore<br>
9. Baramulla<br>
10. Kupwara</p>
</p>
                                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section About -->
    <section>
      <div class="container pt-50 pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0">About <span class="text-theme-colored2">Jammu and Kashmir</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <p class="font-16 mt-20">

Jammu & Kashmir, located in the northernmost part of India, is renowned for its breathtaking landscapes, serene valleys, majestic mountains, and rich cultural heritage. Known as "Paradise on Earth," it attracts tourists from all over the world with its scenic beauty, historic temples, vibrant markets, and adventure opportunities. The region serves as a hub for trekking, skiing, river rafting, and exploring unique traditions and handicrafts.
</p>
              
              
            </div>
            <div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Video <span class="text-theme-colored2">Tour</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
              <div class="box-hover-effect about-video">
                <div class="effect-wrapper">
                  <div class="thumb">
                    <img class="img-fullwidth" src="images/jammu.jpg" alt="project">
                  </div>
                  <div class="video-button"></div>
                  <a class="hover-link" data-lightbox-gallery="youtube-video" href="images/jammu1.mp4" title="Youtube Video" target="blank">Youtube Video</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <h3 class="text-uppercase font-weight-600 mt-0 mt-sm-30">Upcoming <span class="text-theme-colored2">Events</span></h3>
              <div class="double-line-bottom-theme-colored-2"></div>
			   <?php
				
				include("connect.php");
				$r="select * from  notice";
				$rt=mysqli_query($cc,$r);
				while($res=mysqli_fetch_row($rt))
				{
				
				?>
				<marquee direction="up" onmouseover="stop()" onmouseout="start()">
              <article>
                <div class="event-small media sm-maxwidth400 mt-0 mb-0 pt-0 pb-15">
                  <div class="event-date text-center">
                    <ul class="text-white">
                      <li class="font-18 font-weight-700 border-bottom">22</li>
                      <li class="font-14 text-center text-uppercase mt-5">Sep</li>
                    </ul>
                  </div>
                  <div class="event-content pt-5">
                    <h5 class="media-heading font-16 font-weight-600 mb-5"><a href="#">Navratra</a></h5>
                    <span class="mr-10"><i class="fa fa-clock-o text-theme-colored2"></i> </span>
                    <span> <i class="fa fa-map-marker text-theme-colored2"></i> Jammu and Kashmir.</span>
                  </div>
                </div>
              </article>
			  </marquee>
			  <?php
			  }
			  ?>
             
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Courses -->
    <section id="courses" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase title">Welcome to Explore <span class="text-theme-colored2">Jammu</span></h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase">Choose Your Desired Destination</p>
            </div>
          </div>
        </div>
        <div class="row mtli-row-clearfix">
          <div class="owl-carousel-3col" data-nav="true">
		  <?php
                  include("connect.php");  

$r = "SELECT * FROM places";  
$rt = mysqli_query($cc, $r);

while($res = mysqli_fetch_row($rt)) {
    $rem = "admin/images/";
    $imm = $res[3];  
    $pic = $rem . $imm;
?>
<div class="item">
    <div class="course-single-item bg-white border-1px clearfix mb-30">
        <div class="course-thumb">
            <img class="img-fullwidth" alt="<?= $res[1]; ?>" src="<?= $pic; ?>" style="width:100%; height:200px; object-fit:cover; border-radius:8px;">

            <div class="price-tag"></div>
        </div>
        <div class="course-details clearfix p-20 pt-15">
            <div class="course-top-part pull-left mr-40">
                <a href=""><h4 class="mt-0 mb-5"><?= $res[1]; ?></h4></a>
                <ul class="list-inline">
                    <li class="review-stars">
                        <!-- Optional: remove stars if not needed -->
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
            <ul class="list-inline course-meta mt-15">
                <li>
                    <h6><?= $res[4]; ?></h6>
                    <span>Place</span>
                </li>
                <li>
                    <h6><?= $res[2]; ?></h6>
                    <span>Category</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<?php
}
?>

          </div>
        </div>
      </div>
    </section>

    <!--start Funfacts Section-->
    <section class="parallax layer-overlay overlay-theme-colored-9" data-bg-img="images/banner2.png" data-parallax-ratio="0.4">
      <div class="container pt-90 pb-90">
        <div class="section-content">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="9500000" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0"> Toursit in 2025</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="40" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Popular Destinations</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-50">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="15" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Adventure Activities</h5>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 mb-md-0">
              <div class="funfact text-center">
                <div class="odometer-animate-number text-white font-weight-600 font-48" data-value="56" data-theme="minimal">0</div>
                <div class="double-line-bottom-centered-theme-colored-2 mt-0 mb-25"></div>
                <h5 class="text-white text-uppercase mb-0">Heritage Sites</h5>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Team -->
    
    <!-- Divider: Testimonials -->
    <section class="parallax Divider layer-overlay overlay-theme-colored-9" data-bg-img="images/bg/bg7.jpg" data-parallax-ratio="0.4">
      <div class="container pt-70 pb-30">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="text-uppercase text-white title">What <span class="text-theme-colored2">People </span>Say</h2>
              <div class="double-line-bottom-centered-theme-colored-2 mt-20"></div>              
              <p class="text-uppercase mb-0">Tourists’ Experiences in Jammu</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-30">
            <div class="owl-carousel-2col boxed" data-dots="true">
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                                      </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Vaishno Devi Yatra was a divine experience. The trek was spiritual and the energy of the place is beyond words.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Ritu Mehra</h5>
                    <h6 class="text-gray-darkgray mt-5">Pilgrim</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                    
                  </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Patnitop is a hidden gem! The mountain views, fresh air, and peaceful vibes made my trip so refreshing.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Arjun Malhotra</h5>
                    <h6 class="text-gray-darkgray mt-5">Traveler</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                                      </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Mansar Lake was breathtaking. Boating there with family felt like a perfect getaway from city life.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Priya Singh</h5>
                    <h6 class="text-gray-darkgray mt-5">Vlogger</h6>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial pt-10">
                  <div class="thumb pull-left mb-0 mr-0">
                                      </div>
                  <div class="testimonial-content">
                    <h4 class="text-white font-weight-300 mt-0">Jammu has so much more than temples – forts, gardens, and local Dogra culture made my visit memorable.</h4>
                    <h5 class="text-theme-colored2 mt-10 font-16 mb-0">Hrithik Sharma</h5>
                    <h6 class="text-gray-darkgray mt-5">Hrithik Sharma, Founder</h6>
                  </div>
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Events -->
    <section>
      <div class="container pb-50">
        <div class="section-content">
          <div class="row">
            <div class="col-md-5">
              <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-question-circle-o mr-10"></i>Frequently Asked <span class="text-theme-colored2">Questions</span></h3>
              <div class="panel-group accordion-stylished-left-border accordion-icon-filled accordion-no-border accordion-icon-left accordion-icon-filled-theme-colored2" id="accordion6" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headin1">
                    <h6 class="panel-title">
                      <a role="button" data-toggle="collapse" data-parent="#accordion6" href="#collaps1" aria-expanded="true" aria-controls="collaps1">
                        What is the best time to visit Jammu & Kashmir?
                      </a>
                    </h6>
                  </div>
                  <div id="collaps1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headin1">
                    <div class="panel-body">
                      Spring (March–May) and Winter (December–February) are most popular for tourists.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading2">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse2" aria-expanded="false" aria-controls="collapse2">
                        Is it safe to travel to Jammu & Kashmir in 2025?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                    <div class="panel-body">
                       Yes, major tourist areas are safe with improved facilities and security.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading3">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse3" aria-expanded="false" aria-controls="collapse3">
                        Do I need any permits to visit places?

                      </a>
                    </h6>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                    <div class="panel-body">
                      Only some areas like Ladakh or border zones may require permits.
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading4">
                    <h6 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion6" href="#collapse4" aria-expanded="false" aria-controls="collapse4">
                       What local food should I try?
                      </a>
                    </h6>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                    <div class="panel-body">
                    In Jammu, try the rich Rajma Chawal (kidney beans with rice), Kalaadi Kulcha (a local cheese with bread), and the spicy Khatta Meat. In Kashmir, savor the fragrant lamb curry Rogan Josh, the yogurt-based lamb curry Yakhni, the tender Tabak Maaz , and the delicious Kashmiri Pulao. Don't forget to try the traditional Wazwan feast, a multi-course meal with many dishes, and the aromatic green tea Kehwa.
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <h3 class="text-uppercase line-bottom-theme-colored-2 line-height-1 mt-0 mt-sm-30"><i class="fa fa-photo mr-10"></i>See Our <span class="text-theme-colored2">Gallery</span></h3>
              <div class="gallery-isotope default-animation-effect grid-4 gutter clearfix" data-lightbox="gallery">
                <!-- Portfolio Item Start -->
                
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
				
				<?php
				
				include("connect.php");
				$r="select * from  gallery";
				$rt=mysqli_query($cc,$r);
				while($res=mysqli_fetch_row($rt))
				{
				$rem="admin/images/";
				$imm=$res[1];
				$pic=$rem.$imm;
				?>
                <div class="gallery-item">
                  <div class="thumb">
                    <img alt="project" src="<?= $pic;?>" class="img-fullwidth">
                    <div class="overlay-shade"></div>
                    <div class="icons-holder">
                      <div class="icons-holder-inner">
                        <div class="styled-icons icon-sm icon-dark icon-circled icon-theme-colored">
                          <a href="<?= $pic;?>"  data-lightbox-gallery="gallery"><i class="fa fa-picture-o"></i></a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
				<?php
				}
				?>
				
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->

                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
               
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
              
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
               
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
                
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
            
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
               
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
               
                <!-- Portfolio Item End -->
                
                <!-- Portfolio Item Start -->
             
                <!-- Portfolio Item End -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: blog -->
    <section id="blog" class="bg-silver-deep">
      <div class="container pb-40">
        <div class="section-title">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-uppercase title">Top Tourist  <span class="text-theme-colored2">Attractions </span></h2>              
              <p class="text-uppercase mb-0">Must Visit in Jammu</p>
					  	<div class="double-line-bottom-theme-colored-2"></div>
						</div>
          </div>
        </div>
        <div class="section-content">
          <div class="row">
            <div class="col-md-8">
              <div class="owl-carousel-2col owl-nav-top" data-nav="true">
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="images/v1.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                    
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="">Vaishno Devi</a></h4>
                            <ul class="list-inline">
                          
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                <div class="item">
                  <article class="post clearfix mb-30">
                    <div class="entry-header">
                      <div class="post-thumb thumb"> 
                        <img src="images/v5.jpg" alt="" class="img-responsive img-fullwidth"> 
                      </div>                    
                    
                    </div>
                    <div class="entry-content bg-white p-15">
                      <div class="entry-meta media no-bg no-border mt-0 mb-10">
                        <div class="media-body pl-0">
                          <div class="event-content pull-left flip">
                            <h4 class="entry-title text-white text-uppercase font-weight-600 m-0 mt-5"><a href="">Maharaja Hari Singh Palace</a></h4>
                            <ul class="list-inline">
                          
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </article>
                </div>
                
               
              </div>
            </div>
            <div class="col-md-4">
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <h2 class="mt-0 line-height-1"><span class="text-theme-colored2">Contact us</span></h2>
                  <div class="double-line-bottom-theme-colored-2 mt-15 mb-10"></div>
                  <p class="mb-15">We will help you discover the beauty of Jammu and Kashmir.</p>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2 text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Our Office Location</h5>
                      <p>Gandhi Nagar <br></p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Contact Number</h5>
                      <p>8492840864</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-12">
                  <div class="icon-box left media bg-white border-1px p-15 mb-15"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored2"></i></a>
                    <div class="media-body">
                      <h5 class="mt-0">Email Address</h5>
                      <p><a href="" class="__cf_email__" data-cfemail="">hrithiks227@gmail.com</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Map -->
    <!--<section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3356.415030312622!2d74.84924770887507!3d32.72816857357431!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391e848dd166fd01%3A0x6eb252a1fc8cb5d2!2sEdes%20%2F%20Doeacc!5e0!3m2!1sen!2sin!4v1755426832677!5m2!1sen!2sin" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </section> -->


    <!-- Divider: Call To Action -->
   
              <!-- Mailchimp Subscription Form Validation-->
              <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript">
                $('#mailchimp-subscription-form-footer').ajaxChimp({
                    callback: mailChimpCallBack,
                    url: '//thememascot.us9.list-manage.com/subscribe/post?u=a01f440178e35febc8cf4e51f&amp;amp;amp;id=49d6d30e1e'
                });

                function mailChimpCallBack(resp) {
                    // Hide any previous response text
                    var $mailchimpform = $('#mailchimp-subscription-form-footer'),
                        $response = '';
                    $mailchimpform.children(".alert").remove();
                    if (resp.result === 'success') {
                        $response = '&amp;lt;div class="alert alert-success"&amp;gt;&amp;lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&amp;gt;&amp;lt;span aria-hidden="true"&amp;gt;&amp;amp;times;&amp;lt;/span&amp;gt;&amp;lt;/button&amp;gt;' + resp.msg + '&amp;lt;/div&amp;gt;';
                    } else if (resp.result === 'error') {
                        $response = '&amp;lt;div class="alert alert-danger"&amp;gt;&amp;lt;button type="button" class="close" data-dismiss="alert" aria-label="Close"&amp;gt;&amp;lt;span aria-hidden="true"&amp;gt;&amp;amp;times;&amp;lt;/span&amp;gt;&amp;lt;/button&amp;gt;' + resp.msg + '&amp;lt;/div&amp;gt;';
                    }
                    $mailchimpform.prepend($response);
                }
              </script>
              <!-- Mailchimp Subscription Form Ends Here -->
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- end main-content -->
  </div>
  <!-- Footer -->
  <footer id="footer"  data-bg-color="#212331">
    <div class="container pt-70 pb-40">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <img class="mt-5 mb-20" alt="" src="images/v3.jpg">
            <p>Gandhinagar, Gole Market<br>
			Jammu</p>
            <ul class="list-inline mt-5">
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-phone text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">8492840864</a> </li>
              
              <li class="m-0 pl-10 pr-10"> <i class="fa fa-globe text-theme-colored2 mr-5"></i> <a class="text-gray" href="#">hrithiks227@gmail.com</a> </li>
                          </ul>            
            <ul class="styled-icons icon-sm icon-bordered icon-circled clearfix mt-10">
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              
              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3" >
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2">Useful Links</h4>
            <ul class="angle-double-right list-border">
              <li><a href="jammu.php">Jammu</a></li>
              <li><a href="kishtwar.html">Kishtwar</a></li>
              <li><a href="kashmir.php">Kashmir</a></li>
              <li><a href="leh.php">Leh</a></li>
              <li><a href="ladakh.php">Ladakh</a></li> 
              <li><a href="contactus.html">Contact Us</a></li>
          
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="widget dark">
            <h4 class="widget-title line-bottom-theme-colored-2"> UT</h4>
            <div class="latest-posts">
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Jammu</a></h5>
>
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                <div class="post-right">
                  <h5 class="post-title mt-0 mb-5"><a href="#">Kashmir</a></h5>
                  
                </div>
              </article>
              <article class="post media-post clearfix pb-0 mb-10">
                <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                
              </article>
            </div>
          </div>
        </div>
              </div>
    </div>
    <div class="footer-bottom" data-bg-color="#2b2d3b">
      <div class="container pt-20 pb-20">
        <div class="row">
          <div class="col-md-6">
            <p class="font-12 text-black-777 m-0 sm-text-center">Copyright &copy;2025 Hrithik. All Rights Reserved</p>
          </div>
          <div class="col-md-6 text-right">
            <div class="widget no-border m-0">
              <ul class="list-inline sm-text-center mt-5 font-12">
                <li>
                  <a href="#">Site Developed by: Hrithik Sharma</a>
                </li>
                <li>|</li>
                
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/custom.js"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>

</body>

</html>