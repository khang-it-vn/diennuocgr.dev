<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th class="col-6 text-center">Tên dịch vụ</th>
      <th class="col-2 text-center">Tổng số lượt đã phục vụ</th>
      <th class="col-2 text-center">Tùy chỉnh</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($viewModel as $item): ?>
    <tr id="row-id-service-provide-<?php echo $item['id_service']?>">
      <td class="pl-4"><?php echo $item['name']?></td>
      <td class="text-center"><?php echo $item['totalProvide']?></td>
      <td class="text-center"><button class="btn btn-danger" onclick="deleteServiceProvide(<?php echo $item['id_service'];?>)"> Xóa </button></td>
    </tr>
   
    <?php endforeach ?>
  </tbody>
</table>
<script type="text/javascript">
  
  function  deleteServiceProvide(idService)
  {
      $('#row-id-service-provide-' +idService).remove();

      $.ajax({
        url: '<?php echo ROOT_URL .'manage/DeleteServiceProvide'?>',
        type: 'POST',
        data:{id_service: idService},
        success: function(data)
        {
          console.log(data);
        }
      });
  }
</script>