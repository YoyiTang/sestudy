  <div id="content" class="main box container-fluid">
    <div class="row-fluid">
      <div id="sidecontent" class="span3">
        <div id="sidebar">
          <ul class="nav nav-list">
            <li class="nav-header">导航</li>
            <li><a href="<?=site_url()?>intro.html">课程介绍</a></li>
            <li><a href="<?=site_url()?>outline.html">课程大纲</a></li>
            <li class="active"><a href="<?=site_url()?>tinfo.html">教师介绍</a></li>
            <li><a href="<?=site_url()?>resource.html">课程资料</a></li>
          </ul>
        </div> <!-- sidebar -->
      </div> <!-- sidecontent -->

      <div id="maincontent" class="span9">
        <?php $data = $this->tinfo_model->get_data();?>
        <?=$data->info?>
      </div> <!-- main content -->
    </div> <!-- row-fluid -->
  </div> <!-- content -->

