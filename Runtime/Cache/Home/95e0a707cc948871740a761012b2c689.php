<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title><?php echo ($meta_title); ?>_<?php echo C('WEB_SITE_TITLE');?></title>
	
	<link href="/git/weixitie/Public/Home/js/pro/wedding-detail1/detail1.css" rel="stylesheet">

	<script type="text/javascript" src="/git/weixitie/Public/Home/js/jquery.min.js"></script>
	
	<script type="text/javascript" src="/git/weixitie/Public/Home/js/validate.js" ></script>
	<script type="text/javascript" src="/git/weixitie/Public/Home/js/pro/wedding-detail1/detail1.js" ></script>


	<script src="/git/weixitie/Public/Home/js/pro/touchswipe_1.6.js"></script>

</head>
<body>
	<!-- 主体 -->
	
	<div id="div1">
	    <div id="page_img">
	        <div id="page_hint">
	        </div>
	    </div>
	</div>
	<div id="div2" style="display:none">
	    <div id="home_bk">
	        <div id="home_img_wrapper">
	            <div id="home_img">
	            </div>
	            <div id="home_boy_name">
	            <?php echo ($info["boy_name"]); ?>
	            </div>
	            <div id="home_girl_name">
	            <?php echo ($info["girl_name"]); ?>
	            </div>
	        </div>
	        <div class="clear"></div>
	        <div id="home_title">
	        <?php echo ($info["boy_name"]); ?> &amp; <?php echo ($info["boy_name"]); ?> 结婚啦
	        </div>
	        <div id="home_content">
	        <?php echo ($info["abstract"]); ?>
	        </div>
	        <div id="home_boy">
	            <div class="home_img" id="home_boy_img">
	            </div>
	            <div class="home_content" id="home_boy_detail">
	                <div id="home_boy_title">
	                    <?php echo ($info["boy_name"]); ?>
	                </div>
	                <div id="home_boy_content">
	                    <?php echo ($info["boy_word"]); ?>
	                </div>
	            </div>
	        </div>
	        <div class="clear"></div>
	        <div id="home_girl">
	            <div class="home_img" id="home_girl_img">
	            </div>
	            <div class="home_content" id="home_girl_detail">
	                <div id="home_girl_title">
	                    <?php echo ($info["girl_name"]); ?>
	                </div>
	                <div id="home_girl_content">
	                    <?php echo ($info["girl_word"]); ?>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div id="wadding_pics">
	   		<?php $pics= explode(',',$info['wedding_pics']); ?>
			<?php if(!empty($pics)): if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="pic_wrapper">
			            <div class="wadding_pic">
			                <img class="pic" _src="<?php echo (get_cover($v,'path')); ?>" />
			            </div>
			        </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
	    </div>
	    <div id="wadding_pics_big">
	   		<?php $pics= explode(',',$info['wedding_pics']); ?>
			<div class="pic_big_wrapper">
				<div class="pic_big_mask"></div>
			<?php if(!empty($pics)): if(is_array($pics)): $i = 0; $__LIST__ = $pics;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><div class="wadding_pic_big">
			                <img class="pic_big" _src="<?php echo (get_cover($v,'path')); ?>" />
			            </div><?php endforeach; endif; else: echo "" ;endif; endif; ?>
        	</div>
	    </div>
	    <div class="clear"></div>
	    <div id="wedding_info">
	        <div id="wedding_time">
	            <i class=""></i>
	            <div class="time_content">
	                宴会时间 : <?php echo ($info["wedding_time"]); ?>
	            </div>
	        </div>
	        <div id="wedding_tel">
	            <i class=""></i>
	            <div class="tel_content">
	                接待电话 : <?php echo ($info["wedding_phone"]); ?>
	            </div>
	        </div>
	        <div id="wedding_addr">
	            <i class=""></i>
	            <div class="addr_content">
	                <?php echo ($info["wedding_address"]); ?>
	            </div>
	        </div>
	    </div>
	    <div class="clear"></div>
	    <div id="wedding_video">
	        <iframe frameborder="0" width="100%" height="100%" src="http://v.qq.com/iframe/player.html?vid=g0015zl27wf&tiny=0&auto=0" allowfullscreen></iframe>
	    </div>
	    <div class="clear"></div>
	    <div id="wedding_bless">
	        <div class="bless_title">
	            bless_title
	        </div>
	        <div class="bless_content">
	            为了方便统计整理婚宴自理啊为了方便统计整理婚宴自理啊为了方便统计整理婚宴自理啊为了方便统计整理婚宴自理啊为了方便统计整理婚宴自理啊
	        </div>
	        <form id="visitor" name="visitor" method="post" onsubmit="submit_form(this.id);return false;" action="<?php echo U('Home/Wedding/reply');?>">
	            <input name="article_id" id="article_id" value="<?php echo ($info["id"]); ?>" type="hidden" />
	            <div class="input-group">
	                <label for="name">
	                您的姓名 :
	                </label>
	                <input name="name" id="name" type="text">
	            </div>
	            <div class="input-group">
	                <label for="willing">
	                您会来参加我们的婚宴吗?
	                </label>
	                <div class="split_line"></div>
	                <input name="willing" id="willing_1" value="1" type="radio">
	                <label for="willing_1">是的，我会参加。</label>
	                <div class="split_line"></div>
	                <input name="willing" id="willing_2" value="2" type="radio">
	                <label for="willing_2">不，我最近时间比较紧。</label>
	                <div class="split_line"></div>
	            </div>
	            <div class="input-group">
	                <label for="tel_num">
	                请留下您的手机号码：
	                </label>
	                <input name="tel_num" id="tel_num" type="text">
	                <div class="split_line"></div>
	            </div>
	            <div class="input-group">
	                <label for="bless">
	                您对我们的祝福：
	                </label>
	                <textarea name="bless" id="bless" type="textarea" rows="3" ></textarea>
	                <div class="split_line"></div>
	            </div>
	            <input type="submit" id="visitor_submit" value="提交">
	            <div class="split_line"></div>
	        </form>
	    </div>
	    <div class="clear"></div>
	    <div id="public_account">
	        <img src="/git/weixitie/Public/Home/images/img/weixinweixitie.jpg">
	    </div>
	    <div class="clear"></div>
	    <div id="public_account_focus">
	        <button id="focus_account">关注公众号：微信微喜帖</button>
	    </div>
	    <div class="clear"></div>
	</div>

	<script>
		var validate_form = function(form_id){
			var validator = new FormValidator(form_id, [{
			    name: 'article_id',
			    rules: 'required'
			}, {
			    name: 'name',
			    display: 'required',
			    rules: 'required'
			}, {
			    name: 'willing',
			    rules: 'required'
			}, {
			    name: 'tel_num',
			    rules: 'required'
			}, {
			    name: 'bless',
			    rules: 'required'
			}], function(errors) {
			    if (errors.length > 0) {
			        // Show the errors
			    }
			});
		};
		var submit_form = function(form_id){
			// validate_form(form_id);
			
			var _form = $("#"+form_id);
			jQuery.ajax({
				url: _form.attr("action"),
				data: _form.serialize(),
				type: _form.attr("method"),
				beforeSend: function(){
					console.log("submit form: "+ form_id);
				},
				success: function(){
					alert("发送成功");
				}
			});
			return false;
		};


		var height = $(window).height();
		$("#wrapper").css("height",height);
		$(".page").css('top',height);
		$(".page.active").css('top','0');
		// setTimeout(Wedding.rise("page1","page2"), 2000);
		var initPage = function(){
			$("#div1").css('background', 'url("<?php echo (get_cover($info["cover_id"],'path')); ?>")');
			$("#home_img").css('background-image', 'url("<?php echo (get_cover($info["main_pic"],'path')); ?>")');
			$("#home_boy_img").css('background-image', 'url("<?php echo (get_cover($info["boy_pic"],'path')); ?>")');
			$("#home_girl_img").css('background-image', 'url("<?php echo (get_cover($info["girl_pic"],'path')); ?>")');
			$("img.pic").load(function(){
				if(this.width > this.height){
					$(this).css("width", "auto");
					$(this).css("height", "100%");
				}else{
					$(this).css("height", "auto");
					$(this).css("width", "100%");
				}
			});
			$("img.pic_big").load(function(){
				var tem_h = $("#div1").height(); // 获取屏幕高度
				var tem_w = $("#div1").width();
				var tem_pic_h = this.height; // 获取图片高度
				var tem_pic_w = this.width;

				if(tem_h/tem_w > tem_pic_h/tem_pic_w){
					$(this).css("width", "100%");
					$(this).css("height", "auto");

					var b_h = (tem_w*tem_pic_h)/tem_pic_w;
					// console.log(b_h + " : " + tem_h + " : " + tem_pic_h);
					$(this).css("top", (tem_h - b_h)/2+"px");
				}else{
					$(this).css("height", "100%");
					$(this).css("width", "auto");
				}
				var _ind = $(this).attr('_i');
				_ind = _ind - 0;
				var s_width =  $("#div1").width()-0;
				$(this).parent().css("left", (_ind*s_width)+'px');
			});
		};
		initPage();
		var picBigGo = function(ind){
			var s_width =  $("#div1").width();
			$(".pic_big_wrapper").css('left', (0-ind*s_width)+"px");
		};
		var initPageOnReady = function(){
			var initWeddingPics = function(){
				for(var i=0; i<$("img.pic").size();i++){
					var tem_s = $($("img.pic")[i]).attr("_src");
					$($("img.pic")[i]).attr('src', tem_s);
					$($("img.pic")[i]).attr('_i', i);
					$($("img.pic")[i]).click(function(){
						// 点击照片 展示放大版图片
						$("#wadding_pics_big").show();
						picBigGo($(this).attr("_i"));
					});
				}

				for(var i=0; i<$("img.pic_big").size();i++){
					var tem_s = $($("img.pic_big")[i]).attr("_src");
					$($("img.pic_big")[i]).attr('_i', i);
					$($("img.pic_big")[i]).attr('src', tem_s);
					$($("img.pic_big")[i]).click(function(){
						// 点击照片 展示放大版图片
						$("#wadding_pics_big").hide();
					});

					$($("img.pic_big")[i]).swipe( {
						swipe:function(event, direction, distance, duration, fingerCount) {
							var ind = $(event.target).attr("_i") - 0;
							if(direction == 'right'){
								picBigGo(ind==0?0:ind-1);
							}else if(direction == 'left'){
								picBigGo(ind==$("img.pic_big").size()-1?$("img.pic_big").size()-1:ind+1);
							}
						},
					});

				}

				var s_width =  $("#div1").width();
				console.log(s_width);
				$(".pic_big_wrapper").css('width', $("img.pic_big").size()*s_width + "px");
				$(".wadding_pic_big").css('width', s_width+"px");

				$(".pic_big_mask").click(function(){
					// 点击照片 展示放大版图片
					$("#wadding_pics_big").hide();
				});
				$("#wadding_pics_big").hide();
			};
			initWeddingPics();
		};
		$().ready(function(){
			initPageOnReady();
		});

	</script>

	<!-- /主体 -->
	
	

</body>
</html>