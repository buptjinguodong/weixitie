<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo ($meta_title); ?>|yershop管理平台</title>
    <link href="/cms/yershop/Public/favicon.ico" type="image/x-icon" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="/cms/yershop/Public/Admin/css/base.css" media="all">
    <link rel="stylesheet" type="text/css" href="/cms/yershop/Public/Admin/css/common.css" media="all">
    <link rel="stylesheet" type="text/css" href="/cms/yershop/Public/Admin/css/module.css">
   <?php if(isset($cate_rows)): ?><link rel="stylesheet" type="text/css" href="/cms/yershop/Public/Admin/css/style.css" media="all"><?php else: ?> <link rel="stylesheet" type="text/css" href="/cms/yershop/Public/Admin/css/style-default.css" media="all"><?php endif; ?>  
	<link rel="stylesheet" type="text/css" href="/cms/yershop/Public/Admin/css/<?php echo (C("COLOR_STYLE")); ?>.css" media="all">
     <!--[if lt IE 9]>
    <script type="text/javascript" src="/cms/yershop/Public/static/jquery-1.10.2.min.js"></script>
    <![endif]--><!--[if gte IE 9]><!-->
    <script type="text/javascript" src="/cms/yershop/Public/static/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="/cms/yershop/Public/Admin/js/jquery.mousewheel.js"></script>
 <script type="text/javascript" src="/cms/yershop/Public/Admin/js/highcharts.js"></script>
<script type="text/javascript" src="/cms/yershop/Public/Admin/js/exporting.js"></script>
<script type="text/javascript" src="/cms/yershop/Public/Admin/js/data.js"></script>
    <!--<![endif]-->
    
