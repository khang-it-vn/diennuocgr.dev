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
          <h4>Keywords:</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">
            <li>Keyword 1</li>
            <li>Keyword 2</li>
            <li>Keyword 3</li>
            <li>Keyword 4</li>
          </ul>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h4>Tags:</h4>
        </div>
        <div class="card-body">
          <ul class="list-unstyled">
            <li>Tag 1</li>
            <li>Tag 2</li>
            <li>Tag 3</li>
            <li>Tag 4</li>
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
