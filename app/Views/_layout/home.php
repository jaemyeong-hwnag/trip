<?php
    $session = session();
?>
<!DOCTYPE html>
<html>
    <head>
<?php include_once APPPATH . "Views/_layout/head.php"; ?>
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
                <ul class="nav navbar-nav navbar-right fa-kr-default">
                    <li>
                        <?
                        if($session->no==null) {
                            echo("<li><a class='login' href='./user/loginview'><i class='fa fa-lock'></i>로그인</a></li>");
                        }
                        else {

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
    <!-- content -->
    <?= $this->renderSection('content') ?>
    <!-- //content -->
<?php include_once APPPATH . "Views/_layout/footer.php"; ?>