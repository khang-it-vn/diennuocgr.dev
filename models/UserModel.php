<?php
	class UserModel extends DbContext{

		public function Index()
		{
			
			if(isset($_POST['submit']))
			{
				if(strlen($_POST['email']) > 0 && strlen($_POST['password']) > 0)
				{
					echo $_POST['email'];
					$this->query("call login(:email,:password)");
					$this->bind(':email',$_POST['email']);
					$this->bind(':password',$_POST['password']);
					$res = $this ->resultSet();
					
					
					if($res)
					{
						$_SESSION['is_logged_in'] = true;
						$_SESSION['information'] = array(
							'id_account'=> $res[0]['id_account'],
							'email' => $res[0]['email'],
							'password' => $res[0]['PASSWORD']
						);
						header("Location: ".ROOT_URL.'manage/index');
					}
					else
					{
						echo '<div class="d-flex justify-content-center mt-4" style="font-style:italic; color:red">Sai thông tin tài khoản</div>';
					}
				}
				else
						echo "Bạn cần điền đầy đủ thông tin";
			}
		}


		public function Login()
		{
			

		}

		public function Register()
		{
			if(isset($_POST['submit']))
			{
				if(strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0)
				{
					$this ->query("INSERT INTO account (id,username,password) VALUES (:id,:username,:password)");
					$this ->bind(':id',33);
					$this ->bind(':username',$_POST['username']);
					$this ->bind(':password',md5($_POST['password']));

					$res = $this ->execute();
					if(strcmp($res,'00000') == 0)
					{
						echo 'Đăng ký thành công';
					}
					else
					{
						echo 'Đăng ký thất bại';
					}
				}
				else
				{
					echo "Username và mật khẩu không được để trống";
				}
			}
		}

		


	}

?>