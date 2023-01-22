<?php 
	class Product extends Controller{
		// Mặc định lấy 16 thằng đầu tiên 
		public function Index()
		{
			$viewModel = new ProductModel();
			$this -> ReturnView($viewModel -> GetProducts(), true);
		}


		// Mỗi lần lấy 16 sản phẩm
		public function GetProductsWithOutName()
		{
			$start =  $_POST['page'] * 16 + 1;
			$end = $start + 16;
			
			$viewModel = new ProductModel();
			$result = $viewModel -> GetProductsWithOutName($start, $end);
			$out = "";
			foreach ($result as $item) {
				$out .= '<div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="http://localhost/diennuocgr.dev/assets/img/products/pathImageDemo.jpg" alt="Italian Trulli">
            <div class="card-body">
              <p class="card-text">'.$item['name'] . $item['id_product'].'</p>
              <div class="d-flex justify-content-between align-items-center">
                <label><i class="bi bi-eye"></i>'.$item['views'].'</label>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="#">Xem chi tiết</a></button>
                   <button type="button" class="btn btn-sm btn-outline-secondary"><a href="tel:+84987546775">Liên hệ đặt hàng</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>';
			}
			echo $out;

		}

		// Lấy sản phẩm theo tên 
		public function GetProductWithName()
		{
			$name = $_POST['name'];

			$viewModel = new ProductModel();

			$result = $viewModel -> GetProductsWithName($name);

			$out = "";
			foreach ($result as $item) {
				$out .= '<div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="http://localhost/diennuocgr.dev/assets/img/products/pathImageDemo.jpg" alt="Italian Trulli">
            <div class="card-body">
              <p class="card-text">'.$item['name'] . $item['id_product'].'</p>
              <div class="d-flex justify-content-between align-items-center">
                <label><i class="bi bi-eye"></i>'.$item['views'].'</label>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="'.  ROOT_URL . 'Product/Detail?id_product=' . $item['id_product'].'">Xem chi tiết</a></button>
                   <button type="button" class="btn btn-sm btn-outline-secondary"><a href="tel:'. NUMBERPHONE.'">Liên hệ đặt hàng</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>';
			}
			echo $out;

		}

		public function Detail()
		{
			$viewModel = new ProductModel();
			// get uri 
			$part  = explode('?', $_SERVER['REQUEST_URI'] );
			// init array 
			$params = array();
			// convert key and value from uri
			parse_str($part[1], $params);
			// return data to view

			$id_product = isset($params['id_product']) ? $params['id_product'] : UNDEFINEDPARAM ;
			return $this -> ReturnView($viewModel ->Detail($id_product), true);
		}
	}
?>