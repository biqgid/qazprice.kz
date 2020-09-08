(function($) {
	
/*    var doc = new jsPDF();
	var specialElementHandlers = {
	    '#editor': function (element, renderer) {
	        return true;
	    }
	};

	$('#cmd').click(function () {
	    doc.fromHTML($('#content').html(), 15, 15, {
	        'width': 170,
	            'elementHandlers': specialElementHandlers
	    });
	    doc.save('sample-file.pdf');
	});*/


	function Create(value) {
		return '<input class="edit" type="text" placeholder="'+ value +'">';
	}



	$(document).ready(function() {

	    $("#btn2").click(function () {
	        $("#myModal2").modal('show');
	    });

$("td").click(function() {
			var value = $(this).text();
			if ($(this).attr("class") === "update") {
				$(this).removeAttr('class');
				$(this).html(Create(value));

				var meter_price = $(this).siblings("td:eq(3)");
				var attribute = $(this).attr('data-name');

				console.log(attribute);

				$(this).children().on("blur", function() {

					value = $(this).val();
					var weight = $(this).parent().siblings("td:eq(1)").text();
					var price_meter;
						
					weight = parseFloat(weight.replace(/,/, '.'));
					value = parseFloat(value.replace(/,/, '.'));

					if(attribute === 'price_tonn') {
						price_meter = (weight * value / 1000 + 2).toFixed(1);	
						meter_price.text(price_meter);
					}else if (attribute === 'price_meter') {
						price_meter = (weight * value / 1000 + 2).toFixed(1);	
						meter_price.text(price_meter);
					}
					
					var parent_table = $(this).parents('table').attr("parent-table");
					var id =  $(this).parents('tr').attr("data-id");
					var table_name = $(this).parent().attr("data-name");

					if ($(this).val() !== '') {
						$.ajax({
						  	type: 'get',
						  	url: './function.php',
						  	data: {
						  		position_update : 'update', 
						  		parent_table : parent_table, 
						  		table_id : id, 
						  		table_name : table_name, 
						  		value : value,
						  		price_meter : price_meter,
						  	},
						});
					};

					$(this).parent().attr("class", "update");
					$(this).parent().text(value);
					$(this).remove();

				});

			}else {
				return;
			}
		});


		$("#send-data").click(function(e) {

			var table_name  = $('select[name="product_id"] :selected').attr("table-name");

			$.ajax({
			  	type: 'get',
			  	url: './function.php',
			  	data: {
			  		table_name : table_name, 
			  		send_submit : 'submit',
			  		diameter : $('input[name="diameter"]').val(),
			  		weight : $('input[name="weight"]').val(),
			  		length : $('input[name="length"]').val(),
			  		price_meter : $('input[name="price_meter"]').val(),
			  		price_tonn : $('input[name="price_tonn"]').val(),
			  		production : $('input[name="production"]').val(),
			  		weight_piece : $('input[name="weight_piece"]').val(),
			  		product_id : $('select[name="product_id"]').val(),
			  	}
			});

			setTimeout(function() {
				window.location.reload();
			}, 1000);

			e.preventDefault();

		});



		$('.product_tr').click(function(){

		    if (this.offsetWidth - event.offsetX < 0 + 30) {

				var parent_table = $(this).parents('table').attr("parent-table");
				var id =  $(this).attr("data-id");

				$.ajax({
				  	type: 'get',
				  	url: './function.php',
				  	data: {
				  		delete_product : 'delete', 
				  		parent_table : parent_table, 
				  		product_id : id,
				  	},
				});

				$(this).remove();

		    }

		});

		/*$('.product_tr').append('<span>x</span>');*/

			






	});

})(jQuery);