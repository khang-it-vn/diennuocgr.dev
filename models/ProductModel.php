<?php
	class ProductModel extends DbContext{
		public function GetProducts()
		{
			$query= "SELECT * FROM product WHERE id_product >= :start && id_product <= :end";
			$this->query($query);

			$this->bind(':start',0);
			$this->bind(':end',12);
			$result = $this->resultSet();
			return $result;
		}

		public function GetProductsWithOutName($start, $end)
		{
			$query= "SELECT * FROM product WHERE id_product >= :start && id_product <= :end";
			$this->query($query);

			$this->bind(':start',$start);
			$this->bind(':end',$end);
			$result = $this->resultSet();
			return $result;
		}
	}
?>