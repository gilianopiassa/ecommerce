<?php 
	
	use \Projeto_Ecommerce\Page;

	$app->get('/', function() {
	    
	    $page = new Page();

	    $page->setTpl("index");

	});


 ?>