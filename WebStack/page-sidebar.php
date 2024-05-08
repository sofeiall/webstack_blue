        <div class="sidebar-menu toggle-others fixed">
            <div class="sidebar-menu-inner">
                <header class="logo-env">
                    <!-- logo -->
                    <div class="logo">
                        <a href="<?php $this->options->siteUrl();?>" class="logo-expanded">
                            <img class="logo_size" src="<?php $this->options->Biglogo(); ?>" width="100%" alt="<?php $this->options->IndexName(); ?>" />
                        </a>
                    </div>
                    <div class="mobile-menu-toggle visible-xs">
                        <a href="#" data-toggle="mobile-menu">
                            <i class="fa-bars"></i>
                        </a>
                    </div>
                </header>
                <ul id="main-menu" class="main-menu">
                <li><span class="board-title zmki_wap_zsy1"><a href="<?php $this->options->siteUrl(); ?>" ><i class="fa fa-home  "></i><b>&nbsp;首页</b></a></span></li>
                    <?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
                     <?php while($categorys->next()): ?>
                         <?php if ($categorys->levels === 0): ?>
                             <?php $children = $categorys->getAllChildren($categorys->mid); ?>
                             <?php if (empty($children)) { ?>
                                 <li>
                                     <a href="<?php if ($this->is('index')): ?><?php else: ?>/<?php endif; ?>#<?php $categorys->name();?>" class="smooth">
                                        <i class="fa <?php $categorys->slug();?>"></i>
                                        <span class="title"><?php $categorys->name(); ?></span>
                                     </a>
                                 </li>
                             <?php } else { ?>
                                 <li>
                                     <a>
                                        <i class="fa <?php $categorys->slug();?>"></i>
                                        <span class="title"><?php $categorys->name(); ?></span>
                                     </a>
                                     <ul>
                      <?php foreach ($children as $mid) { ?>
                          <?php $child = $categorys->getCategory($mid); ?>
                          <li>
                              <a href="<?php if ($this->is('index')): ?><?php else: ?>/<?php endif; ?>#<?php echo $child['name'];?>" class="smooth"><?php echo $child['name']; ?></a>
                          </li>
                      <?php } ?>
                                      </ul>
                                 </li>
                             <?php } ?>
                         <?php endif; ?>
                     <?php endwhile; ?>
  <!-- 此处可以插入换行和广告   <li><br></li>  -->

  <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}"> <i class="{slug}"></i><span class="smooth">{title}</span> <span class="label label-Primary pull-right hidden-collapsed"></span></a></li>'); ?> 
                            <div class="zmki_wap" style="position: sticky; bottom: 10px; display: flex; justify-content: space-between; padding:0px;">
                                <a href="<?php $this->options->adminUrl(); ?>" target="_blank" title="登陆后台"><i class="fa fa-cog" aria-hidden="true" /></i></a>
                                <a href="<?php $this->options->siteUrl();?>sitemap.xml" target="_blank" title="网站地图"><i class="fa fa-sitemap" aria-hidden="true" /></i></a>
                                <a href="https://github.com/hygd0813/WebStack" target="_blank" rel="nofollow" title="Github"><i class="fa fa-github" aria-hidden="true" /></i></a>
                            <!--
                                <a href="mailto:?subject=<?php $this->title() ?>&body=Check out this article: <?php $this->permalink() ?>" title="QQ邮箱"><i class="fa fa-envelope" aria-hidden="true" /></i></a>
                                <a href="<?php $this->options->bdtongji();?>" target="_blank" rel="nofollow" title="网站统计"><i class="fa fa-bar-chart" aria-hidden="true" /></i></a>
                             -->
                            </div>                 
                </ul>
            </div>
        </div>
        
        <!--顶部美化开始-->  
   <div class="board">
          <div class="left">
       <ul class="user-info-menu left-links list-inline list-unstyled">	 
     <!--
       <li><span class="board-title zmki_wap_zsy1"><a href="<?php $this->options->siteUrl();?>" ><i class="fa fa-home  "></i> 首页</a></span></li>
	 <li><span class="board-title"><a href="<?php $this->options->zmki_links(); ?>"><i class="fa fa-plus-square  " ></i> 收录提交</a></span></li>
	 <li><span class="board-title "><a href="<?php $this->options->zmki_url(); ?>" target="_blank"><i class="fa fa-heart xiaotubiao" style="color: #fb5962;"></i>&nbsp;<?php $this->options->zmki_name(); ?></a></span></li>
    -->
     <?php if($this->options->zmki_tianqi == '1'): ?>  
	 <li class="zmki_tianqi zmki_wap"><div class="zmki_wap" id="he-plugin-simple"></div></li>
	 <?php endif; ?>
	 <?php if($this->options->zmki_ah == '1'): ?>  
	 <li><div class="zmki_yldh zmki_wap_zsy2"  title="切换模式"><a href="javascript:switchNightMode()"  target="_self"><svg  class="icon zmki_dh" aria-hidden="true"><use xlink:href="#icon-yueliang2"></use></svg></a></div></li> 
	 <?php endif; ?>
		  </ul>
       </div>
   </div>
   	
<?php if($this->options->zmki_tianqi == '1'): ?>  
<!--天气开始-->
<!--由于默认调用的免费版每分钟20次API调用限制，如有需求可前往知心天气官网购买服务配置-->
<script>
WIDGET = {
  "CONFIG": {
    "modules": "104",
    "background": "5",
    "tmpColor": "373E4A",
    "tmpSize": "14",
    "cityColor": "373E4A",
    "citySize": "14",
    "aqiColor": "373E4A",
    "aqiSize": "14",
    "weatherIconSize": "25",
    "alertIconSize": "20",
    "padding": "0px 0px 0px 0px",
    "shadow": "0",
    "language": "auto",
    "borderRadius": "7",
    "fixed": "false",
    "vertical": "center",
    "horizontal": "center",
    "key": "07516dfe756c4f0ca1710d083add02bd"
  }
}
</script>
<script src="https://widget.qweather.net/simple/static/js/he-simple-common.js?v=2.0"></script>
<!--天气结束--> 
<?php endif; ?>   	
 
	<!--顶部美化结束-->	   