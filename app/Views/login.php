<?= $this->extend('_layout/index') ?>
<?var_dump("egsdgdsg");?>
<?= $this->section('content') ?>
<div>
    <h3 class="agile-title">Login</h3>
    <div class="w3layouts_header">
        <p><span><i class="fa fa-plane sub-w3l" aria-hidden="true"></i></span></p>
    </div>
    <div class="col-lg-10 col-md-10 col-sm-10" style="float: none; margin: 0 auto;" data-aos="flip-left">
        <div class="">
            <form name="form_login" method="post" action="./login/login">
                <div class="control-group form-group">
                    <div class="controls">
                        <label class="contact-p1">아이디</label><br/>
                        <input type="text" class="form-control" name="uid" id="uid" value="">
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label class="contact-p1">비밀번호</label>
                            <input type="password" class="form-control" name="pwd" id="pwd" value="">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div align="center">
                        <button type="button" class="btn btn2" onClick="javascript:form_login.submit();">로그인</button>
                        <a href="/signup" class="btn btn2">회원가입</a>
                    </div>
            </form>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<?= $this->endSection() ?>
