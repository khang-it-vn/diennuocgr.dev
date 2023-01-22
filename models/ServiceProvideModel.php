<?php

	class ServiceProvideModel extends DbContext{
		public function GetAllServiceProvide()
		{
			$query = "SELECT * FROM serviceprovide";
			$this -> query($query);
			return $this->resultSet();
		}
	}
?>