<div class="card mx-auto text-center">
 <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>"  >
  <div class="card-body">
   <div class="form-group">
    <label for="title">Tên sản phẩm</label>
    <input type="text" class="form-control" id="name" name='name' placeholder="Nhập tên sản phẩm" required>
   </div>
   <div class="form-group">
  <label for="content-editor-product">Mô tả sản phẩm</label>
    <div id="content-editor-product" ></div>
    <input type="hidden"  name="content" id="content-product" value="" required>
   </div>
   <div class="form-group">
    <label for="image">Hình ảnh sản phẩm</label>
    <input type="file" class="form-control" id="image" name='imagePath' accept="image/*" required>
   </div>
   
   <button type="submit" class="btn btn-primary" name="submit"  onclick="checkFormPost()">Thêm sản phẩm</button>
  </div>
 </form>
</div>

<script type="text/javascript">
       
   var editor = CKEDITOR.replace( 'content-editor-product');

   editor.on( 'change', function( evt ) {
    document.getElementById("content-product").value = evt.editor.getData();
    console.log( document.getElementById("content-product").value );
});


function checkFormPost() {
    let title = document.getElementById('name').value;
    let content = document.getElementById('content-product').value;
    let image = document.getElementById('image').value;
    

    if(title.length <= 0 || content.length <= 0 || image === "" )
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