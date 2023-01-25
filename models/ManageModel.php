<?php
	class ManageModel extends DbContext{

		public function Index(){
			
		}

		public function AddPost($value='')
		{
				if(isset($_POST['submit']))
				{
					$title = $_POST['title'];			
					$content = $_POST['content'];	
					$banner = $_FILES['banner'];				
					$keywords = $_POST['keywords'];
					$tags = $_POST['tags'];

					if(strlen($title) <= 0 || strlen($content) <= 0 || $banner == null || strlen($keywords) <= 0 || strlen($tags) <= 0)
					{
						return;
					}

					if($_FILES['banner']['error']> 0){
					   echo "Error: ".$_FILES['banner']['error']."<br>";
					}

					$filename = '';
					if(isset($_FILES['banner']) && $_FILES['banner']['error'] == 0){
					    $temp_file = $_FILES['banner']['tmp_name'];

					    $filename = $_FILES['banner']['name'];
					    $file_type = $_FILES['banner']['type'];
					    $file_size = $_FILES['banner']['size'];
					    $ext = pathinfo($filename, PATHINFO_EXTENSION);
					    $new_file = "assets/img/post/".$filename;
					    if(move_uploaded_file($temp_file, $new_file)){
					        
					    } else {
					        echo "Error uploading file";
					    }
					}

					$sql = "INSERT INTO post( title, content, timeposted, views, banner, keywords, tags)
				 		VALUES (:title,:content,:timeposted,:views,:banner,:keywords,:tags);";

				 	$this ->query($sql);
				 	$this ->bind(':title', $title);
				 	$this ->bind(':content', $content);
					$this ->bind(':timeposted', date("Y-m-d H:i:s"));
				 	$this ->bind(':views', 0);
				 	$this ->bind(':banner',$filename);
				 	$this ->bind(':keywords', $keywords);
				 	$this ->bind(':tags', $tags);

				 	$result = $this ->execute();
				 	return $result;

			}
		}

		public function GetPosts($page)
		{
			$start = $page * 8 + 1;
			$end = $start + 8;
			$sql = "SELECT * FROM post LIMIT :start, :end; ";

			$this ->query($sql);
			$this ->bind(':start', $start);
			$this ->bind(':end',$end);

			return $this->resultSet();
		}

		public function DeletePost($id_post)
		{
			$sql = "DELETE FROM `post` WHERE id_post = :idpost;";

			$this ->query($sql);
			$this ->bind(':idpost', $id_post);
			return $this->execute();
		}

		public function GetProducts($page)
		{
			$start = $page * 10;
			$end = $start + 10;
			$query= "SELECT * FROM product LIMIT :start, :end";
			$this->query($query);

			$this->bind(':start',$start);
			$this->bind(':end',$end);
			$result = $this->resultSet();
			return $result;
		}

		public function DeleteProduct($id_product)
		{
			$sql = "DELETE FROM `product` WHERE id_product = :idproduct;";

			$this ->query($sql);
			$this ->bind(':idproduct', $id_product);
			return $this->execute();
		}


		public function AddProduct()
		{
			if(isset($_POST['submit']))
			{
				$nameProduct = $_POST['name'];
				$description =$_POST['content'];
				if($_FILES['imagePath']['error']> 0){
					   echo "Error: ".$_FILES['banner']['error']."<br>";
					}

				$filename = '';
				if(isset($_FILES['imagePath']) && $_FILES['imagePath']['error'] == 0){
				    $temp_file = $_FILES['imagePath']['tmp_name'];

				    $filename = $_FILES['imagePath']['name'];
				    $file_type = $_FILES['imagePath']['type'];
				    $file_size = $_FILES['imagePath']['size'];
				    $ext = pathinfo($filename, PATHINFO_EXTENSION);
				    $new_file = "assets/img/products/".$filename;
				    if(move_uploaded_file($temp_file, $new_file)){
				        
				    } else {
				        echo "Error uploading file";
				    }
				}

				$sql = "INSERT INTO product( name, description, imagePath, views) VALUES (:name,:description,:filename,:view);";
				$this->query($sql);
				$this->bind(':name', $nameProduct);
				$this->bind(':description',$description);
				$this->bind(':filename', $filename);
				$this->bind(':view', 100);
				return $this->execute();

			}
		}


		public function GetServices()
		{
			$query = "SELECT * FROM serviceprovide";

			$this->query($query);

			return $this->resultSet();
		}

		public function DeleteServiceProvide($id_service)
		{
			$sql = "DELETE FROM serviceprovide WHERE id_service = :id_service";

			$this->query($sql);
			$this->bind(':id_service', $id_service);

			return $this->execute();
		}


		public function AddService()
		{
			if(isset($_POST['submit']))
			{
				$nameService = $_POST['nameService'];

				$description = $_POST['content'];

				$sql ='INSERT INTO serviceprovide(name, description, totalProvide) VALUES (:name, :description, :totalProvide)';
				$this->query($sql);
				$this->bind(':name',$nameService);
				$this->bind(':description',$description);
				$this->bind(':totalProvide',100);

				return $this->execute();
			}
		}


		public function Information()
		{
			
		}
	}
?>