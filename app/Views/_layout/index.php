<?
    //helper('data');
    $session = session();
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="/php/trip/public/asset/lib/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="/php/trip/public/asset/lib/css/fontawesome.css">
        <link rel="stylesheet" href="/php/trip/public/asset/lib/css/style.css">

        <script src="/php/trip/public/asset/lib/js/jquery-3.5.1.min.js"></script>
        <script src="/php/trip/public/asset/lib/bootstrap/bootstrap.min.js"></script>
    </head>

    <body>
    <!-- header -->
    <div class="header-w3layouts">
        <!-- Navigation -->
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Tourism</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="logo-agile-1">
                <h1><a class="logo" href="/~team19/"><i class="fa fa-plane" aria-hidden="true"></i>Tourism</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <nav class="collapse navbar-collapse navbar-ex1-collapse">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <ul class="nav navbar-nav navbar-right fa-kr-default">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <?
                    $uri = current_url(true);
                    $activePage=urldecode($uri);
                    ?>
                    <li><a class="<?=  ($activePage=='package_tour_list') ? 'active':''; ?>" href="/~team19/tour1/package_tour_list">패키지 여행</a></li>
                    <li class="<?=  ($activePage=='foreign_tour_list') ? 'active':''; ?>"><a href="/~team19/tour1/foreign_tour_list">해외 여행</a></li>
                    <li><a class="<?=  ($activePage=='domestic_tour_list') ? 'active':''; ?>" href="/~team19/tour1/domestic_tour_list">국내 여행</a></li>
                    <li class="<?=  ($activePage=='developer') ? 'active':''; ?>"><a href="/~team19/team19/developer">개발자</a></li>
                    <?
                    if($session->no!=null||$session->no=="0"){
                        echo("
							<li class='dropdown menu__item menu__item--current m_nav_item'>
						<a href='/~team19/mypage' class='dropdown-toggle menu__link link link--kumya' data-toggle='dropdown'><span data-letters='Short Codes'>마이페이지<b class='caret'></b></span></a>
						<ul class='dropdown-menu agile_short_dropdown'>
						<li><a href='/~team19/yayak'>예약현황</a></li>
						<li><a href='/~team19/mypage'>나의 정보</a></li>
						</ul>
					</li>
					");
                    }
                    ?>
                    <!--<li class="dropdown menu__item menu__item--current m_nav_item">
                        <a href="#" class="dropdown-toggle menu__link link link--kumya" data-toggle="dropdown"><span data-letters="Short Codes">Short Codes<b class="caret"></b></span></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="/~team19/my/myy/icons.html">Web Icons</a></li>
                            <li><a href="/~team19/my/myy/typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li><a class="" href="contact.html">Contact Us</a></li>-->

                </ul>
                <ul class="nav navbar-nav navbar-left fa-kr-default">
                    <li>
                        <?
                        if($session->no==null) {
                            echo("<li><a class='login' href='./login'><i class='fa fa-lock'></i></a></li>");
                        }
                        else if($session->no!=null||$session->no=="0"){

                            echo("
							<li><a class='mypage' href='/~team19/mypage'><i class='glyphicon glyphicon-user'></i></a></li>");
                            echo("<li><a class='login' href='./login/logout'>Logout</i></a></li>");
                        }
                        ?>
                    </li>
                </ul>
                </ul>
                <!-- //navbar-collapse -->
        </nav>
    </div>
    <!-- //header -->
    </div>

    <!-- content -->
    <?= $this->renderSection('content') ?>
    <!-- //content -->

    <!-- footer -->
    <div class="agileinfo-footer">
        <div class="container">
            <div class="agileits-footer-top">
                <div class="col-sm-4 w3ls-address-grid">
                    <i class="glyphicon glyphicon-map-marker"></i>
                    <div class="w3-address1">
                        <p class="fa-kr-default">서울특별시 노원구 초안산로 12,인덕대학교</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-sm-4 w3ls-address-grid">
                    <i class="glyphicon glyphicon-phone"></i>
                    <div class="w3-address1">
                        <p>02-950-7000</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>

                <div class="col-sm-4 w3ls-address-grid">
                    <i class="glyphicon glyphicon-envelope"></i>
                    <div class="w3-address1">
                        <p><a href="mailto:info@example.com">induk@induk.com</a></p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>

            <!-- Counter -->
            <div class="services-bottom">
                <div class="counter-agile">
                    <div class="counter-subw3l">
                        <p><a href="/~team19/team19/developer"><i class="fa fa-plane" aria-hidden="true"></i>Developer</a></p>
                    </div>
                    <div class="ftr-menu">
                        <ul>
                            <!--
                               <li><a class="active" href="/~team19/">Home </a></li>
                               <li><a class="" href="services.html">Services</a></li>
                               <li><a class="" href="gallery.html">Gallery</a></li>
                               <li><a class="" href="icons.html">Web Icons</a></li>
                               <li><a class="" href="typography.html">Typography</a></li>

                               <li><a class="" href="contact.html">Contact Us</a></li>-->
                            <div class="row">
                                <i class="fa fa-users" style="color: #ffffff"></i><p style="color: #d46a40">MunJinGi, JoJaeWook, HwangJaeMyeoung, KimSuKyoung</p>
                            </div>
                        </ul>
                    </div>
                    <div class="counter-subw3l w3l-right-footer">

                        <div class="clearfix"> </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <!-- //Counter -->
        </div>
    </div>
    <!-- //footer -->

    </body>
</html>