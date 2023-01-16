<form method="post" action="<?php $_SERVER['PHP_SELF']?>">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="number" class="form-control" id="id" name="id" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">USERNAME</label>
    <input type="text" class="form-control" id="username" name="username">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">PASSWORD</label>
    <input type="text" class="form-control" id="password" name="password">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>