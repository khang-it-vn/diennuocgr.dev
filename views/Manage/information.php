
<div class="card mx-auto text-center">
    <!-- Họ tên -->
  <div class="card-body">
   <div class="form-group">
    <label for="title">Họ và tên</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['fullname']?>" id="u-fullname" >
   </div>
   <button onclick="updateFullName()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>

<!-- Ảnh đại diện -->
  <div class="card-body">
    <form class="form-group" method="post" action="<?php $_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
   <div class="form-group">
    <label for="title">Ảnh đại diện</label>
    <input type="file" class="form-control" id="avatar"  name="avatar" accept ="image/*">
   </div>
   <button onclick="updateAvatar()" class="btn btn-primary" name="submit" type="submit">Lưu</button>
    </form>
  </div>

<!-- Địa chỉ -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Địa chỉ</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['address']?>" id="u-address">
   </div>
   <button onclick="updateAddress()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>

<!-- Chuyên ngành, trình độ -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Chuyên Ngành/Trình Độ </label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['major']?>" id="u-major" >
   </div>
   <button onclick="updateMajor()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>

<!-- Số điện thaoij -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Số điện thoại</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['Numberphone']?>" id="u-numberphone">
   </div>
   <button onclick="updateNumberphone()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>

<!-- email -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Email</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['email']?>"  id="u-email">
   </div>
   <button onclick="updateEmail()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>

  <!-- Số zalo -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Zalo</label>
    <input type="text" class="form-control"  value="<?php echo $_SESSION['about']['zalo']?>" id="u-zalo">
   </div>
   <button onclick="updateZalo()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>


  <!-- Link youtube -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Link Youtube</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['linkYoutube']?>" id="u-youtube">
   </div>
   <button onclick="updateYoutube()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>


  <!-- Link Facebook -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Link Facebook</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['linkFb']?>"id="u-facebook" >
   </div>
   <button onclick="updateFacebook()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>



  <!-- Link video giới thiệu -->
   <div class="card-body">
   <div class="form-group">
    <label for="title">Link video giới thiệu</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION['about']['linkVideoIntroduce']?>" id="u-introduce">
   </div>
   <button onclick="updateIntroduce()" class="btn btn-primary" name="submit" >Lưu</button>
  </div>
</div>
<script type="text/javascript">


    var fullname = '';
    var address = '';
    var major = '';
    var numberphone = '';
    var email = '';
    var zalo = '';
    var linkYoutube = '';
    var linkFacebook = '';
    var linkIntroduce ='';

    let eFullname = document.getElementById('u-fullname');
    eFullname.addEventListener('change',function()
    {
        fullname = this.value;

    })


    let uAddress = document.getElementById('u-address');
    uAddress.addEventListener('change', function(){
        address = this.value;
    })

    let eMajor = document.getElementById('u-major');
    eMajor.addEventListener('change',function()
    {
        major = this.value;

    })


    let uNumberphone = document.getElementById('u-numberphone');
    uNumberphone.addEventListener('change', function(){
        numberphone = this.value;
    })

    let eMail= document.getElementById('u-email');
    eMail.addEventListener('change',function()
    {
        email = this.value;

    })


    let uYoutube = document.getElementById('u-youtube');
    uYoutube.addEventListener('change', function(){
        linkYoutube = this.value;
    })

    let eFacebook = document.getElementById('u-facebook');
    eFacebook.addEventListener('change',function()
    {
        linkFacebook = this.value;

    })


    let uIntroduce = document.getElementById('u-introduce');
    uIntroduce.addEventListener('change', function(){
        linkIntroduce = this.value;
    })


    let eZalo = document.getElementById('u-zalo');
    eZalo.addEventListener('change', function(){
        zalo = this.value;
    })



    function    updateYoutube()
    {
        if(linkYoutube.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateYoutube'?>',
            type: 'POST',
            data: {youtube: linkYoutube},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateZalo()
    {
        if(zalo.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateZalo'?>',
            type: 'POST',
            data: {nzalo: zalo},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateEmail()
    {
        if(email.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateEmail'?>',
            type: 'POST',
            data: {email: email},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateNumberphone()
    {
        if(numberphone.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateNumberphone'?>',
            type: 'POST',
            data: {numberphone: numberphone},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateMajor()
    {
        if(major.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateMajor'?>',
            type: 'POST',
            data: {major: major},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateAddress()
    {
        if(address.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateAddress'?>',
            type: 'POST',
            data: {address: address},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateAvatar(e)
    {
        e.preventDefault();
    }
    function    updateFullName()
    {
        if(fullname.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateFullName'?>',
            type: 'POST',
            data: {fullname: fullname},
            success: function (data) {
                console.log(data);
            }
        });
    }
    function    updateIntroduce()
    {
        if(linkIntroduce.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateIntroduce'?>',
            type: 'POST',
            data: {introduce: linkIntroduce},
            success: function (data) {
                console.log(data);
            }
        });
    }

    function    updateFacebook()
    {
        if(linkFacebook.length <= 0)
        {
            alert("Không được bỏ trống thông tin cần cập nhật ");
            return;
        }
        $.ajax({
            url: '<?php echo ROOT_URL.'manage/UpdateFacebook'?>',
            type: 'POST',
            data: {facebook: linkFacebook},
            success: function (data) {
                console.log(data);
            }
        });
    }

</script>