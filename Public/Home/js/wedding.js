$(function(){
	var empty = function(param){
		if(typeof param == "undefined" || param==null || param==""){
			return true;
		}else{
			return false;
		}
	};

	var Wedding = new function(){}();
	Wedding.rise = function(cur, after){
		if(empty(cur) || empty(after)){
			alert('目标获取失败');
			return false;
		}
		$("#"+cur).css("top", screen.availHeight);
		$("#"+after).css("top", "0");
	};

	/*
	 *	激活每个page页的上拉提示箭头
	 */
	Wedding.arrowActive = function(){
		$(".up-arrow").addClass('active');
		setInterval(function(){
			$(".up-arrow").addClass('active');
		},2000);
		setTimeout(function(){
			$(".up-arrow").removeClass('active');
			setInterval(function(){
				$(".up-arrow").removeClass('active');
			},2000);
		},1000);
	}
	window.Wedding = Wedding;

}());

$(function(){


}());

$(document).ready(function(){
	// setTimeout(function(){Wedding.rise("page1","page2")}, 1000);
	Wedding.arrowActive();
});



