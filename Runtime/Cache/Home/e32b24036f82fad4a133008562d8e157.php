<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php echo ($meta_title); ?>_<?php echo C('WEB_SITE_TITLE');?></title>
<link href="/cms/yershop/Public/Home/css/font-face.css" rel="stylesheet">
<link href="/cms/yershop/Public/Home/css/common.css" rel="stylesheet">
<link href="/cms/yershop/Public/Home/css/top.css" rel="stylesheet">
<link href="/cms/yershop/Public/Home/css/footer.css" rel="stylesheet">

<script type="text/javascript" src="/cms/yershop/Public/static/js/jquery.min.js"></script>
<script type="text/javascript" src="/cms/yershop/Public/Home/js/public.js"></script>


</head>
<body>
<!-- 工具条 -->
	<!-- 顶部工具条 --><div class="top"><div class="topbar">                                 <span class="welcome" style="float:left">欢迎光临<?php echo C('WEB_SITE_TITLE');?>		<?php if(is_login()): ?><a href="" class="red"><?php echo get_username();?></a>,<a rel="nofollow" href="index.php?s=/Home/User/logout.html">退出</a><?php else: ?> ,请<a href="<?php echo U('User/login');?>" class="red"> 登录</a>&nbsp;<a href="<?php echo U('User/register');?>" style="padding-left:0;padding-right:10px"> 免费注册 </a><?php endif; ?>		</span> 	  		  	  <span class="operate_nav">			<span  id="account"><a rel="nofollow" >我的账号&nbsp;</a><i id="icount" class="fa fa-angle-down"></i> </span>			<ul id="dbox" class="top_lg_info_down" style="display:none;"> <li><a rel="nofollow" href="index.php?s=/Home/center/index.html">个人中心</a></li> <li><a rel="nofollow" href="index.php?s=/Home/center/collect.html">我的收藏</a></li> <li><a rel="nofollow" href="index.php?s=/Home/center/coupon.html">优惠券</a></li><li><a rel="nofollow" href="index.php?s=/Home/center/comment.html">我的评论</a></li> <?php if(is_login()): ?><li><a rel="nofollow" href="index.php?s=/Home/User/profile.html">修改密码</a></li><?php else: endif; ?></ul>		    	|</span>		  	<span class="operate_nav" >	  <a rel="nofollow" href=''>我的订单</a>| </span>		 <span class="operate_nav" >	 <a href="javascript:AddToShoppingCart(0);" name="购物车" dd_name="购物车"><i class="icon_card"></i>购物车<b id="cart_items_count"></b></a> </span> </div> </div><script type="text/javascript">//头部topbar会员中心显示与隐藏var Account= document.getElementById('account');            var Downmenu= document.getElementById('dbox');            var timer = null;//定义定时器变量            //鼠标移入div1或div2都把定时器关闭了，不让他消失            Account.onmouseover = Downmenu.onmouseover = function ()            {				 //改变箭头方向				$("i#icount").attr("class","fa fa-angle-up");               				 //改变背景颜色				 Account.style.backgroundColor = '#fff';				 //显示下拉框                $("#dbox").show();				//关闭定时执行                clearTimeout(timer);            }			            //鼠标移出div1或div2都重新开定时器，让他延时消失            Account.onmouseout = Downmenu.onmouseout = function ()            {				$("i#icount").attr("class","fa fa-angle-down");				Account.style.backgroundColor = '#F5F5F5';				 //开定时器，每隔200微妙下拉框消失                timer = setTimeout(function () {                     $("#dbox").hide(); }, 200);            }       				</script>		<!-- 顶部工具条 结束 -->
	<!-- /工具条 -->
	<!-- 头部 -->
	<div class="wrapper-cart">
	         <!-- 导航条 -->



<div class="header-wrap"><a href="<?php echo C('DOMAIN');?>" class="logo" title="<?php echo C('WEB_SITE_TITLE');?>"><img src="/cms/yershop/Public/Home/images/logo.png" alt=""></a>

<div class="shopping_cart_procedure3"><span>1、我的购物车</span><span>   2、填写订单</span><span style="width:175px; padding:0;">3、完成订单</span>  </div>
</div>
	<!-- /头部 -->
	
	<!-- 主体 -->
	<div  class="wrapper-order">

 
<div id="success" >

<p><i class="glyphicon glyphicon-ok" ></i><strong style="color:#35AA47;clear:both;font-size:18px;">提交成功！</strong></p>
<p><a class="btn_success" rel="nofollow" href="<?php echo U('index/index');?>">继续购物</a><a  class="btn_success" rel="nofollow" href="<?php echo U('center/index');?>">查看订单</a></p></div>

<!--脚本开始--> 
    
   

 </div>
	<!-- /主体 -->

	<!-- 底部 -->
	
    <!-- 底部-->
   <script type="text/javascript"  charset="utf-8" src="/cms/yershop/Public/static/js/menudown.js"></script> 

</div></div>
<div class="footer">
<div class="footer_pic_new">
		<div class="footer_pic_new_inner">
		    <a name="foot_1" href="http://help.dangdang.com/details/page13" target="_blank" class="footer_pic01"><span>正规渠道正品保障</span></a>
		    <a name="foot_2" class="footer_pic02" href="http://help.dangdang.com/details/page21" target="_blank"><span>放心购物货到付款</span></a>
		    <a name="foot_3" class="footer_pic03" href="http://help.dangdang.com/details/page16" target="_blank"><span>150城市次日送达</span></a>
		    <a name="foot_4" class="footer_pic04" href="http://help.dangdang.com/details/page29" target="_blank"><span>上门退货当场退款</span></a>
		</div>
	</div>
    <div class="foot_center">  
	
  <?php if(is_array($footer)): $i = 0; $__LIST__ = $footer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><dl><dt><?php echo ($vo["title"]); ?></dt>
 <?php if(is_array($vo['id'])): $i = 0; $__LIST__ = $vo['id'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$son): $mod = ($i % 2 );++$i;?><dd><a rel="nofollow"  href="<?php echo U('help/lists?pid='.$son['id']);?>"><?php echo ($son["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
</dl><?php endforeach; endif; else: echo "" ;endif; ?> 
     

<dl>
    <dt>在线客服</dt>
    <dd>周一至周五</dd>
    <dd>09:00-18:00</dd>
	<dd><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo C('QQ');?>&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:<?php echo C('QQ');?>:51" alt="点击这里给我发消息" title="点击这里给我发消息"/></a></dd>
</dl>

  

     
    </div>
 
<div class="theme-footer"> 
    

  
      
       <p><span style=" text-align: center;"> Copyright@yershop商城系统 2014-2015 <strong><a href="http://www.yershop.com/" target="_blank" class="red">Yershop.com</a></strong> <?php echo C('WEB_SITE_ICP');?></p>
    
	</div> </div>

</div>
	<!-- /底部 -->
</body>
</html>