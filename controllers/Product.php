<?php 
	class Product extends Controller{
		public function Index()
		{
			$viewModel = new ProductModel();
			$this -> ReturnView($viewModel -> GetProducts(), true);
		}
	}
?>