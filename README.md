## webstack_blue
# Typecho蓝色导航主题

这是一个基于开源项目WebStack和WebStack_钻芒二开版而制作的 Typecho 网址导航主题。
该项目主要是为了构建一个更适合我个人使用的网址导航站点，一切从简，以简约实用为原则做个简单纯粹的网址导航。

WebStack项目地址：https://github.com/WebStackPage/WebStackPage.github.io
钻芒二开项目地址：https://github.com/wclk/WebStack_ZMKI

## 文件目录介绍

根目录-----
      |--admin    //独立页面图标需要更改的write-page.php  write-pst.php 
      |--favicon  //自动网站的Favicon图标并显示在你的网页上
      |--Webstack //主题文件
      
## 安装教程
1、前往 发行版 下载主题文件压缩包，解压得到 WebStack 目录，将其上传至服务器 Typecho 主题目录 /usr/themes/

2、导航栏显示独立页面名字并显示图标需要下载admin 复制到网站根目录 替换admin文件夹下 write-page.php  write-pst.php 

3、自动获取网站Favicon图标插件，上传到网站根目录，应用webstack_blue主题后-设置外观-自动获取Icon api 填写 https://你的网址/favicon/get.php?url= 

4、填写分类缩略名可实现为菜单项显示图标的功能，例如在分类缩略名处填写 book 或者 fa-book 时，将在菜单项前面显示一个书本的小图标。具体可用的分类缩略名可以查看：https://fontawesome.com/v4/icons/
