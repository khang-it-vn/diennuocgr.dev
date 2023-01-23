<?php 
	class User extends Controller{

		protected function Index()
		{
			$viewModel = new UserModel();
			return $this->ReturnView($viewModel ->Index(), true);
		}

		protected function Login()
		{
			$viewModel = new UserModel();
			return $this -> ReturnView($viewModel ->Login(), true);
		}

		protected function Register()
		{
			$viewModel = new UserModel();
			return $this -> ReturnView($viewModel->Register(), true);
		}
		protected function Logout()
		{
			unset($_SESSION['is_logged_in']);

			unset($_SESSION['information']);

			session_destroy();

			header("Location: ".ROOT_URL.'/user/register');
		}
	}
?>