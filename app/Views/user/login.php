<?= $this->extend('_layout/index') ?>
<?= $this->section('content') ?>
<div>
    <h3 class="agile-title">Login</h3>
    <div class="w3layouts_header">
        <p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10" style="float: none; margin: 0 auto;" data-aos="flip-left">
        <div class="">
            <form id="login_frm" name="login_frm">
                <div class="control-group form-group">
                    <div class="controls">
                        <label class="contact-p1">아이디</label><br/>
                        <input type="text" class="form-control" name="user_id" value="">
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">비밀번호</label>
                            <input type="password" class="form-control" name="user_password" id="user_password" value="">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div align="center">
                        <button type="button" class="btn btn2" onClick="javascript:loginProc();">로그인</button>
                        <a href="/user/registerView" class="btn btn2">회원가입</a>
                    </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>

<script>
	function loginProc() {
		$.ajax({
			url: "/user/loginProc",
			type: "POST",
			dataType: "json",
			async: true,
			data: $("#login_frm").serialize(),
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
					location.href="/";
				}
			}
		});
	}
</script>
<?= $this->endSection() ?>
