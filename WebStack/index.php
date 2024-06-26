<?php
/**
 * 基于开源项目<a href="https://github.com/WebStackPage/WebStackPage.github.io" rel="nofollow" target="_blank">WebStack</a>的一个主题，请尊重劳动成果<ul><li>由作者在钻芒博客二次基础上优化而来</li> <li>内容包括新增顶栏和优化底栏及悬浮窗等N项。</li> <li>适配暗黑模式，支持cooke保存。</li><li>设置参数已整合至后台，无需手动修改HTML。</li><li>自动获取icon APi/内页/全站SEO/站内搜索/列表折叠等功能。</li><ul>
 * 
 * @package WebStack
 * @author 运营狗,老泛
 * @version 钻芒二开优化_Blue
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
<?php $this->need('sidebar.php'); ?>   
	<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
	<?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
	<?php while ($categories->next()): ?>
	<?php if(count($categories->children) === 0): ?>
	<?php $this->widget('Widget_Archive@category-' . $categories->mid, 'order=order&pageSize=10000&type=category', 'mid=' . $categories->mid)->to($posts); ?> 
	<h4 class="tt text-gray not-select "><i class="fa <?php $categories->slug(); ?>" style="margin-right: 7px;" id="<?php $categories->name(); ?>"></i><?php $categories->name(); ?></h4>
	<div class="row" style="<?php $fold=$categories->description; if ($fold>"0"&$this->options->zmki_fold == '1'&&'2'||$this->options->zmki_fold == '2') { echo "display:none;";} ?>">
    <?php while ($posts->next()): ?> 
    <div class="col-sm-3">
	<?php if($this->options->isLink == '1'): ?>
	<!--开启内页--> 
    <a href="<?php $posts->permalink() ?>" title="<?php $posts->title(); ?>" >
	<div class="xe-widget xe-conversations box2 label-info"  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php $posts->permalink() ?>"> 
    <div class="xe-comment-entry">
          <span class="xe-user-img">
            <img src="<?php if($posts->fields->logo == null):{echo $this->options->link_icon.$posts->fields->url.$this->options->link_icon_end;}else:{echo $posts->fields->logo;}endif;?>"  
             class="img-circle" width="32" alt="<?php $posts->title(); ?>">
          </span>
	<div class="xe-comment">
          <span class="xe-user-name overflowClip_1">
              <strong><?php $posts->title(); ?></strong>
          </span>
            <p class="overflowClip_2"><?php echo $posts->fields->text;?></p> 
     </div>
     </div>
     </div>
     </a>
     <?php endif; ?>
     <?php if($this->options->isLink == '0'): ?>
     <!--关闭内页-->
      <div class="xe-widget xe-conversations box2 label-info" onclick="window.open('<?php echo $posts->fields->url;?>', '_blank')" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="<?php echo $posts->fields->url;?>">
    <div class="xe-comment-entry">
          <a class="xe-user-img">
            <img src="<?php if($posts->fields->logo == null):{echo $this->options->link_icon.$posts->fields->url.$this->options->link_icon_end;}else:{echo $posts->fields->logo;}endif;?>"  
             class="img-circle" width="32">
          </a>
	<div class="xe-comment">
          <a class="xe-user-name overflowClip_1">
              <strong><?php $posts->title(); ?></strong>
          </a>
            <p class="overflowClip_2"><?php echo $posts->fields->text;?></p> 
     </div>
     </div>
     </div>
      <?php endif; ?>
	</div> 
  <?php endwhile; ?>
</div>    

<br />  
<?php else: ?>
<?php endif; ?>
<?php endwhile; ?>
<?php $this->need('footer.php'); ?>  
<style>
	.fk_service_qrimg_site {
    width: 119px;
    height: 119px;
    float: left;
    margin: 12px 12px 5px 12px; 
    background-image: url(<?php $this->options->fk_zmki_gzhimg(); ?>);
    background-size: 100% 100%;
	} 
	span.title,.main-menu{
	font-size: <?php $this->options->menu_title(); ?>px;
	}
	.zmki_tianqi{
    width: 120px;
    height: 16px;
	}
	/*#he-plugin-simple div{*/
	/*width:auto!important;*/
	/*}*/
	
/*单栏*/
 <?php if($this->options->zmki_pcsl == '0'): ?>  
.col-sm-3 {width: 100%;}
 <?php endif; ?> 
/*双栏*/
 <?php if($this->options->zmki_pcsl == '1'): ?>  
.col-sm-3 {width: 49.5%;}
 <?php endif; ?>  
/*三栏*/
 <?php if($this->options->zmki_pcsl == '2'): ?>  
.col-sm-3 {width: 33%;}
 <?php endif; ?> 
/*四栏*/
 <?php if($this->options->zmki_pcsl == '3'): ?>  
