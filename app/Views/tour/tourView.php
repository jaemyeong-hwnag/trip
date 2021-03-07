
<?= $this->extend('_layout/index') ?>
<?= $this->section('content') ?>

<script>
	$(function(){ 
		$('.bt_up1').click(function(){ 
			var num = +$(".price1").val()+1;
			$(".price1").val(num);
		});

		$('.bt_down1').click(function(){ 
			var num = +$(".price1").val()-1;
			if(num>-1) $(".price1").val(num);
		});

		$('.bt_up2').click(function(){ 
			var num = +$(".price2").val()+1;
			$(".price2").val(num);
		});

		$('.bt_down2').click(function(){ 
			var num = +$(".price2").val()-1;
			if(num>-1) $(".price2").val(num);
		});

		$("#sdate") .datetimepicker({
			locale: "ko",
			format: "YYYY-MM-DD",
			defaultDate: moment()
		});

		$("#edate") .datetimepicker({
			locale: "ko",
			format: "YYYY-MM-DD",
			defaultDate: moment()
		});
	});
</script>
		<div class="container" bgcolor="black">
		<!----- 이름 ------->
		 <br><br><br>
		<h3 class="agile-title"><?= $tour_name ?></h3> 
		<div class="w3layouts_header">
			<p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
		</div>
      <!----- 이름끝 ------->
      <div id="heading-breadcrumbs">
        <div class="container">
          <div class="row d-flex align-items-center flex-wrap">
            <div class="col-md-7"><h1 class="h2"></h1> </div>
              
          </div>
        </div>
      </div>

      <div id="content">
        <div class="container">
          <div class="row bar">
            <!-- LEFT COLUMN _________________________________________________________-->
            <div class="col-md">
              <div id="productMain" class="row">
                <div class="col-sm-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">

                    <div class="col-10"> <img src="/images/tour_img/<?= $tour_picture ?>" alt="" class="img-fluid" width="700px" height="450px"></div>
                  </div>
                </div>
                <div class="col-sm-6" align="center">
                  <div class="box">
                    <form name="form1" action="/tour1/add/no/<?= $tour_no ?>" method="post">
                      <div class="sizes" align="center">
						<div class="alert alert-info" style="margin: 0 100px 38px 110px;" role="alert"></div>
						<div align="center"><h4><?=number_format($tour_price) ?> 원</h4></div>
						<br>
								<input type="hidden" name="sdate" value="<?=$start_date?>">
								<input type="hidden" name="price" value="<?=$tour_price?>">
								<input type="hidden" value="" name="writeday" id="writeday">
								<input type="hidden" value="" name="board_no" id="board_no">
								<input type="hidden" value=""name="name" id="name">
								<div>
									<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
									<?=$start_date?>~<?=$end_date?>
								</div>
							<div class="row">
							<div class="col-6">
								<div class="form-group">
									<label>성인</label>
									<div class="numbers-row">
                                        <input type="number" min="0" value="1" style="width:15%; display: inline;" id="count" class="qty2 form-control price1" name="price1">
									</div>
								</div>
							</div>
							<div class="col-6">
								<div class="form-group">
									<label>어린이</label>
									<div class="numbers-row">
										<input type="number" value="0"  min="0" id="countb" style="width:15%; display: inline;" class="qty2 form-control price2" name="price2">
									</div>
								</div>
							</div>

						</div>
                      </div>
					  <hr style="margin: 10px 100px;" >
                      
                      <p class="text-center">
						<button name="payment" data-toggle="tooltip" data-placement="top" title="Add to wishlist" class="btn  fa-kr-default" style="margin:0;"><i class="fa fa-plane"></i>  결제하기 </button>
                      </p>
                    </form>
                  </div>
				  <br>
                  <div class="alert alert-info" style="margin: 0px 100px 20px 110px;" role="alert"></div>
                </div>
              </div>
              <div id="details" class="box mb-4 mt-4 fa-kr-default">
                <hr>
				<br><br><br><br><br><br>
                <h4>Product details</h4>
				<br>
				<h4>Air</h4>
				<br>
                <ul>
                  <li><?=$airline_name?></li>
                </ul>
				<hr>
                <h4>Date</h4>
				<br>
                <ul>
                  <li>날짜 : <?=$start_date?> ~ <?=$end_date?></li>
                </ul>
				<hr>
                <p class="fa-kr-default" style="color:black;"><?= $tour_text ?></p>
				<hr>
                <blockquote class="blockquote">
                  <p class="mb-0"><em>Define style this season with Armani's new range of trendy tops, crafted with intricate details. Create a chic statement look by teaming this lace number with skinny jeans and pumps.</em></p>
                </blockquote>
              </div>
              <div id="product-social" class="box social text-center mb-5 mt-5">
                <h4 class="heading-light">Show it to your friends</h4><br>
                <ul class="social list-inline">
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse"><i class="fa fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse"><i class="fa fa-google-plus"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse"><i class="fa fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" data-animate-hover="pulse"><i class="fa fa-envelope"></i></a></li>
                </ul>
              </div>


              <br><br>
            </div>
           </div>
		  
		   </div>
		   </div>
		   </div>

    <?= $this->endSection() ?>