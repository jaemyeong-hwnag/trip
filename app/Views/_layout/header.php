<?php
    $session = session();
?>
<!DOCTYPE html>
<html>
    <head>
        <?php include_once APPPATH . "Views/_layout/head.php"; ?>
    </head>
    <body> 
        <div class="main-agile banner-2">
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
                        <h1><a class="logo" href="/main"><i class="fa fa-plane" aria-hidden="true"></i>Tourism</a></h1>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right">
                            <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                            <?	
                            $activePage=urldecode($this->uri->segment(2));
                            ?>
                            <li class="<?=  ($activePage=='package_tour_list') ? 'active':''; ?>""><a href="/tour1/package_tour_list">패키지 여행</a></li>
                            <li class="<?=  ($activePage=='foreign_tour_list') ? 'active':''; ?>"><a href="/tour1/foreign_tour_list">해외 여행</a></li>
                            <li class="<?=  ($activePage=='domestic_tour_list') ? 'active':''; ?>"><a href="/tour1/domestic_tour_list">국내 여행</a></li>
                            <li class="<?=  ($activePage=='developer') ? 'active':''; ?>"><a href="/team19/developer">개발자</a></li>
                            
                            <?
                            if($this->session->userdata('rank')=="1"){
                                echo("<li><a href='/admin/main'>admin</a></li>");
                            }
                            ?>
                            <?
                            if($this->session->userdata('no')==null) {
                                echo("  ");
                            }
                            else if($this->session->userdata('no')!=null||$this->session->userdata('no')=="0"){
                                echo("
                                    <li class='dropdown menu__item menu__item--current m_nav_item'>
                                <a href='/mypage' class='dropdown-toggle menu__link link link--kumya' data-toggle='dropdown'><span data-letters='Short Codes'>마이페이지<b class='caret'></b></span></a>
                                <ul class='dropdown-menu agile_short_dropdown'>
                                <li><a href='/yayak'>예약현황</a></li>
                                <li><a href='/mypage'>나의 정보</a></li>
                                </ul>
                            </li>
                            ");
                            }
                            ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-left fa-kr-default">
                        <li>
                            <?
                            if($this->session->userdata('no')==null) {
                                echo("<li><a class='login' href='/login'><i class='fa fa-lock'></i></a></li>");
                            }
                            else if($this->session->userdata('no')!=null||$this->session->userdata('no')=="0"){
                    
                                echo("
                                    <li><a class='mypage' href='/mypage'><i class='glyphicon glyphicon-user'></i></a></li>");
                                echo("<li><a class='login' href='/login/logout'>Logout</i></a></li>");
                            }
                            ?>
                        </li>
                    </ul>
                    <!-- //navbar-collapse -->
                </nav>  
            </div>
            </div>
            <!-- //header -->
        </div>