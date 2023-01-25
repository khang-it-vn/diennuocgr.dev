<?php
	class Manage extends Controller{

		public function Index()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->Index(), true);
		}

		public function AddPost()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->AddPost(), true);
		}


		public function GetPosts()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->GetPosts(0), true);
		}

		public function GetMorePost()
		{
			$page = isset($_POST['page']) ? $_POST['page'] : 0;
			$viewModel = new ManageModel();

			$result = $viewModel ->GetPosts($page);

			$out = '';

			if($result == null)
			{
				echo "<div class='d-flex justify-content-center' style='font-style:italic; color: red'>Đã hết</div>";
			}
			foreach ($result as $item) {
				$out .= '<div class="row" id="row'.$item['id_post'].'">
					    <div class="card shadow mb-4">
					      <div class="card-header py-3">
					        <h6 class="m-0 font-weight-bold text-primary">id_post-'.$item['id_post'] .': '. $item['title'].'</h6>
					      </div>
					     <div class="card-body">
							  <div class="row">
							    <div class="col-md-3">
							      <img src="../assets/img/post/'.$item['banner'].'" alt="your-image-banner" class="img-fluid">
							    </div>
							    <div class="col-md-9">
							      '.substr($item['content'], 0,992) . '...
							    </div>
							    <div class="col-md-12 text-right mt-3">
							    	<label class="mr-2"><i class="bi bi-eye"></i>'. $item['views'] .'</label>
							      <button class="btn btn-danger mr-2" onclick="DeletePost('.$item['id_post'].')"">Delete</button>
							      <button class="btn btn-primary">Modify</button>
							    </div>
							  </div>
							</div>
					    </div>
					  </div>';
			}
			echo $out;

		}

		public function DeletePost()
		{
			$id_post = isset($_POST['idPost']) ? $_POST['idPost'] : UNDEFINEDPARAM;

			if($id_post == UNDEFINEDPARAM)
			{
				echo 'error';
				return;
			}
			$viewModel = new ManageModel();

			$result = $viewModel -> DeletePost($id_post);

			if(strcmp($result,'00000') == 0)
			{
				echo 'delete success hehe ';
				return;
			}
			echo 'error delete';
		}

		public function AddProduct()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->AddProduct(), true);
		}

		public function GetProducts()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->GetProducts(0), true);
		}

		public function GetMoreProduct()
		{
			$page = isset($_POST['page']) ? $_POST['page'] : 0;

			$viewModel = new ManageModel();

			$result = $viewModel -> GetProducts($page);

			$out = '';

			foreach ($result as $item) {
				$out .= ' <div class="col" id="product-'.$item['id_product'].'">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../assets/img/products/'.$item['imagePath'].'" alt="Product Demo Image">
            <div class="card-body">
              <p class="card-text">'. $item['name'].'</p>
              <div class="d-flex justify-content-between align-items-center">
                <label><i class="bi bi-eye"></i>'.$item['views'].'</label>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger " onclick="DeleteProduct('.$item['id_product'].')">Xóa</button>
                </div>
              </div>
            </div>
          </div>
        </div> ';
			}

			echo $out;

		}

		public function DeleteProduct()
		{
			$id_product = isset($_POST['id_product']) ? $_POST['id_product'] : UNDEFINEDPARAM;
			if($id_product == UNDEFINEDPARAM)
			{
				return;
			}

			$viewModel = new ManageModel();
			$result = $viewModel ->DeleteProduct($id_product);
			if(strcmp($result,'00000') == 0)
			{
				echo 'delete success hehe ';
				return;
			}
			echo 'error delete';
		}


		public function GetServices()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->GetServices(), true);
		}

		public function AddService()
		{
			$viewModel = new ManageModel();

			return $this ->ReturnView($viewModel ->AddService(), true);
		}

		public function DeleteServiceProvide()
		{
			$id_service = isset($_POST['id_service']) ? $_POST['id_service'] : UNDEFINEDPARAM;

			if($id_service == UNDEFINEDPARAM)
			{
				return;
			}

			$viewModel = new ManageModel();

			$result = $viewModel ->DeleteServiceProvide($id_service);

			if(strcmp($result,'00000') == 0)
			{
				echo 'delete service provide success';
				return;
			}
			echo 'error delete' + $result;
		}

		public function Information()
		{
			 $viewModel = new ManageModel();

			 return $this->ReturnView($viewModel ->Index(),true);
		}

	}
?>