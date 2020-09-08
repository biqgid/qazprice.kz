<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script> 
<style>
	.topnav{
		padding: 10px;
		margin-bottom: 25px;
		box-shadow: 0.8rem 0.8rem 1.4rem #c8d0e7, -0.2rem -0.2rem 1.8rem #fff;
	}
	.ppsort {
		position: relative;
		overflow: hidden;
		width: 100%;
		white-space: nowrap;
	}
	.ppsort span {
		vertical-align: middle;
		display: inline;
		margin-left: -4px;
	}
	.ppsort span {
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
			var $gal = $(".ppsort"),
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
	<div class="ppsort">
		<span><a href="/металлопрокат/алматы">Металлопрокат</a></span>

	</div>
</div>
