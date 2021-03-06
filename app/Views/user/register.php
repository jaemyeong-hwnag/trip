<?= $this->extend('_layout/index') ?>
<?= $this->section('content') ?>
<h3 class="agile-title">회원가입</h3>
<div class="w3layouts_header">
	<p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
</div>
<div class="col-lg-10 col-md-10 col-sm-10" style="float: none; margin: 0 auto;" data-aos="flip-left">
	<div class="">
		<form name="register_frm" id="register_frm" onSubmit="return false;">
			<div class="control-group form-group">
				<div class="controls">
					<label class="contact-p1">이름</label> 
					<input type="text" class="form-control input-sm" name="user_name">
					<p class="help-block"></p>
				</div>
			</div>	
			<div class="control-group form-group">
				<div class="controls">
					<label class="contact-p1">아이디</label><br/>
					<input type="text" class="form-control input-sm" name="user_id">
					<button class="btn btn-primary" onClick="javascript:userIdCheck();">중복체크</button>
					<p class="help-block"></p>
				</div>
			<div class="control-group form-group">
				<div class="controls">
					<label class="contact-p1">비밀번호</label>
					<input type="password" class="form-control input-sm" name="user_password">
					<p class="help-block"></p>
				</div>
			</div>
			<div style="text-align:center">
				<button class="btn btn-primary" onClick="javascript:registerProc();">완료</button>
			</div>
		</form>            
	</div>
</div>
<div class="clearfix"></div>
</div>
<script>
	var user_id_check = false; // 중복체크 확인

	function registerProc() {
		if(user_id_check == false) {
			Swal.fire({
				icon: "error",
				title: "아이디 중복체크를 해주세요",
				confirmButtonText: "확인"
			});
		} else {
			$.ajax({
				url: "/user/registerProc",
				type: "POST",
				dataType: "json",
				async: false,
				data: $("#register_frm").serialize(),
				success: function(proc_result) {
					var result = proc_result.result;
					var message = proc_result.message;
					
					if(result == false) {
						Swal.fire({
							icon: "error",
							title: message,
							confirmButtonText: "확인"
						});
					} else {
						Swal.fire({
							title: message,
							confirmButtonText: "확인"
						}).then((result) => {
							location.href="/user/loginview";
						});;
					}
				}
			});
		}
	}

	function userIdCheck() {
		$.ajax({
			url: "/user/userIdCheck",
			type: "POST",
			dataType: "json",
			async: false,
			data: $("#register_frm").serialize(),
			success: function(proc_result) {
				var result = proc_result.result;
				var message = proc_result.message;
                
				if(result == false) {
					Swal.fire({
						icon: "error",
						title: message,
						confirmButtonText: "확인"
					});
				} else {
					Swal.fire({
						title: message,
						confirmButtonText: "확인"
					});
					user_id_check = true;
				}
			}
		});
	}
</script>
<?= $this->endSection() ?>