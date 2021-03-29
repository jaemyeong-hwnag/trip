<?= $this->extend('layout/index') ?>
<?= $this->section('content') ?>
<div>
	<div class="col-3"></div>
	<div class="alert alert-success" role="alert">여행상품</div>
	<form id="frm" name="frm" class="form-horizontal"  onSubmit="return false;">
		<input type="hidden" id="page" name="page" value="">
		<div class="input-group-prepend">
			<span class="input-group-text">상품명</span>
		</div>
		<input type="text" name="search_word" value="" class="form-control">
		<button class="btn btn-primary" onClick="javascript:tourListGet(1);">검색</button>
	<form>
	<div name="tour_list" id="tour_list">

	</div>
</div>

<script>
	function tourListGet(page) {
		document.getElementById("page").value = page;
		$.ajax({
			url: "/tour/tourListGet",
			type: "POST",
			dataType: "html",
			async: true,
			data: $("#frm").serialize(),
			success: function(html_result) {
				document.getElementById("tour_list").innerHTML = html_result;
			}
		});
	}

    tourListGet(1);
</script>
<?= $this->endSection() ?>