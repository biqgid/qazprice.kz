<?php

	require '../bootstrap.php';

	if (isset($_GET['position_update'])) {

		$data = $_GET;

		$name = $data['table_name'];

		print_r($data);

		$table = R::findOne($data['parent_table'], 'id = ?', [$data['table_id']]);

		$table->$name = $data['value'];

		if ($name === 'price_tonn') {
			$table->$name = $data['value'];
			$table->price_meter = $data['price_meter'];
		}else {
			$table->$name = $data['value'];
		}

		R::store($table);
	};



	if (isset($_GET['send_submit'])) {

		$data = $_GET;

		print_r($data);


		$product = R::dispense($data['table_name']);

        $product->diameter = $data['diameter'];
        $product->weight = $data['weight'];
        $product->length = $data['length'];
        $product->price_meter = $data['price_meter'];
        $product->price_tonn = $data['price_tonn'];
        $product->production = $data['production'];
        $product->weight_piece = $data['weight_piece'];
        $product->product_id = $data['product_id'];

        R::store($product);


	};



	if (isset($_GET['delete_product'])) {

		$data = $_GET;

		$product = R::load($data['parent_table'], $data['product_id']);

		R::trash($product);

	};

	if (isset($_POST['load_file'])) {

		$backurl = 'index.php';

	    if(count($_FILES)){

	    	$files = glob('../php/file-price/*'); // get all file names
			foreach($files as $file){ // iterate files
			  if(is_file($file))
			    unlink($file); // delete file
			}

	    	

	    	$filename = $_FILES['filename']['tmp_name'];

	    	$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); 

			$upload_name = $_SERVER["DOCUMENT_ROOT"]."/php/file-price/".basename($_FILES['filename']['name']);

			if(move_uploaded_file($_FILES['filename']['tmp_name'], $upload_name)) {
				print "<script language='Javascript'><!-- 
						function reload() {location = \"$backurl\"}; setTimeout('reload()', 6000); 
						//--></script> 
						<p>Файл успешно загружен!</p>"; 
			}
			else 
				echo "Ошибка загрузки файла.n";
		}
	}


?>