<?php
	class About extends Controller{

		public function Index()
		{
			$viewModel = new AboutModel();

			return $this -> ReturnView($viewModel ->Index(), true);
		}
	}
?>