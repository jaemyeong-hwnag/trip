<?php
    foreach ($db_list as $no => $val) {
?>
<div class="col-md-6 w3lsalbums-grid">
    <div class="albums-left"> 
        <div> <img src="/images//tour_img/<?=$val->tour_picture?>" class="wthree-almub" height="250px"></img>
        </div>
    </div>
    <div class="albums-right">
        <h4 class="text_none_over"><?=$val->tour_name?></h4>
        <p class="text_none_over"><?=$val->tour_text?></p>
        <p><?=number_format($val->tour_price)?>원</p>
        <a class="w3more" href="/tour/tourView/<?=$val->tour_no;?>"><i class="fa fa-mail-forward" aria-hidden="true"></i> More</a>
    </div>
    <div class="clearfix"></div>
</div>
<?php
    }
?>

<!-- 페이징 -->
<div style="text-align:center; clear:both;">
	<ul class="pagination pagination-lg">
<?php for($i=1; $i<=$pageCount; $i++) {?>
		<li onClick="javascript:tourListGet('<?=$i?>');"><span><?=$i?></span></li>
<?php } ?>
	</ul>
</div>