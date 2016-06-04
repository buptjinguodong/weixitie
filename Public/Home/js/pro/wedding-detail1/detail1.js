$(function(){
	init();
	div1();
});

function init(){
	var screen_height = screen.availHeight;
	// alert(screen_height);
	var page_hint = document.getElementById("page_hint");
	// alert(page_hint);
	var radio = devicePixelRatio;
	// alert(screen_height);
	// alert(radio);
	page_hint.style.top = (screen_height-120)+'px';
}

/**
 * div1内部元素初始化
 * @return {[type]} [description]
 */
function div1(){
	$("#div1").swipe( {
	swipe:function(event, direction, distance, duration, fingerCount) {
		if(direction == 'up'){
			$(this).slideUp();
			$("#div2").show();
			// $("#div1").hide();
			div2();
		}
	},
	});
}

/**
 * 用于初始化div2内部元素布局
 * @return {[type]} [description]
 */
function div2(){
	
	// 设置女主角头像居中
	var homeGirlDetailHeight = document.getElementById("home_girl_detail").offsetHeight;
	var homeGirlHeight = document.getElementById("home_girl").offsetHeigh;
	var homeGirlImg = document.getElementById("home_girl_img");
	var homeGirlImgHeight = homeGirlImg.offsetHeight;
	var girlImgMarginTop = (homeGirlDetailHeight - homeGirlImgHeight)/2;
	homeGirlImg.style.marginTop = girlImgMarginTop + "px";

	// 设置男主角头像居中
	var homeBoyDetailHeight = document.getElementById("home_boy_detail").offsetHeight;
	var homeBoyHeight = document.getElementById("home_boy").offsetHeigh;
	var homeBoyImg = document.getElementById("home_boy_img");
	var homeBoyImgHeight = homeBoyImg.offsetHeight;
	var boyImgMarginTop = (homeBoyDetailHeight - homeBoyImgHeight)/2;
	homeBoyImg.style.marginTop = boyImgMarginTop + "px";

	console.log(boyImgMarginTop);
	console.log(homeBoyHeight);


}