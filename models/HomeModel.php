<?php
	class HomeModel extends DbContext{
		public function Index()
		{
			$sql = 'SELECT * FROM `information` WHERE id_info = 1;';
			$this->query($sql);
			$information = $this->single();
			$_SESSION['about'] = array(
				'linkVideoIntroduce' => $information['linkVideoIntroduce'],
				'linkFb' => $information['linkFb'],
				'linkYoutube' => $information['linkYoutube'],
				'zalo' => $information['zalo'],
				'email' => $information['email'],
				'address' => $information['address'],
				'fullname' => $information['fullname'],
				'avatar' => $information['avatar'],
				'major' => $information['major'],
				'Numberphone' => $information['Numberphone']
			);

			$this -> query("Select * from account");
			$rows = $this -> resultSet();
			// print_r($rows);
			return $rows;
			
		}
		public function Add()
		{
			if(isset($_POST['submit']))
			{
				echo "Thực hiện add";
				$this -> query("INSERT INTO account (id,username,password) VALUES (:id,:username,:password)");
				$this -> bind(':id',$_POST['id']);
				$this -> bind(':username',$_POST['username']);
				echo $_POST['username'] . ','.$_POST['password'];
				$this -> bind(':password',$_POST['password']);
				$res = $this -> execute();
				echo var_dump($res);
				if(strcmp ($res,'00000') == 0)
				{
					header("Location: ".ROOT_URL);	
				}
				

			}
			return;
		}
	}
?>