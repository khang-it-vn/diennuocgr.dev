<?php
	class UserModel extends DbContext{
		public function Login()
		{
			if(isset($_POST['submit']))
			{
				if(strlen($_POST['username']) > 0 && strlen($_POST['password']) > 0)
				{
					$this->query('SELECT * FROM account WHERE username like :username AND password like :password');
					$this->bind(':username',$_POST['username']);
					$this->bind(':password',$_POST['password']);
					$res = $this ->single();
					if($res)
					{
						$_SESSION['is_logged_in'] = true;
						$_SESSION['information'] = array(
							'id'=> $res['id'],
							'username' => $res['username'],
							'password' => $res['password']
						);
						header("Location: ".ROOT_URL.'home/index');
					}
				}
				else
						echo "Bạn cần điền đầy đủ thông tin";
			}

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