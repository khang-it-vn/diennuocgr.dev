<?php 

	class ServiceProvide extends Controller{

		public function Index()
		{	
			$viewModel = new ServiceProvideModel();
			return $this -> ReturnView($viewModel -> GetAllServiceProvide(), true);
		}
	}


?>