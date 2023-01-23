<?php
	class Manage extends Controller{

		public function Index()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

		public function AddPost()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}


		public function GetPosts()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

		public function AddProduct()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

		public function GetProducts()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

		public function GetServices()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

		public function AddService()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

	}
?>