</head>
<body>
    <!-- 头部 -->
    <div class="header">
        <!-- Logo -->
        <span class="logo"><img src="/cms/yershop/Public/Admin/images/logo.png"></span>
        <!-- /Logo -->

        <!-- 主导航 -->
        <ul class="main-nav">
            <?php if(is_array($__MENU__["main"])): $i = 0; $__LIST__ = $__MENU__["main"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li class="<?php echo ((isset($menu["class"]) && ($menu["class"] !== ""))?($menu["class"]):''); ?>"><a href="<?php echo (get_nav_url($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
			<li><a href="<?php echo get_index_url();?>" target="_blank">前台</a></li>
        </ul>
        <!-- /主导航 -->

        <!-- 用户栏 -->
        <div class="user-bar">
            <a href="javascript:;" class="user-entrance"><i class="icon-user"></i></a>
            <ul class="nav-list user-menu hidden">
                <li class="manager">你好，<em title="<?php echo session('user_auth.username');?>"><?php echo session('user_auth.username');?></em></li>
                <li><a href="<?php echo U('User/updatePassword');?>">修改密码</a></li>
                <li><a href="<?php echo U('User/updateNickname');?>">修改昵称</a></li>
                <li><a href="<?php echo U('Public/logout');?>">退出</a></li>
            </ul>
        </div>
    </div>
    <!-- /头部 -->
 <?php if(isset($cate_rows)): ?><div class="goods-content"><?php endif; ?> 
    <!-- 边栏 -->
    <div class="sidebar">
        <!-- 子导航 -->
        
            <div id="subnav" class="subnav">
                <?php if(!empty($_extra_menu)): ?>
                    <?php echo extra_menu($_extra_menu,$__MENU__); endif; ?>
                <?php if(is_array($__MENU__["child"])): $i = 0; $__LIST__ = $__MENU__["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sub_menu): $mod = ($i % 2 );++$i;?><!-- 子导航 -->
                    <?php if(!empty($sub_menu)): if(!empty($key)): ?><h3><i class="icon icon-unfold"></i><?php echo ($key); ?></h3><?php endif; ?>
                        <ul class="side-sub-menu">
                            <?php if(is_array($sub_menu)): $i = 0; $__LIST__ = $sub_menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;?><li>
                                    <a class="item" href="<?php echo (U($menu["url"])); ?>"><?php echo ($menu["title"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul><?php endif; ?>
                    <!-- /子导航 --><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>
        
        <!-- /子导航 -->
    </div>
    <!-- /边栏 -->
 <?php if(isset($cate_rows)): ?></div><?php endif; ?> 
    <!-- 内容区 -->
    <div id="main-content">
        <div id="top-alert" class="fixed alert alert-error" style="display: none;">
            <button class="close fixed" style="margin-top: 4px;">&times;</button>
            <div class="alert-content">这是内容</div>
        </div>
        <div id="main" class="main">
            
            <!-- nav -->
            <?php if(!empty($_show_nav)): ?><div class="breadcrumb">
                <span>您的位置:</span>
                <?php $i = '1'; ?>
                <?php if(is_array($_nav)): foreach($_nav as $k=>$v): if($i == count($_nav)): ?><span><?php echo ($v); ?></span>
                    <?php else: ?>
                    <span><a href="<?php echo ($k); ?>"><?php echo ($v); ?></a>&gt;</span><?php endif; ?>
                    <?php $i = $i+1; endforeach; endif; ?>
            </div><?php endif; ?>
            <!-- nav -->
            

            
	<script type="text/javascript" src="/cms/yershop/Public/static/uploadify/jquery.uploadify.min.js"></script>
	<div class="main-title">
		<h2><?php echo isset($info['id'])?'编辑':'新增';?>留言</h2>
	</div>
	<div class="tab-wrap">
		<ul class="tab-nav nav">
			<li data-tab="tab1" class="current"><a href="javascript:void(0);">基 础</a></li>
			<li data-tab="tab2"><a href="javascript:void(0);">高 级</a></li>
		</ul>
		<div class="tab-content">
			<form action="<?php echo U();?>" method="post" class="form-horizontal">
				<!-- 基础 -->
				<div id="tab1" class="tab-pane in tab1">
		<div class="form-item">
			<label class="item-label">交易订单号<span class="check-tips">（唯一的tag）</span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="out_trade_no" value="<?php echo ((isset($info["out_trade_no"]) && ($info["out_trade_no"] !== ""))?($info["out_trade_no"]):''); ?>">
			</div>
		</div>
		<div class="form-item">
			<label class="item-label">金额<span class="check-tips"></span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="money" value="<?php echo ($info["money"]); ?>">
			</div>
		</div>
				
			<div class="form-item">
			<label class="item-label">付款类型<span class="check-tips">（付款类型1-在线支付2-货到付款）</span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="type" value="<?php echo ($info["type"]); ?>">
			</div>
		</div>
	
	<div class="form-item">
			<label class="item-label">实际金额<span class="check-tips">（不含优惠、赠送）</span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="total" value="<?php echo ($info["total"]); ?>">
			</div>
		</div>
		<div class="form-item">
			<label class="item-label">优惠券金额<span class="check-tips"></span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="coupon" value="<?php echo ($info["coupon"]); ?>">
			</div>
		</div>
		<div class="form-item">
			<label class="item-label">积分优惠金额<span class="check-tips"></span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="ratio" value="<?php echo ($info["ratio"]); ?>">
			</div>
		</div>
<div class="form-item">
			<label class="item-label">运费<span class="check-tips"></span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="yunfee" value="<?php echo ($info["yunfee"]); ?>">
			</div>
		</div>

				</div>

				<!-- 高级 -->
				<div id="tab2" class="tab-pane tab2">
				
				

				</div>

				<!-- 高级 -->
				<div id="tab2" class="tab-pane tab2">
	<div class="form-item">
						<label class="item-label">消耗积分</label>
						<div class="controls">
							
									<input type="text" name="ratioscore" class="text input-large" value="<?php echo ((isset($info["ratioscore"]) && ($info["ratioscore"] !== ""))?($info["ratioscore"]):''); ?>">
						</div>
					</div>
		<div class="form-item">
						<label class="item-label">优惠券编码</label>
						<div class="controls">
							
									<input type="text" name="couponcode" class="text input-large" value="<?php echo ((isset($info["couponcode"]) && ($info["couponcode"] !== ""))?($info["couponcode"]):''); ?>">
						</div>
					</div>				

<div class="form-item">
						<label class="item-label">分组</label>
						<div class="controls">
							
									<input type="text" name="group" class="text input-large" value="<?php echo ((isset($info["group"]) && ($info["group"] !== ""))?($info["group"]):''); ?>">
						</div>
					</div>
					<div class="form-item">
						<label class="item-label">状态</label>
						<div class="controls">
							
									<input type="text" name="status" class="text input-large" value="<?php echo ((isset($info["status"]) && ($info["status"] !== ""))?($info["status"]):''); ?>">
							
						</div>
					</div>
				<div class="form-item">
			<label class="item-label">地址编号id<span class="check-tips"></span></label>
			<div class="controls">
				<input type="text" class="text input-large" name="addressid" value="<?php echo ($info["addressid"]); ?>">
			</div>
		</div>
				
</div>
				<div class="form-item">
					<input type="hidden" name="id" value="<?php echo ((isset($info["id"]) && ($info["id"] !== ""))?($info["id"]):''); ?>">
					<button type="submit" id="submit" class="btn submit-btn ajax-post" target-form="form-horizontal">确 定</button>
					<button class="btn btn-return" onclick="javascript:history.back(-1);return false;">返 回</button>
				</div>
			</form>
		</div>
	</div>

        </div>
        <?php if(!isset($cate_rows)): ?><div class="cont-ft">
            <div class="copyright">
                <div class="fl">感谢使用<a href="http://www.yershop.com" target="_blank">YerShop</a>商城系统</div>
                <div class="fr">V<?php echo (ONETHINK_VERSION); ?></div>
            </div>
        </div>
    </div><?php endif; ?>
    <!-- /内容区 -->
    <script type="text/javascript">
    (function(){
        var ThinkPHP = window.Think = {
            "ROOT"   : "/cms/yershop", //当前网站地址
            "APP"    : "/cms/yershop/admin.php?s=", //当前项目地址
            "PUBLIC" : "/cms/yershop/Public", //项目公共目录地址
            "DEEP"   : "<?php echo C('URL_PATHINFO_DEPR');?>", //PATHINFO分割符
            "MODEL"  : ["<?php echo C('URL_MODEL');?>", "<?php echo C('URL_CASE_INSENSITIVE');?>", "<?php echo C('URL_HTML_SUFFIX');?>"],
            "VAR"    : ["<?php echo C('VAR_MODULE');?>", "<?php echo C('VAR_CONTROLLER');?>", "<?php echo C('VAR_ACTION');?>"]
        }
    })();
    </script>
    <script type="text/javascript" src="/cms/yershop/Public/static/think.js"></script>

    <script type="text/javascript" src="/cms/yershop/Public/Admin/js/common.js"></script>
    <script type="text/javascript">
        +function(){
            var $window = $(window), $subnav = $("#subnav"), url;
            $window.resize(function(){
                $("#main").css("min-height", $window.height() - 130);
            }).resize();

            /* 左边菜单高亮 */
            url = window.location.pathname + window.location.search;
            url = url.replace(/(\/(p)\/\d+)|(&p=\d+)|(\/(id)\/\d+)|(&id=\d+)|(\/(group)\/\d+)|(&group=\d+)/, "");
			
            $subnav.find("a[href='" + url + "']").parent().addClass("current") ;

            /* 左边菜单显示收起 */
            $("#subnav").on("click", "h3", function(){
                var $this = $(this);
                $this.find(".icon").toggleClass("icon-fold");
                $this.next().slideToggle("fast").siblings(".side-sub-menu:visible").
                      prev("h3").find("i").addClass("icon-fold").end().end().hide();
            });

            $("#subnav h3 a").click(function(e){e.stopPropagation()});

            /* 头部管理员菜单 */
            $(".user-bar").mouseenter(function(){
                var userMenu = $(this).children(".user-menu ");
                userMenu.removeClass("hidden");
                clearTimeout(userMenu.data("timeout"));
            }).mouseleave(function(){
                var userMenu = $(this).children(".user-menu");
                userMenu.data("timeout") && clearTimeout(userMenu.data("timeout"));
                userMenu.data("timeout", setTimeout(function(){userMenu.addClass("hidden")}, 100));
            });

	        /* 表单获取焦点变色 */
	        $("form").on("focus", "input", function(){
		        $(this).addClass('focus');
	        }).on("blur","input",function(){
				        $(this).removeClass('focus');
			        });
		    $("form").on("focus", "textarea", function(){
			    $(this).closest('label').addClass('focus');
		    }).on("blur","textarea",function(){
			    $(this).closest('label').removeClass('focus');
		    });

            // 导航栏超出窗口高度后的模拟滚动条
            var sHeight = $(".sidebar").height();
            var subHeight  = $(".subnav").height();
            var diff = subHeight - sHeight; //250
            var sub = $(".subnav");
            if(diff > 0){
                $(window).mousewheel(function(event, delta){
                    if(delta>0){
                        if(parseInt(sub.css('marginTop'))>-10){
                            sub.css('marginTop','0px');
                        }else{
                            sub.css('marginTop','+='+10);
                        }
                    }else{
                        if(parseInt(sub.css('marginTop'))<'-'+(diff-10)){
                            sub.css('marginTop','-'+(diff-10));
                        }else{
                            sub.css('marginTop','-='+10);
                        }
                    }
                });
            }
        }();
    </script>
    
	<script type="text/javascript">
		<?php if(isset($info["id"])): ?>Think.setValue("allow_publish", <?php echo ((isset($info["allow_publish"]) && ($info["allow_publish"] !== ""))?($info["allow_publish"]):1); ?>);
		Think.setValue("check", <?php echo ((isset($info["check"]) && ($info["check"] !== ""))?($info["check"]):0); ?>);
		Think.setValue("model[]", <?php echo (json_encode($info["model"])); ?> || [1]);
		Think.setValue("model_sub[]", <?php echo (json_encode($info["model_sub"])); ?> || [1]);
		Think.setValue("type[]", <?php echo (json_encode($info["type"])); ?> || [2]);
		Think.setValue("display", <?php echo ((isset($info["display"]) && ($info["display"] !== ""))?($info["display"]):1); ?>);
		Think.setValue("reply", <?php echo ((isset($info["reply"]) && ($info["reply"] !== ""))?($info["reply"]):0); ?>);
		Think.setValue("reply_model[]", <?php echo (json_encode($info["reply_model"])); ?> || [1]);<?php endif; ?>
		$(function(){
			showTab();
			$("input[name=reply]").change(function(){
				var $reply = $(".form-item.reply");
				parseInt(this.value) ? $reply.show() : $reply.hide();
			}).filter(":checked").change();
		});
		//导航高亮
		highlight_subnav('<?php echo U('Pay/index');?>');
	</script>

</body>
</html>