<?php
/**
 * 关于
 * 
 * @package custom
 *
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
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
            <h1 class="tt text-gray"><span>#</span><?php $this->title(); ?></h1> 
            <div class="items">
                <div class="page-zmki"> 
                <?php $this->content(); ?> 
                </div>
            </div>
        </div>
 


  <?php $this->need('comments.php'); ?>
       

    </div> 
         
            <br>
            
            <br>
        <!-- Main Footer -->
        <?php $this->need('footer.php'); ?>