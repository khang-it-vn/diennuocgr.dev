<?php 
	class Post extends Controller{

		public function Index()
		{
			$viewModel = new PostModel();

			$this->ReturnView($viewModel -> GetPosts(0), true);
		}
		public function GetMorePost()
		{
			$page = $_POST['page'];

			$viewModel = new PostModel();

			$result = $viewModel ->GetPosts($page);

			$out = '';

			foreach ($result as $item) {
			 	
			 	$out .= ' <div class="col-md-6 mt-4 custom-element ">
      <div class="row no-gutters">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
          <img src="../assets/img/products/'.$item['banner'].'" class="card-img small-img" alt="Image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">'. $item['title'].'</h5>
            <p class="card-text">'.substr($item['content'],0,200) .'...</p>
             <a href='. "'".ROOT_URL .'Post/Detail?id_post='.$item['id_post'] ."'".' class="btn btn-primary">Đọc thêm</a>
          </div>
        </div>
      </div>
    </div>' ;
			 } 

			 echo $out;

		}

		public function GetPostByContent()
		{
					$contentSearch = $_POST['content'];
					$page = $_POST['page'];

					$viewModel = new PostModel();

					$result = $viewModel -> GetPostsByContent($page, $contentSearch);
					
					$out = '';

					foreach ($result as $item) {
			 	
			 	$out .= ' <div class="col-md-6 mt-4 custom-element ">
			      <div class="row no-gutters">
			        <div class="col-md-4 d-flex align-items-center justify-content-center">
			          <img src="../assets/img/products/'.$item['banner'].'" class="card-img small-img" alt="Image">
			        </div>
			        <div class="col-md-8">
			          <div class="card-body">
			            <h5 class="card-title">'. $item['title'].'</h5>
			            <p class="card-text">'.substr($item['content'],0,200) .'...</p>
			           <a href='. "'".ROOT_URL .'Post/Detail?id_post='.$item['id_post'] ."'".' class="btn btn-primary">Đọc thêm</a>
			          </div>
			        </div>
			      </div>
			    </div>' ;
						 } 

						 if($result == null)
						 {
						 	$out .= "<div class='d-flex justify-content-center w-100 mt-4' style='color: red; font-style:italic' > Đã tìm hết dữ liệu</div>";
						 }
						 echo $out;
		}


		public function Detail()
		{
			// get uri 
			$part  = explode('?', $_SERVER['REQUEST_URI'] );
			// init array 
			$params = array();
			// convert key and value from uri
			parse_str($part[1], $params);

			$id_post = isset($params['id_post']) ? $params['id_post'] : UNDEFINEDPARAM;

			if($id_post == UNDEFINEDPARAM)
			{
				echo '<p> Undefined Method</p>';
				return;
			}

			$viewModel = new PostModel();

			return $this ->ReturnView($viewModel -> GetDetailPost($id_post), true);
			
		}
	}
?>