<?php
	class ProductModel extends DbContext{
		public function GetProducts()
		{
			$query= "SELECT * FROM product WHERE id_product >= :start && id_product <= :end";
			$this->query($query);

			$this->bind(':start',0);
			$this->bind(':end',16);
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

		// Chat GPT METHOD 1
		public function GetProductsWithName($name)
		{
			$sql = "SELECT * FROM product WHERE name like '%$name%'";
			$this -> query($sql);
	        $this -> bind(':name',$name);
	       

	        return $this -> resultSet();
		}

		// Chat GPT METHOD 2
		//  public function GetProductsWithName($name)
    	// {
	    //     $sql = "SELECT * FROM product WHERE name like :name";
	    //     $stmt = $this->db->prepare($sql);
	    //     $stmt->bindValue(':name', '%'.$name.'%', PDO::PARAM_STR);
	    //     $stmt->execute();
	    //     $result = $stmt->fetchAll();
	    //     return $result;
   		//  }


   		// detail product
   		public function Detail($id_product)
   		{
   			if($id_product == UNDEFINEDPARAM)
   			{
   				return null;
   			}

   			$sql = "SELECT * FROM product WHERE id_product = :id_product;";

   			$this ->query($sql);
   			$this ->bind(":id_product", $id_product);

   			$result = $this -> single();
   			$this -> updateViewToProduct($result['id_product'], ++$result['views']);

   			return $result;
   		}

   		//update view product
   		public function updateViewToProduct($id_product, $views)
   		{
   			$sql = "UPDATE product SET views = :views WHERE id_product = :id_product;";

   			$this->query($sql);

   			$this->bind(":views",$views);
   			$this ->bind(":id_product",$id_product);
   			$this ->execute();
   		}
	}
?>