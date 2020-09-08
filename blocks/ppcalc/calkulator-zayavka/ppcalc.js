(function($) {
	var hidden_span = $(".field > .field__label1");
	hidden_span.css("display", "none");
	hidden_span.siblings('input').css("display", "none");
	$(".field .button").click(function(){
		$(this).css("display", "none");
		$(this).siblings('input').css("display", "inline-block");
		$(this).siblings('.field__label1').css("display", "inline-block");
	});
})(jQuery);
(function(){
	var parallax = document.querySelectorAll("body"),
		speed = 0.3;
	window.onscroll = function(){
		[].slice.call(parallax).forEach(function(el,i){
			var windowYOffset = window.pageYOffset,
				elBackgrounPos = "40% " + (windowYOffset * speed) + "px";
			el.style.backgroundPosition = elBackgrounPos;
		});
	};
})();
$(window).scroll(function() {
	var scroll = $(window).scrollTop();
	$(".parallax.medium").css("transform","translateY(" +  (scroll/5.8)  + "px)");
});
/*((function($){

	var x , y , z , w;
	var pr_tonn , pr_length , weight , toler , pr_price, pr_meter;

	function X_y () {
		y = (x * weight + (weight * toler)).toFixed(2);
	}
	function X_z(){
		z = (x / pr_length).toFixed(2);
	}
	function X_w() {
		w = (x * pr_meter).toFixed(2);
	}
	
	function Y_x() {
		x = (y / weight).toFixed(2);
	}
	function Y_z() {
		z = (x / pr_length).toFixed(2);
	}
	function Y_w() {
		w = (x * pr_meter).toFixed(2);
	}

	function Z_x() {
		x = (pr_length * z).toFixed(2);
	}
	function Z_y() {
		y = (z * pr_length * weight + (weight * toler)).toFixed(2);
	}
	function Z_w() {
		w = z * (pr_length * pr_meter).toFixed(2);
	}

	function W_x(){
		x = (w / pr_meter).toFixed(2);
	}
	function W_y(){
		y = (weight * (w / pr_meter)).toFixed(2);
	}
	function W_z(){
		z = ((w / pr_meter) / pr_length).toFixed(2);
	}


	function Not_Flat(object)   {
		if ( parseInt(z) != z) {
			object.css('border','solid 1px red');
		}
		else {
			object.css('border','solid 2px Lime');
		}
	}
	function GetNumb(parent) {
		pr_tonn = parent.attr('pr_tonn');
		pr_length = parent.attr('pr_length');
		weight = parent.attr('weight');
		toler = parent.attr('toler');
		pr_price = parent.attr('pr_price');
		pr_meter = pr_price/1000*weight;

	}

	$(document).ready(function(){


		$("body").on('focus' , "#x" , function() {
			$(this).keyup(function() {
				GetNumb($(this).parent());
				x = $(this).val();
				x = parseFloat(x.replace(/,/, '.'));
				X_y();
				X_z();
				X_w();
				$(this).parent().children('#y').val(y);
				$(this).parent().children('#z').val(z);
				$(this).parent().children('#w').val(w);
				Not_Flat($(this).parent().children('#z'));

				if ($(this).val() == "") {
					$(this).siblings("#y").val("");
					$(this).siblings("#z").val("");
					$(this).siblings("#w").val("");
				};
			});
		});
		$("body").on('focus' , "#y" , function() {
			$(this).keyup(function() {
				GetNumb($(this).parent());
				y = $(this).val();
				y = parseFloat(y.replace(/,/, '.'));
				Y_x();
				Y_z();
				Y_w();
				$(this).parent().children('#x').val(x);
				$(this).parent().children('#z').val(z);
				$(this).parent().children('#w').val(w);
				Not_Flat($(this).parent().children('#z'));

				if ($(this).val() == "") {
					$(this).siblings("#x").val("");
					$(this).siblings("#z").val("");
					$(this).siblings("#w").val("");
				};

			});
		});
		$("body").on('focus' , "#z" , function() {
			$(this).keyup(function() {
				GetNumb($(this).parent());
				z = $(this).val();
				z = parseFloat(z.replace(/,/, '.'));
				Z_x();
				Z_y();
				Z_w();
				$(this).parent().children('#x').val(x);
				$(this).parent().children('#y').val(y);
				$(this).parent().children('#w').val(w);
				Not_Flat($(this).parent().children('#z'));


				if ($(this).val() == "") {
					$(this).siblings("#x").val("");
					$(this).siblings("#y").val("");
					$(this).siblings("#w").val("");
				};

			});
		});
		$("body").on('focus' , "#w" , function() {
			$(this).keyup(function() {
				GetNumb($(this).parent());
				w = $(this).val();
				w = parseFloat(w.replace(/,/, '.'));
				W_x();
				W_y();
				W_z();
				$(this).parent().children('#x').val(x);
				$(this).parent().children('#y').val(y);
				$(this).parent().children('#z').val(z);
				Not_Flat($(this).parent().children('#z'));

				if ($(this).val() == "") {
					$(this).siblings("#x").val("");
					$(this).siblings("#y").val("");
					$(this).siblings("#z").val("");
				};
			});
		});
	});
})(jQuery)*/




