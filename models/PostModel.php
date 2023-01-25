<?php
	class PostModel extends DbContext{

		public function GetPosts($page)
		{

			$start = $page * 16 ;
			$end = $start + 16;

			$sql = "SELECT * FROM `post` ORDER BY id_post DESC LIMIT :start,:end ;";
			$this -> query($sql);
			$this -> bind(':start', $start);
			$this -> bind(':end', $end);

			return $this -> resultSet();
		}


		public function GetPostsByContent($page, $content)
		{
			$start = $page * 16 ;
			$end = $start + 16;

			$sql = "SELECT * FROM `post` WHERE title like :content OR content like :content ORDER BY id_post DESC LIMIT :start,:end";

			$this -> query($sql);
			$this ->bind(':content',"%$content%");
			$this->bind(':start', $start);
			$this ->bind(':end',$end);

			return $this ->resultSet();

		}

		public function GetDetailPost($id_post)
		{
			$sql = "SELECT * FROM `post` WHERE id_post = :id_post;";

			$this ->query($sql);
			$this -> bind(':id_post', $id_post);
			return $this->single();

		}
	}
?>