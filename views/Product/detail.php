<div class="container my-5">
    <div class="container d-flex flex-column align-items-center my-5">
        <h1 class="product-title font-weight-bold text-center"><?php echo $viewModel['name']?></h1>
         <img src="../assets/img/products/<?php echo $viewModel['imagePath']?>" alt="Product Name" class="img-fluid mb-3">
    
         <button class="btn btn-primary text-center my-3"><a href="tel:<?php echo NUMBERPHONE?>" style="color: white">Liên hệ đặt hàng (Lẻ hoặc số lượng lớn)</a></button>
    </div>
    <hr class="my-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="header-title font-weight-bold text-center">Thông tin sản phẩm</h2>
            <div class="product-content my-5">
                <p class="text-justify"><?php echo $viewModel['description']?></p>
            </div>
        </div>
    </div>
</div>
