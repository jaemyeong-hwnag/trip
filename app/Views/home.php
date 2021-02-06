<?= $this->extend('_layout/home') ?>

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
    <!-- welcome -->
    <div class="about w3layouts-agileinfo">
        <div class="container">
            <div class="about-top w3ls-agile">
                <div class="col-md-6 red-w3l">
                    <img class="img-responsive" src="/assets/images/bg/well2.jpg" alt="">
                    <img class="img-responsive" src="/assets/images/bg/well.jpg" alt="">
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
                <div class="col-md-4 col-sm-4 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?=$total_count;?>' data-delay='.5' data-increment="1"><?=$total_count;?></div>
                    <h4 class="stats-info">총 패키지 수</h4>
                </div>
                <div class="col-md-4 col-sm-4 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?=$k_count;?>' data-delay='.5' data-increment="1"><?=$k_count;?></div>
                    <h4 class="stats-info">국내 여행</h4>
                </div>
                <div class="col-md-4 col-sm-4 stats-grid slideanim">
                    <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='<?=$h_count;?>' data-delay='.5' data-increment="10"><?=$h_count;?></div>
                    <h4 class="stats-info">해외 여행</h4>
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
<?php foreach ($tour_list as $row) { ?>
                <div class="col-md-6 w3lsalbums-grid">
                    <div class="albums-left">
                        <div> <img src="/images//tour_img/<?=$row['pic'] ?>" class="wthree-almub" height="250px" alt=""/>
                        </div>
                    </div>
                    <div class="albums-right font_white">
                        <span class="text_none_over" style="width: 210px;"><?= $row['name'] ?></span>
                        <p class="fa-kr-default text_none_over" style="width: 210px; height: 50px;"><?= $row['txt']; ?></p>
                        <p><?= number_format($row['price']) ?>원</p>
                        <a class="w3more" href="/tour/tourView/<?= $row['no'] ?>"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
<?php } ?>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //Popular -->
<?= $this->endSection() ?>