.col-sm-3 {width: 24.6%;}
 <?php endif; ?> 
/*五栏*/
 <?php if($this->options->zmki_pcsl == '4'): ?>  
.col-sm-3 {width: 19.6%;}
 <?php endif; ?> 
/*六栏*/
 <?php if($this->options->zmki_pcsl == '5'): ?>  
.col-sm-3 {width: 16.6%;}
 <?php endif; ?> 
/*七栏*/
 <?php if($this->options->zmki_pcsl == '6'): ?>  
.col-sm-3 {width: 14.2%;}
 <?php endif; ?> 
/*八栏*/
 <?php if($this->options->zmki_pcsl == '7'): ?>  
.col-sm-3 {width: 12.5%;}
 <?php endif; ?> 

/*手机端双栏显示 常规尺寸*/
@media (max-width:768px) {  

<?php if($this->options->zmki_wapsl == '0'): ?>  	
.col-sm-3 { 
    width: 100%; 
}
<?php endif; ?> 

<?php if($this->options->zmki_wapsl == '1'): ?>  	
.col-sm-3 { 
    width: 50%;
    float: left;
} 
    .xe-widget.xe-conversations {
    position: relative;
    background: #fff;
    margin-bottom: 0px;
}
<?php endif; ?> 
<?php if($this->options->zmki_wapsl == '2'): ?>  	
 .col-sm-3{ 
    width: 33%;
    float: left;
    position: relative;
    min-height: 1px;
     padding-left: 1px!important; 
     padding-right: 1px!important;} 
<?php endif; ?>  
}
</style>

<script>
    /*将搜索输入框置顶*/
    (function($) {
        $.fn.fixDiv = function(options) {
            var defaultVal = {
                top : 10
            };
            var obj = $.extend(defaultVal, options);
            $this = this;
            var _top = $this.offset().top;
            var _left = $this.offset().left;
            $(window).scroll(function() {
                var _currentTop = $this.offset().top;
                var _scrollTop = $(document).scrollTop();
                if (_scrollTop > _top) {
                    $this.offset({
                        top : _scrollTop + obj.top,
                        left : _left
                    });
                } else {
                    $this.offset({
                        top : _top,
                        left : _left
                    });
                }
            });
            return $this;
        }
    })(jQuery);
    
    $(function() {
        $("#search_box").fixDiv({
            top : 0
        });

        $("#search_btn").click(highlight);
        $('#searchstr').keydown(function(e) {
            var key = e.which;
            if (key == 13) highlight();
        });

        var i = 0;
        var sCurText;
        function highlight() {
            clearSelection(); //清空上一次高亮显示的内容
            var flag = 0;
            var bStart = true;
            $('#tip').text('');
            $('#tip').hide();
            var searchText = $('#searchstr').val();
            var _searchTop = $('#searchstr').offset().top + 30;
            var _searchLeft = $('#searchstr').offset().left;
            if ($.trim(searchText) == "") {
                showTips("请输入关键字", _searchTop, 3, _searchLeft);
                return;
            }
            //查找匹配
            var searchText = $('#searchstr').val();
            var regExp = new RegExp(searchText, 'g');
            var content = $("#content").text();
            if (!regExp.test(content)) {
                showTips("没有找到", _searchTop, 3, _searchLeft);
                return;
            } else {
                if (sCurText != searchText) {
                    i = 0;
                    sCurText = searchText;
                }
            }
            //高亮显示
            $('p').each(function() {
                var html = $(this).html();
                var newHtml = html.replace(regExp, '<span class="highlight">' + searchText + '</span>');
                $(this).html(newHtml);
                flag = 1;
            });
            //定位并提示信息
            if (flag == 1) {
                if ($(".highlight").size() > 1) {
                    var _top = $(".highlight").eq(i).offset().top +
                    $(".highlight").eq(i).height();
                    var _tip = $(".highlight").eq(i).parent().find("strong").text();
                    if (_tip == "") {
                        _tip = $(".highlight").eq(i).parent().parent().find("strong").text();
                    }
                    var _left = $(".highlight").eq(i).offset().left;
                    var _tipWidth = $("#tip").width();
                    if (_left > $(document).width() - _tipWidth) {
                        _left = _left - _tipWidth;
                    }
                    $("#tip").html(_tip).show();
                    $("#tip").offset({
                        top : _top,
                        left : _left
                    });
                    $("#search_btn").val("查找下一个");
                } else {
                    var _top = $(".highlight").offset().top + $(".highlight").height();
                    var _tip = $(".highlight").parent().find("strong").text();
                    var _left = $(".highlight").offset().left;
                    $('#tip').show();
                    $("#tip").html(_tip).offset({
                        top : _top,
                        left : _left
                    });
                }
                $("html, body").animate({
                    scrollTop : _top - 50
                });
                i++;
                if (i > $(".highlight").size() - 1) {
                    i = 0;
                }
            }
        }
        function clearSelection() {
            $('p').each(function() {
                //找到所有highlight属性的元素；
                $(this).find('.highlight').each(function() {
                    $(this).replaceWith($(this).html()); //将他们的属性去掉；
                });
            });
        }


        var tipsDiv = '<div class="tipsClass"></div>';
        $('body').append(tipsDiv);
        function showTips(tips, height, time, left) {
            var windowWidth = document.documentElement.clientWidth;
            $('.tipsClass').text(tips);
            $('div.tipsClass').css({
                'top' : height + 'px',
                'left' : left + 'px',
                'position' : 'absolute',
                'padding' : '8px 6px',
                'background' : '#000000',
                'font-size' : 14 + 'px',
                'font-weight' : 900,
                'margin' : '0 auto',
                'text-align' : 'center',
                'width' : 'auto',
                'color' : '#fff',
                'border-radius' : '2px',
                'opacity' : '0.8',
                'box-shadow' : '0px 0px 10px #000',
                '-moz-box-shadow' : '0px 0px 10px #000',
                '-webkit-box-shadow' : '0px 0px 10px #000'
            }).show();
            setTimeout(function() {
                $('div.tipsClass').fadeOut();
            }, (time * 1000));
        }
    })  
    
     
    //  开启折叠
    <?php  if($this->options->zmki_fold == '0'){ 
    } else {
      echo ' $(".text-gray").click(function(){
                $(this).next().slideToggle(200)
            }) ';
    }
    ?>  
       
     
