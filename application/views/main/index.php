  <div id="content" class="main box container-fluid">
    <div class="row-fluid">
      <div id="leftcontent" class="span9">

        <h3>最新公告：</h3> 
        <form class="form-search" method="post" action="<?=site_url()?>main/search.html">
          <table>
            <tr>
              <td width="92%">
                <div class="input-append">
                  <input type="text" id="search" name="search" class="input-large search-query" placeholder="标题关键字">
                  <input type="submit" class="btn btn-info" value="搜索">
                </div>
              </td>
              <td>                
                <div>
                  <a class="btn btn-primary" href="<?=site_url()?>main/allnews.html">更多</a>
                </div>
              </td>
            </tr>
          </table>
        </form>
        <hr>

        <table class="table table-hover" style="border-left: 1px solid #dddddd;border-right: 1px solid #dddddd;border-bottom: 1px solid #dddddd;border-collapse: separate;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;">
        
        <?php $i = 1; ?>
        <?php foreach ($results->result() as $row): ?>

        <?php if ($i % 2 == 1): ?>
          <tr class="info">
        <?php endif; ?>
        <?php if ($i % 2 == 0): ?>
          <tr>
        <?php endif; ?>

            <td width="10%">&nbsp;&nbsp;<?=$this->notice_model->get_course($row->course)?></td>
            <td width="13%">[<?=$row->username?>]</td>
            <td width="63%">
              <a href="<?=site_url()?>main/news/<?=$row->nid?>.html"><?=$this->notice_model->get_title($row->title)?></a>
            </td>
            <td><?=$row->date?></td>
          </tr>
          
        <?php $i++; ?>
        <?php endforeach; ?><!-- the end of the foreach cycle -->

        </table><!-- the news table -->
        
      </div> <!-- left content -->

      <div id="rightcontent" class="span3">
        <div id="loginbox">
          <h4>课程介绍</h4>
          本网站包括三门课程：<br>
          <a href="<?=site_url()?>course/index/1">1.软件需求分析与设计</a><br>
          <a href="<?=site_url()?>course/index/2">2.项目管理与案例分析</a><br>
          <a href="<?=site_url()?>course/index/3">3.质量保证与测试</a><br><br>
        </div>
        <div id="loginbox" class="text-center">
          <h4 class="text-left">友情链接</h4>
          <a href="http://zupo.zju.edu.cn/" target="_blank"><img src="<?=base_url()?>resource/img/zupologo.jpg"/></a><br><br>
          <a href="http://www.cs.zju.edu.cn/" target="_blank"><img src="<?=base_url()?>resource/img/cslogo.jpg"/></a><br><br>
          <a href="http://ugrs.zju.edu.cn/" target="_blank"><img src="<?=base_url()?>resource/img/ugrslogo.jpg"/></a><br><br>
          <a href="http://www.cc98.org/" target="_blank"><img src="<?=base_url()?>resource/img/cc98logo.jpg"/></a><br><br>
        </div>
      </div> <!-- right content -->
    </div>
  </div> <!-- content -->
