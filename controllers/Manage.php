<?php
	class Manage extends Controller{

		public function Index()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}
	}
?>