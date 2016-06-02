<div class="col-md-6 sep-top-xs text-center">
    <?php if($this->session->flashdata(EXEC_MSG) == STATUS_SUCCESS){?>
        <div id="success-alert" class="alert alert-success text-center">
            <p><i class="fa fa-check-circle fa-2x"></i></p>
            <p>ทำรายการเรียบร้อยแล้ว</p>
        </div>
    <?php }else if($this->session->flashdata(EXEC_MSG) == STATUS_ERROR) { ?>
        <div id="error-alert" class="alert alert-danger text-center">
            <p><i class="fa fa-times-circle fa-2x"></i></p>
            <p><?=$this->session->flashdata(ERROR_MSG);?></p>
        </div>
    <?php } ?>
</div>
<div class="sep-top-md sep-bottom-5x">&nbsp;</div>