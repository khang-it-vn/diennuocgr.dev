<div class="card mx-auto text-center">
 <form method="post" enctype="multipart/form-data" action="<?php $_SERVER['PHP_SELF']?>"  >
  <div class="card-body">
   <div class="form-group">
    <label for="title">Tiêu đề</label>
    <input type="text" class="form-control" id="title" name='title' placeholder="Nhập tiêu đề bài viết" required>
   </div>
   <div class="form-group">
  <label for="content-ck">Nội dung</label>
    <div id="content-ck" ></div>
    <input type="hidden"  name="content" id="content-post" value="" required>
   </div>
   <div class="form-group">
    <label for="image">Banner</label>
    <input type="file" class="form-control" id="image" name='banner' accept="image/*" required>
   </div>
   <div class="form-group">
    <label for="keywords">Keywords</label>
    <input type="text" class="form-control" id="keywords" placeholder="Mỗi keyword cách nhau bởi dấu ';'. Ví dụ: Điện nước; Điện nước Tiến Nguyễn; Xin chào điện nước tiến nguyễn" name="keywords" required>
   </div>
   <div class="form-group">
    <label for="tags">Tags</label>
    <input type="text" class="form-control" id="tags" placeholder="Mỗi tag cách nhau bởi dấu ';'. Tương tự như keywords" name="tags" required>
   </div>
   <button type="submit" class="btn btn-primary" name="submit"  onclick="checkFormPost()">Đăng bài</button>
  </div>
 </form>
</div>

<script type="text/javascript">
       
   var editor = CKEDITOR.replace( 'content-ck');

   editor.on( 'change', function( evt ) {
    document.getElementById("content-post").value = evt.editor.getData();
    console.log( document.getElementById("content-post").value );
});


function checkFormPost() {
    let title = document.getElementById('title').value;
    let content = document.getElementById('content-post').value;
    let image = document.getElementById('image').value;
    let keywords = document.getElementById('keywords').value;
    let tags = document.getElementById('tags').value;

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