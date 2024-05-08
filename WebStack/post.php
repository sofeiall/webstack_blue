<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('page_header.php'); ?>  
<?php $this->need('page-sidebar.php'); ?> 
 <div class="main-content" >
    <div id="mask"></div>
    <div class="breadnav">
        <div class="container bread">
            <i class="fa fa-home"></i><a title="首页" href="/">首页</a>
            <i class="fa fa-angle-right"></i><?php $this->category('& '); ?><i class="fa fa-angle-right"></i><?php $this->title() ?>
        </div>
    </div>
    <div class="container"> 
        <div class="part">
            <div class="bar clearfix">
                <h1 class="tt">
                    <?php $this->title() ?> </h1>
                <div class="r-intro fr">
                    <span class="data fr">
                        <small class="info"><i class="fa fa-clock-o"></i><?php $this->date(); ?></small>
                        <small class="info"><i class="fa fa-eye"></i><?php get_post_view($this) ?></small>
                        <small class="info"><i class="fa fa-user-o"></i><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></small>

                    </span>
                </div>
            </div>
            <div class="items">
                <div class="row post-single">
                    <div class="col-xs-12 col-sm-12 col-md-8">
                        <div class="pic fl">
                            <div class="blur blur-layer" style="background: transparent url(<?php if($this->fields->logo == null):{echo $this->options->link_icon.$this->fields->url.$this->options->link_icon_end;}else:{echo $this->fields->logo;}endif;?>) no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;animation: rotate 20s linear infinite;">
                            </div>
                            
                            <img class="img-cover" src="<?php if($this->fields->logo == null):{echo $this->options->link_icon.$this->fields->url.$this->options->link_icon_end;}else:{echo $this->fields->logo;}endif;?>"  
             class="img-circle" width="32" alt="<?php $this->title(); ?>" alt="<?php $this->title() ?>" title="<?php $this->title() ?>">
                        </div>
                        <div class="list">
                            <p>站点名称：<?php $this->title() ?></p>
                            <p class="cate">所属分类：<?php $this->category(','); ?></p>
                            <p class="tag">相关标签：
                            <span class="padding">
                            <!--<a class="transition tags" href="https://www.zmki.cn/navs/tags-1342.html" title="优惠券"># 优惠券</a>-->
                            <?php $this->tags(', ', true, '暂无'); ?>
                            </span> 
                            </p>
                            <!--php判断-->
                            <?php 
                            $removeChar = ["https://", "http://", "/"];
                            $seourl = $this->fields->url;
                            $http_referer = str_replace($removeChar, "", $seourl);   
                            ?>
                            <p class="site">官方网址：<?php echo $http_referer; ?></p>
                            <p class="seo">SEO查询：
                                <a rel="nofollow" href="https://www.aizhan.com/cha/<?php echo $http_referer; ?>" target="_blank"><i class="fa fa-bar-chart"></i>爱站网</a>
                                <!-- 站长网pc和wap的url不一样，需做判断 --> 
                               
                                <!--Wap-->
                                <a class="pcnone" rel="nofollow" href="https://mseo.chinaz.com/<?php echo $http_referer; ?>" target="_blank"><i class="fa fa-bar-chart"></i>站长工具</a> 
                                 <!--Pc-->
                                <a class="wapnone" rel="nofollow" href="http://seo.chinaz.com/<?php echo $http_referer; ?>" target="_blank"><i class="fa fa-bar-chart"></i>站长工具</a>  
                            </p> 
                            <a class="btn transition" style="background-color:#ffcc33; color:ffcc33;" target="_blank" href="<?php $this->fields->url(); ?>" rel="nofollow">进入网站
                                <i class="fa fa-chevron-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4">
                    </div>
                </div>
            </div>
        </div>

        <?php if($this->options->zmki_postsads1): ?>
        <div class="part">
          <!--  <p class="tt"><span>广而告之</span></p> -->
            <div class="items">          
                    <!-- 广告位AD1  --><?php $this->options->zmki_postsads1(); ?>      
            </div>
        </div> 
       <?php endif; ?>
        <div class="part">
            <p class="tt"><span>站点介绍</span></p>
            <div class="items">
                <div class="art-main">
                    <p>简介：<?php echo $this->fields->text;?></p>
                </div>
                
                <div class="art-main-content">
                    <p> <?php $this->content(); ?></p> 
                </div>
                
            </div>
        </div>

   
       <?php if($this->options->zmki_postsads2): ?>
        <div class="part">
        <!--  <p class="tt"><span>广而告之</span></p> -->
            <div class="items">          
                    <!-- 广告位AD2  --><?php $this->options->zmki_postsads2(); ?>      
            </div>
        </div> 
       <?php endif; ?> 

        <div class="part related">
            <p class="tt"><span>热门站点</span></p>
            <div class="items">
                <div class="row">  
         
         
    <?php $this->widget('Widget_Post_hot@hot', 'pageSize=12')->to($hot); ?>
    <?php while($hot->next()): ?>  
    
    <div class="col-sm-3">
	<?php if($this->options->isLink == '1'): ?>
	<!--开启内页-->
    <a href="<?php $hot->permalink() ?>" title="<?php $hot->title(); ?>" >
	<div class="xe-widget xe-conversations box2 label-info"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php $hot->permalink() ?>"> 
    <div class="xe-comment-entry">
          <span class="xe-user-img">
            <img src="<?php if($hot->fields->logo == null):{echo $hot->options->link_icon.$hot->fields->url.$hot->options->link_icon_end;}else:{echo $hot->fields->logo;}endif;?>"  
             class="img-circle" width="32" alt="<?php $hot->title(); ?>">
          </span>
	<div class="xe-comment">
          <span class="xe-user-name overflowClip_1">
              <strong><?php $hot->title(); ?></strong>
          </span>
            <p class="overflowClip_2"><?php echo $hot->fields->text;?></p> 
     </div>
     </div>
     </div>
     </a>
     <?php endif; ?>
     <?php if($this->options->isLink == '0'): ?>
     <!--关闭内页-->
      <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('<?php echo $hot->fields->url;?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $hot->fields->url;?>">
    <div class="xe-comment-entry">
          <a class="xe-user-img">
            <img src="<?php if($hot->fields->logo == null):{echo $hot->options->link_icon.$hot->fields->url.$hot->options->link_icon_end;}else:{echo $hot->fields->logo;}endif;?>"  
             class="img-circle" width="32">
          </a>
	<div class="xe-comment">
          <a class="xe-user-name overflowClip_1">
              <strong><?php $hot->title(); ?></strong>
          </a>
            <p class="overflowClip_2"><?php echo $hot->fields->text;?></p> 
     </div>
     </div> 
     </div>
     <?php endif; ?>
     </div> 
    <?php endwhile; ?>
     

                </div> 
            </div>
        </div>

  <?php $this->need('comments.php'); ?>

  <?php if($this->options->zmki_postsads3): ?>
        <div class="part">
        <!--  <p class="tt"><span>广而告之</span></p> -->
            <div class="items">          
                <!-- 广告位AD3  --><?php $this->options->zmki_postsads3(); ?>      
            </div>
        </div> 
       <?php endif; ?>  


    </div> 
         
            <br>
            <!-- Main Footer -->
 <?php $this->need('footer.php'); ?>