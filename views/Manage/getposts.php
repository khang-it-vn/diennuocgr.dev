<div class="container" id="content-main">
<?php  foreach ($viewModel as $item): ?>
	<div class="row" id="row<?php echo $item['id_post']?>">
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><?php echo 'id_post-'.$item['id_post'] .': '. $item['title']?></h6>
      </div>
     <div class="card-body">
		  <div class="row">
		    <div class="col-md-3">
		      <img src="../assets/img/post/<?php echo $item['banner']?>" alt="your-image-description" class="img-fluid">
		    </div>
		    <div class="col-md-9">
		      <?php echo substr($item['content'], 0,992) . '...'?>
		    </div>

		    <div class="col-md-12 text-right mt-3">
		    	<label class="mr-2"><i class="bi bi-eye"></i><?php echo $item['views'] ;?></label>
		      <button class="btn btn-danger mr-2" onclick="DeletePost(<?php echo $item['id_post']; ?>)">Delete</button>
		      <button class="btn btn-primary">Modify</button>
		    </div>
		  </div>
		</div>
    </div>
  </div>
<?php endforeach ?>


</div>
  
<div class="d-flex justify-content-center" id="viewMore" style="color: blue;"> View More >> </div>
<script type="text/javascript">
	let pageCurrent = 1;

	$('#viewMore').on('click',function(e){
		e.preventDefault();
		$.ajax({
			url:'<?php echo ROOT_URL .'manage/GetMorePost'?>',
			type: 'post',
			data: {page: pageCurrent},
			success: function(data){
				$('#content-main').append(data);
				pageCurrent++;
			}
		})
	});


	function DeletePost(id_post)
	{
		$('#row'+id_post).remove();
		$.ajax({
			url:'<?php echo ROOT_URL .'manage/DeletePost'?>',
			type: 'post',
			data: {idPost: id_post},
			success: function(data){
				console.log(data);
			}
		})
	}
</script>

<style type="text/css">
	
	#viewMore:hover{
		cursor: pointer;
		color: white;
	}
</style>