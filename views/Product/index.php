<script type="text/javascript">
  let pageCurrent = 1;
 </script>
<div class="album py-5 bg-light">
  <div class="footer-newsletter mb-3 mt-0">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroup-sizing-sm">Nhập tên sản phẩm cần tìm</span>
                </div>
                <input type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" id="nameProduct"  >
                 <div class="input-group-append">
                   <button class="btn btn-outline-secondary" type="button" id="btn-find-product">Tìm kiếm</button>
                </div>
            </div>
            </form>
          </div>
        </div>
      </div>
    </div>
     <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="products">
<?php foreach ($viewModel as $item):?>
        <div class="col">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../assets/img/products/pathImageDemo.jpg" alt="Product Demo Image">
            <div class="card-body">
              <p class="card-text"><?php echo $item['name'];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <label><i class="bi bi-eye"></i><?php echo $item['views'] ;?></label>
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="<?php echo ROOT_URL . 'Product/Detail?id_product=' . $item['id_product'];?>">Xem chi tiết</a></button>
                   <button type="button" class="btn btn-sm btn-outline-secondary"><a href="tel:<?php echo NUMBERPHONE?>">Liên hệ đặt hàng</a></button>
                </div>
              </div>
            </div>
          </div>
        </div>       
  <?php endforeach;?>
  </div>
  <div class="d-flex justify-content-center w-100">
  <a href="" id="viewMore" style="display: true;"> Xem thêm >> </a>
   </div>
   </div>
  </div>

  <script type="text/javascript">
    var nameProduct = "";

    // Get product by name
    $('#btn-find-product').on('click',function (e){
      if(nameProduct.length <= 0)
      {
        alert('Bạn cần điền tên sản phẩm cần tìm');
        return;
      }
      let btnViewMore = document.getElementById('viewMore');
      btnViewMore.style.display = "none";
      $.ajax({
          url:'<?php echo  ROOT_URL?>Product/GetProductWithName',
          type:'POST',
          data:{name:nameProduct},
          success: function(data)
          {
            $('#products').html(data);
          }
        });
    });
    
    $('#nameProduct').on('blur',function(e){
      if(nameProduct.length <= 0)
      {
         getProductWithOutName();
          let btnViewMore = document.getElementById('viewMore');
          btnViewMore.style.display = "block";
      }
    })

    const elementNameProduct = document.getElementById('nameProduct');

    const onChangeNameProduct = function (evt)
    {
        nameProduct = evt.target.value;

    }
    elementNameProduct.addEventListener('input',onChangeNameProduct);


  $('#viewMore').on('click', function(e){
    e.preventDefault();
      getProductWithOutName();
 
    });

  function getProductWithOutName()
  {
    if(nameProduct.length <= 0)
    {
      $.ajax({
      url: '<?php echo ROOT_URL ?>Product/GetProductsWithOutName',
      type: 'POST',
      data:{page: pageCurrent},
      success: function (data){
                $("#products").append(data);
                  pageCurrent++;
        } 
      })
    }
  }
  
</script>