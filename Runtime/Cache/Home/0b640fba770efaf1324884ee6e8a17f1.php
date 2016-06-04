<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />
	<title><?php echo ($meta_title); ?>_<?php echo C('WEB_SITE_TITLE');?></title>
	
	<link href="/cms/yershop/Public/Home/js/pro/wedding-detail1/detail1.css" rel="stylesheet">
	<style>
		.Qcontainer {
			height: 100%;
			width: 28%;
			position: relative;
			-webkit-perspective: 800;
			float: left;
			margin-right: 2%;
			display: none;
		}
		.film{
			width: 100%;
			height: 15em;
			-webkit-transform-style: preserve-3d;
			-webkit-transition: 1s;

		}
		.Qcontainer:hover .film{
			-webkit-transform: rotateY(180deg);
		}
		.face{
			position: absolute;
			/*-webkit-backface-visibility: hidden;*/
		}
		.face{
			animation: swing 0.1s 5 ease-in;
		}

		.back{
			width: 66%;
			height: 127%;
			/*-webkit-transform: rotateY(180deg);*/
			background: #3d3d3d;
			padding: 15%;
			z-index: 100;
		}

		@keyframes warning{
			0% {
				text-shadow: 0 0 4px #000000
			}
			50% {
				text-shadow: 0 0 40px #000000
			}
			100%{
				text-shadow: 0 0 4px #000000
			}

		}

		@keyframes swing{
			0%{
				transform: rotate(3deg);
			}
			20%{
				transform: rotate(7deg);
			}
			60%{
				transform: rotate(10deg);
			}
			80%{
				transform: rotate(7deg);
			}
			100%{
				transform: rotate(3deg);
			}
		}

		

		.back h5{
			font-size: 4em;
			color: #f2050b;
			text-align: center;
			animation: warning 1.5s infinite ease-in;
		}
	</style>

	<script type="text/javascript" src="/cms/yershop/Public/Home/js/jquery.min.js"></script>
	
	<script type="text/javascript" src="/cms/yershop/Public/Home/js/pro/wedding-detail1/detail1.js" ></script>

	<script src="/cms/yershop/Public/Home/js/pro/touchswipe_1.6.js"></script>

</head>
<body>
	<!-- 主体 -->
	
	<section class="Qcontainer">
		<div class="film">
			<div class="face font">
				<img src="/cms/yershop/Public/Home/images/img/weixinweixitie.jpg" alt+"The Goonies" />
			</div>
			<div class="face back">
				<h5>Hot!</h5>
			</div>
		</div>
	</section>
	<section class="formTest">
		<form id="redemtion" method="post" autocomplete='on'>
			
			<fieldset>
				<legend>About thie offnding film(part 1 of 3)</legend>
				<div>
					<label for="film">The film in question?</label>
					<input id="film" name="film" type="text" placeholder="e.g.King Kong" required />
				</div>
				<div>
					<label for="search">Search the site...</label>
					<input id="search" name="search" type="search" placeholder="Wyatt Earp" autofocus required />
				</div>
				<div>
					<label for="awardWon">Award Won</label>
					<input id="awardWon" name="awardWon" type="text" list="awards" required />
					<datalist id="awards"> 
						<!-- 与awardWon关联，提交时只提交关联的input -->
						<select>
							<option value="Best Picture"></option>
							<option value="Best Director"></option>
							<option value="Best Adapted Screenplay"></option>
							<option value="Best Original Screenplay"></option>
						</select>
					</datalist>
				</div>
			</fieldset>

			<fieldset>
				<legend>Who(part 2 of 3)</legend>
				<div>
					<label for="email">The email in question?</label>
					<input id="email" name="email" type="email" placeholder="ddd@gg.com" required  />
				</div>
				<div>
					<label for="number">The number in question?</label>
					<input id="number" name="number" type="number" placeholder="1231" min="1929" max="2015" required  />
				</div>
				<div>
					<label for="url">The url in question?</label>
					<input id="url" name="url" type="url" placeholder="www.ag.com" required  />
				</div>
				<div>
					<label for="tel">The tel in question?</label>
					<input id="tel" name="tel" type="tel" placeholder="1-234-5678" required  />
				</div>
				<div>
					<label for="search">The search in question?</label>
					<input id="search" name="search" type="search" placeholder="WY ea" required  />
				</div>
				<div>
					<label for="pattern">The pattern in question?</label>
					<input id="pattern" name="pattern" pattern="([a-zA-Z]{3,30}\s*)+[a-zA-Z]{3,30}" placeholder="Dw Sch" required  />
				</div>
				<div>
					<label for="color">The color in question?</label>
					<input id="color" name="color" type="color" />
				</div>
			</fieldset>

			<fieldset>
				<legend>Who(part 2 of 3)</legend>
				<div>
					<label for="date">The date in question?</label>
					<input id="date" name="date" type="date"/>
				</div>
				<div>
					<label for="month">The month in question?</label>
					<input id="month" name="month" type="month"/>
				</div>
				<div>
					<label for="week">The week in question?</label>
					<input id="week" name="week" type="week"/>
				</div>
				<div>
					<label for="time">The time in question?</label>
					<input id="time" name="time" type="time"/>
				</div>
				<div>
					<label for="datetime">The datetime in question?</label>
					<input id="datetime" name="datetime" type="datetime"/>
				</div>
				<div>
					<label for="datetime-local">The datetime-local in question?</label>
					<input id="datetime-local" name="datetime-local" type="datetime-local"/>
				</div>
				<div>
					<label for="range">The range in question?</label>
					<input id="range" name="range" type="range" min="1" max="10"  value="5"/>
				</div>
			</fieldset>
			

			<button type="submit">Submit</button>
		</form>
	</section>

	<!-- /主体 -->
	
	

</body>
</html>