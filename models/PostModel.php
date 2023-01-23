<?php
	class PostModel extends DbContext{

		public function GetPosts($page)
		{

			$start = $page * 16 + 1;
			$end = $start + 16;

			$sql = "SELECT * FROM `post` WHERE id_post >= :start and id_post <= :end;";
			$this -> query($sql);
			$this -> bind(':start', $start);
			$this -> bind(':end', $end);

			return $this -> resultSet();
		}


		public function GetPostsByContent($page, $content)
		{
			$start = $page * 16 + 1;
			$end = $start + 16;

			$sql = "SELECT * FROM `post` WHERE title like :content OR content like :content LIMIT :start,:end";

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