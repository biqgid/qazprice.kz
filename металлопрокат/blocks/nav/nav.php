<script src="../blocks/nav/jquery-1.11.2.min.js"></script> 
<style>
	.topnav{
		padding: 10px;
		margin-bottom: 25px;
		box-shadow: 0.8rem 0.8rem 1.4rem #c8d0e7, -0.2rem -0.2rem 1.8rem #fff;
	}
	.topnavsort {
		position: relative;
		overflow: hidden;
		width: 100%;
		white-space: nowrap;
	}
	.topnavsort span {
		vertical-align: middle;
		display: inline;
		margin-left: -4px;
	}
	.topnavsort span a {
		display: inline-block;
		background-color: #e4ebf5;
		box-shadow: 0.3rem 0.3rem 0.6rem #c8d0e7, -0.2rem -0.2rem 0.5rem #ffffff94;
		border-radius: 3px;
		padding: 10px 8px;
		text-align: left;
		border: 0;
		cursor: pointer;
		margin: 5px;
	}
</style>
<script>
	$(function () {
		$(window).load(function () {
			var $gal = $(".topnavsort"),
				galW = $gal.outerWidth(true),
				galSW = $gal[0].scrollWidth,
				wDiff = galSW / galW - 1, // widths difference ratio
				mPadd = 60, // mousemove Padding
				damp = 20, // Mmusemove response softness
				mX = 0, // real mouse position
				mX2 = 0, // modified mouse position
				posX = 0,
				mmAA = galW - mPadd * 2, // the mousemove available area
				mmAAr = galW / mmAA; // get available mousemove didderence ratio
			$gal.mousemove(function (e) {
				mX = e.pageX - $(this).parent().offset().left - this.offsetLeft;
				mX2 = Math.min(Math.max(0, mX - mPadd), mmAA) * mmAAr;
			});
			setInterval(function () {
				posX += (mX2 - posX) / damp; // zeno's paradox equation "catching delay"	
				$gal.scrollLeft(posX * wDiff);
			}, 10);
		});
	});
</script>
<div class="topnav">
	<div class="topnavsort">
		<span><a href="/металлопрокат/арматура/алматы">Арматура</a></span>
		<span><a href="/металлопрокат/балка/алматы">Балка</a></span>
		<span><a href="/металлопрокат/круг/алматы">Круг</a></span>
		<span><a href="/металлопрокат/квадрат/алматы">Квадрат</a></span>
		<span><a href="/металлопрокат/листы/алматы">Листы</a></span>
		<!--span><a href="/металлопрокат/мелющие-тела/алматы">Мелющие тела</a></span-->
		<span><a href="/металлопрокат/полоса/алматы">Полоса</a></span>
		<span><a href="/металлопрокат/катанка/алматы">Катанка</a></span>
		<!--span><a href="/металлопрокат/проволока/алматы">Проволока</a></span-->
		<span><a href="/металлопрокат/трубы/алматы">Трубы</a></span>
		<span><a href="/металлопрокат/уголок/алматы">Уголок</a></span>
		<span><a href="/металлопрокат/швеллер/алматы">Швеллер</a></span>
		<!--span><a href="/металлопрокат/шестигранник/алматы">Шестигранник</a></span-->
	</div>
</div>
