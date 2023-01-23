<div class="container">
  <div class="card">
    <div class="card-header  d-flex justify-content-center">
      <h3><?php echo $viewModel['title']?></h3>
    </div>
    <div class="card-body">
      <img src="../assets/img/post/<?php echo $viewModel['banner']?>" class="img-fluid  mx-auto d-block">
      <p class="card-text"><?php echo $viewModel['content']?></p>
      <div class="card">
        <div class="card-header">
          <h4>Từ khóa:</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">

            <!-- Convert string keywords and tags to array -->
            <?php 
              $keywords = explode( ';', $viewModel['keywords']);
              $tags =  explode(';',$viewModel['tags']);
            ?>
           <?php foreach ($keywords as $item): ?>
              <li># <?php echo $item; ?></li>
        
            <?php endforeach ?>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4>Tags:</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">
             <?php foreach ($tags as $item): ?>
              <li># <?php echo $item; ?></li>
           
            <?php endforeach ?>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="card-footer">
      <p class="text-muted">Đăng ngày: <?php echo $viewModel['timeposted']?> </p>

    </div>
  </div>
</div>

<style type="text/css">
	.img-center {
    width: 70%;
}

</style>
