<?php
	class HomeModel extends DbContext{
		public function Index()
		{
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