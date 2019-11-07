<?php if (!defined('THINK_PATH')) exit();?><div class="g-grid">
  <div class="g-col-4-1">
    <div class="m-panel s-panel-info">
      <div class="panel-header">
        <div class="f-cb">
          <div class="f-fl"><i class="u-icon-th-list u-font-5x"></i></div>
          <div class="f-fr f-tar">
            <h3><?php echo D('DuxCms/Content')->countList(['A.class_id'=>1]); ?></h3>
            <p>协会新闻总数</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-col-4-1">
    <div class="m-panel s-panel-danger">
      <div class="panel-header">
        <div class="f-cb">
          <div class="f-fl"> <i class="u-icon-file-text u-font-5x"></i> </div>
          <div class="f-fr f-tar">
            <h3><?php echo D('DuxCms/Content')->countList(['A.class_id'=>2]); ?></h3>
            <p>国际资讯总数</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-col-4-1">
    <div class="m-panel s-panel-success">
      <div class="panel-header">
        <div class="f-cb">
          <div class="f-fl"> <i class="u-icon-tags u-font-5x"></i> </div>
          <div class="f-fr f-tar">
            <h3><?php echo D('DuxCms/Content')->countList(['A.class_id'=>3]); ?></h3>
            <p>国内要闻总数</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="g-col-4-1 g-col-last">
    <div class="m-panel s-panel-warning">
      <div class="panel-header">
        <div class="f-cb">
          <div class="f-fl"> <i class="u-icon-comments u-font-5x"></i> </div>
          <div class="f-fr f-tar">
            <h3><?php echo D('Admin/Council')->countList(); ?></h3>
            <p>协会会员总数</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="g-grid">
</div>