</script>
<?php if($this->options->fk_zmki == '1'): ?>  
<div class="wapnone fk_service">
	<ul>
		<?php if($this->options->zmki_ah == '1'): ?>  
		<li class="fk_service_box fk_service_zmkiah" onclick="window.location.href='javascript:switchNightMode()'">
			<div class="fk_service_zmkiah_cont"> <span class="fk_service_triangle"></span>全新暗黑模式，夜间使用保护眼睛 </div>
		</li>
		 <?php endif; ?> 
		<li>
			<div class="fk_service_consult_cont1" style="display: none;"> <span class="fk_service_triangle"></span> 在线咨询 </div>
		</li>
		<li class="fk_service_box fk_service_consult">
			<div class="fk_service_consult_cont"> <span class="fk_service_triangle"></span>
				<div class="fk_service_consult_cont_top"> <span class="fk_service_hint"> <span class="fk_service_icon"></span>
						<span> 如遇问题，请联系站长 </span> </span> <span class="fk_service_button" onclick="window.open('https://wpa.qq.com/msgrd?v=3&uin=<?php $this->options->fk_zmki_qq(); ?>&site=qq&menu=yes')">QQ联系</span>
					<span class="fk_service_button" onclick="window.open('https://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=<?php $this->options->fk_zmki_email(); ?>')">在线邮件</span>
				</div> <span class="fk_service_phone"> QQ 请注明来意 ：<?php $this->options->fk_zmki_qq(); ?> </span> <span class="fk_service_check_site"> <span class="fk_service_icon"></span>
					<span onclick="window.open('<?php $this->options->fk_zmki_url(); ?>')">更多：<?php $this->options->fk_zmki_name(); ?></span> </span>
			</div>
		</li> 
		 <li class="fk_service_box fk_service_qr">
			<div class="fk_service_qr_cont"> <span class="fk_service_triangle"></span>
				<div class="fk_service_qrimg"> <span class="fk_service_qrimg_site"></span> 微信扫一扫关注 </div>
				<div class="fk_service_qrtext"><span><?php $this->options->fk_zmki_gzhtext(); ?></span></div>
			</div>
		</li>
		<li class="fk_service_box fk_service_zmkiqp"  onclick="javascript:document.getElementById('fullscreen').click();" > 
		<div class="fk_service_zmkiqp_cont"> <span class="fk_service_triangle"></span>切换全屏</div>
		</li>
		<li class="fk_service_box fk_service_feedback" onclick="window.location.href='<?php $this->options->zmki_links(); ?>'">
			<div class="fk_service_feedback_cont"> <span class="fk_service_triangle"></span> 提交收录，站长收到留言后即刻处理！ </div>
		</li> 
		<li class="fk_service_box fk_service_upward " onclick="javascript:document.getElementById('01').click();" style="display: block;" >
				<a id="01" href="/#" rel="go-top" class="fk_service_box fk_service_upward ">1</a>
			<div class="fk_service_upward_cont"> <span class="fk_service_triangle"></span> <span> 返回顶部 </span> </div>
			<a class="to-top" style="cursor: pointer; position: fixed; right: 38px; bottom: 38px;" id="d41d8cd98f00b204e9800998ecf8427e" "><i class="icon-up-small"></i></a>
			</li>		 
			 <?php endif; ?>