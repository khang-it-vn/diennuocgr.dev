<div class="container my-4">
  <div class="row">
    <div class="col-3">
     
    </div>
    <div class="col-6">
      <div class="input-group mb-3">
        <input type="text" id="content-search" class="form-control" placeholder="Nhập nội dung bạn muốn tìm kiếm">
        <div class="input-group-append">
          <button class="btn btn-outline-primary" id="search-button">Tìm kiếm</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="card mb-3">
  <div class="row no-gutters custom-row" id='posts-content'>
    
  	<?php foreach($viewModel as $item):?>
    <div class="col-md-6 mt-4 custom-element ">
      <div class="row no-gutters">
        <div class="col-md-4 d-flex align-items-center justify-content-center">
          <img src="../assets/img/products/<?php echo $item['banner']?>" class="card-img small-img" alt="Image">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title"><?php echo $item['title']?></h5>
            <p class="card-text"><?php echo substr($item['content'],0,200) .'...' ?></p>
            <a href="#" class="btn btn-primary">Đọc thêm</a>
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

<style type="text/css">
	
.small-img {
  width: 200px;
  height: 200px;
}
.custom-row {
  margin: 40px;
}
.custom-element {
  background-color: #f5f5f5;
}
</style>

<script type="text/javascript">
	let pageCurrent=1;

  // element content need find 
  let contentSearch = document.getElementById('content-search');

  // content search
  var search = '';

  contentSearch.addEventListener('input',function(e){
    search = e.target.value;
    stateAppend = false;
  })


$('#viewMore').on('click', function(e){
    e.preventDefault();
      if(search.length >= 0)
      {
          // when loadmore has content need search then state append is true
          stateAppend = true;
          GetPostByContent(pageCurrent);
      }
      else
      {
            // get Post with out content search

          GetMorePostWithOutContentSearch();

 
      }
    });

    $('#search-button').on('click',function(e){
        e.preventDefault();

        pageCurrent = 0; 
        GetPostByContent(pageCurrent);
    });


  function GetPostByContent(page)
  {
    $.ajax({
          url: '<?php echo ROOT_URL ?>Post/GetPostByContent',
          type: 'POST',
          data:{content: search, page:page},
          success: function (data){
                if(!stateAppend)
                {
                   $("#posts-content").html(data);
                }
                else{
                   $("#posts-content").append(data);
                }
                pageCurrent++;
        } 
      })
  }


  // blur input

  $('#content-search').on('blur',function(e){
    if(search.length <= 0)
    {
        pageCurrent = 0;
        GetMorePostWithOutContentSearch();
    }
  })


  function GetMorePostWithOutContentSearch()
  {
     $.ajax({
          url: '<?php echo ROOT_URL ?>Post/GetMorePost',
          type: 'POST',
          data:{page: pageCurrent},
          success: function (data){
                    $("#posts-content").append(data);
                      pageCurrent++;
            } 
          })
  }
  let stateAppend = false;
</script>