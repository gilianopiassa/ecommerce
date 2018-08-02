<?php 
	
	use \Projeto_Ecommerce\Page;
	use \Projeto_Ecommerce\Model\Product;

	$app->get('/', function() {

		$products = Product::listAll();
	    
	    $page = new Page();

	    $page->setTpl("index", [
	    	'products'=>Product::checkList($products)
	    ]);

	});


 ?>