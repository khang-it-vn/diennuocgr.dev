<div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3" id="products">
<?php foreach ($viewModel as $item):?>
        <div class="col" id="product-<?php echo $item['id_product']?>">
          <div class="card shadow-sm">
            <img class="bd-placeholder-img card-img-top" width="100%" height="225" src="../assets/img/products/<?php echo $item['imagePath']?>" alt="Product Demo Image">
            <div class="card-body">
              <p class="card-text"><?php echo $item['name'];?></p>
              <div class="d-flex justify-content-between align-items-center">
                <label><i class="bi bi-eye"></i><?php echo $item['views'] ;?></label>
                <div class="btn-group">
                  <button type="button" class="btn btn-danger " onclick="DeleteProduct(<?php echo $item['id_product']?>)">Xóa</button>
                </div>
              </div>
            </div>
          </div>
        </div>       
  <?php endforeach;?>
  </div>
  <div class="d-flex justify-content-center" id="viewMore" style="color: blue"> Xem thêm >>  </div>
  <script type="text/javascript">
    let pageCurrent = 1;

    $('#viewMore').on('click', function(e){
      e.preventDefault();
      $.ajax({
        url: '<?php echo ROOT_URL .'/manage/GetMoreProduct'?>',
        type:'POST',
        data:{page: pageCurrent},
        success: function(data){
          $('#products').append(data);
          pageCurrent++;
        }
      })
    });

    function DeleteProduct(idProduct) {
      console.log(idProduct);
     $('#product-'+idProduct).remove();
     $.ajax({
      url:'<?php echo ROOT_URL .'manage/DeleteProduct'?>',
      type: 'post',
      data: {id_product: idProduct},
      success: function(data){
        console.log(data);
      }
    })
    }
  </script>
  <style type="text/css">

    #viewMore:hover{
      cursor: pointer;
    }
   </style>