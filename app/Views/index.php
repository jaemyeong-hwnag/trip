<?= $this->extend('_layout/index') ?>

<?= $this->section('content') ?>
    <div class="main-agile">
        <!-- banner -->
        <div id="home" class="w3ls-banner">
            <!-- banner-text -->
            <div class="w3layouts-banner-top">
                <div class="container">
                    <div class="agileits-banner-info">
                        <div class="rw-wrapper">
                            <div class="rw-sentence">
                                <div class="rw-words rw-words-1">
                                    <span>Welcome To Our Tourism</span>
                                    <span>Welcome To Our Tourism</span>
                                    <span>Welcome To Our Tourism</span>
                                    <span>Welcome To Our Tourism</span>
                                    <span>Welcome To Our Tourism</span>
                                    <span>Welcome To Our Tourism</span>
                                </div>
                                <div class="rw-words rw-words-2">
                                    <span>Enjoy Your Vacation</span>
                                    <span>Enjoy The Freedom</span>
                                    <span>Enjoy Your Vacation</span>
                                    <span>Enjoy The Freedom</span>
                                    <span>Enjoy Your Vacation</span>
                                    <span>Enjoy The Freedom</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sap_tabs">
                        <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item grid1"><span><i class="glyphicon glyphicon-home" aria-hidden="true"></i>Hotels</span></li>
                                <li class="resp-tab-item grid2"><span><i class="glyphicon glyphicon-plane" aria-hidden="true"></i>Flights</span></li>
                            </ul>
                            <div class="resp-tabs-container">
                                <div class="tab-1 resp-tab-content">
                                    <div class="facts">
                                        <form action="#" method="post">
                                            <div class="reservation">
                                                <ul>
                                                    <li  class="span1_of_1 desti">
                                                        <div class="book_date">
                                                            <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                            <input type="text" placeholder="Departure City or Hotel" class="typeahead1 input-md form-control tt-input" required="">

                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reservation">
                                                <ul>
                                                    <li  class="span1_of_1">
                                                        <h5>Check In</h5>
                                                        <div class="book_date">
                                                            <div class="book_date">
                                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                                <input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li  class="span1_of_1 left">
                                                        <h5>Check Out</h5>
                                                        <div class="book_date">
                                                            <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                            <input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="reservation w3l-submit">
                                                <ul>
                                                    <li class="span1_of_3">
                                                        <div class="date_btn">
                                                            <input type="submit" value="Submit" />
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </form>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="tab-1 resp-tab-content">
                                    <div class="facts">
                                        <form action="#" method="post">
                                            <div class="flights">
                                                <div class="reservation">
                                                    <ul>
                                                        <li  class="span1_of_1 desti1">
                                                            <div class="book_date">

                                                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                                <input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="">

                                                            </div>
                                                        </li>
                                                        <li  class="span1_of_1 desti1">
                                                            <div class="book_date">

                                                                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
                                                                <input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="reservation">
                                                    <ul>
                                                        <li  class="span1_of_1">
                                                            <h5>Departure</h5>
                                                            <div class="book_date">

                                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                                <input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                                                            </div>
                                                        </li>
                                                        <li  class="span1_of_1 left">
                                                            <h5>Return</h5>
                                                            <div class="book_date">

                                                                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                                                                <input  id="datepicker" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="reservation w3l-submit">
                                                    <ul>
                                                        <li class="span1_of_3">
                                                            <div class="date_btn">

                                                                <input type="submit" value="Search Flights" />

                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //banner-text -->
    <!-- //banner -->
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
                <h1><a class="logo" href="index.html"><i class="fa fa-plane" aria-hidden="true"></i>Tourism</a></h1>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a class="" href="services.html">Services</a></li>
                    <li><a class="" href="gallery.html">Gallery</a></li>
                    <li class="dropdown menu__item menu__item--current m_nav_item">
                        <a href="#" class="dropdown-toggle menu__link link link--kumya" data-toggle="dropdown"><span data-letters="Short Codes">Short Codes<b class="caret"></b></span></a>
                        <ul class="dropdown-menu agile_short_dropdown">
                            <li><a href="icons.html">Web Icons</a></li>
                            <li><a href="typography.html">Typography</a></li>
                        </ul>
                    </li>
                    <li><a class="" href="contact.html">Contact Us</a></li>
                </ul>
                <div class="w3ls-social-icons-2">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </div>
            </div>
            <!-- //navbar-collapse -->
        </nav>
        <div class="clearfix"> </div>
    </div>
    <!-- //header -->
    <!-- welcome -->
    <div class="about w3layouts-agileinfo">
        <div class="container">
            <div class="about-top w3ls-agile">
                <div class="col-md-6 red-w3l">
                    <img class="img-responsive" src="./asset/images/well2.jpg" alt="">
                    <img class="img-responsive" src="./asset/images/well.jpg" alt="">
                    <div class="position-w3l"></div>
                </div>
                <div class="col-md-6 come">
                    <div class="about-wel">
                        <h5>Welcome To Our Tourism</h5>
                        <p>Masagni dolores eoquie int Basmodi temporant, nicmquam eius, Basmodi temurer sehsMunim.</p>
                        <p>Basmodi temporant, ut laboreas dolore magnam kuytase uaeraquis autem vel eum iure reprehend.Unicmquam eius, Basmodi temurer sehsMunim.</p>
                    </div>
                    <div class="steps-wel">
                        <h5>Follow Us For Easy Steps</h5>
                        <div class="col-md-3 col-sm-3 col-xs-3 w3ls_banner_bottom_grids first-posi-w3l">
                            <div class="w3l_banner_bottom_grid1">
                                <i class="fa fa-phone hvr-pulse-shrink" aria-hidden="true"></i>
                            </div>
                            <div class="w3l_banner_bottom_grid1">
                                <i class="fa fa-users hvr-pulse-shrink" aria-hidden="true"></i>
                            </div>
                            <div class="w3l_banner_bottom_grid1">
                                <i class="fa fa-map-marker hvr-pulse-shrink" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2 col-xs-2 w3ls_banner_bottom_grids">
                            <h6>01</h6>
                            <h6>02</h6>
                            <h6>03</h6>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-7 w3ls_banner_bottom_grids">
                            <p>Masagni dolores eoquie int Basmodi Basmodi temurer.</p>
                            <p>Masagni dolores eoquie int Basmodi Basmodi temurer.</p>
                            <p>Masagni dolores eoquie int Basmodi Basmodi temurer.</p>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!-- //welcome -->
    <!-- stats -->
    <div class="stats">
        <div class="container">
            <div class="stats-info">
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='1200' data-delay='.5' data-increment="1">1200</div>
                    <h4 class="stats-info">CUSTOMERS</h4>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='3000' data-delay='.5' data-increment="1">3000</div>
                    <h4 class="stats-info">DESTINATIONS</h4>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='9000' data-delay='.5' data-increment="10">9000</div>
                    <h4 class="stats-info">TOURS</h4>
                </div>
                <div class="col-md-3 col-sm-3 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='169' data-delay='.5' data-increment="1">169</div>
                    <h4 class="stats-info">TOUR TYPES</h4>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- //stats -->
    <!-- Popular -->
    <div class="albums">
        <div class="container">
            <h3 class="agile-title">TOUR</h3>
            <div class="w3layouts_header">
                <p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
            </div>
            <?
            foreach ($list as $row)
            {
                $no=$row->no;
                ?>
                <div class="col-md-6 w3lsalbums-grid">
                    <div class="albums-left">
                        <div> <img src="/~team19/tour_img/<?=$row->pic ?>" class="wthree-almub" height="250px"></img>
                        </div>
                    </div>
                    <div class="albums-right">
                        <h4 style="overflow: hidden; text-overflow: ellipsis;white-space: nowrap; width: 210px; height: 24px;"><?=$row->name ?></h4>
                        <p class="fa-kr-default" style="overflow: hidden; text-overflow: ellipsis;white-space: nowrap; width: 210px; height: 50px;"><?=stripslashes(nl2br($row->txt)); ?></p>
                        <br>
                        <p><?=number_format($row->price) ?>원</p>
                        <a class="w3more" href="/~team19/tour1/view/no/<?=$no;?>"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?
            }
            ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //Popular -->
<?= $this->endSection() ?>