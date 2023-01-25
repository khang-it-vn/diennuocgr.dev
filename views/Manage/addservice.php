<div class="card mx-auto text-center">
 <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>"  >
  <div class="card-body">
   <div class="form-group">
    <label for="title">Tên dịch vụ</label>
    <input type="text" class="form-control" id="title" name='nameService' placeholder="Nhập tên dịch vụ" required>
   </div>
   <div class="form-group">
  <label for="content-service-provide">Mô tả dịch vụ</label>
    <div id="content-service-provide" ></div>
    <input type="hidden"  name="content" id="content-service" value="" required>
   </div>
   
   <button type="submit" class="btn btn-primary" name="submit"  onclick="checkFormPost()">Thêm dịch vụ</button>
  </div>
 </form>
</div>

<script type="text/javascript">
       
   var editor = CKEDITOR.replace( 'content-service-provide');

   editor.on( 'change', function( evt ) {
    document.getElementById("content-service").value = evt.editor.getData();
    console.log( document.getElementById("content-service").value );
});


function checkFormPost() {
    let title = document.getElementById('title').value;
    let content = document.getElementById('content-service').value;


    if(title.length <= 0 || content.length <= 0 || image === "" || keywords.length <= 0 || tags.length <= 0)
    {
        alert('Cần điền đầy đủ thông tin');
        return;
    }
}
</script>
<style>
 .cke_contents {
  min-height: 500px;
}
</style>