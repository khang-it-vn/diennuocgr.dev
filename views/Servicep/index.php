
<div class="container">
  <div class="row justify-content-center">
    <table class="table text-center mt-1">
      <thead>
        <tr>
          <th>Tên dịch vụ  (Nhấn vào dịch vụ xem mô tả)</th>
          <th>Liên hệ</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($viewModel as $item): ?>
            <tr class="service-row" data-description="<?php echo $item['description']?>">
                <td><?php echo $item['name']?></td>
                <td><a href="tel:<?php echo NUMBERPHONE?>">Liên hệ</a></td>
            </tr>
      <?php endforeach;?>
        
      </tbody>
    </table>
  </div>
</div>
<script type="text/javascript">
      var rows = document.getElementsByClassName("service-row");

      for (var i = 0; i < rows.length; i++) {
        rows[i].addEventListener("click", function() {
          var description = this.getAttribute("data-description");
          var newRow = document.createElement("tr");
          newRow.innerHTML = "<td style='font-style: italic;' colspan='2'>" + description + "</td>";
          this.parentNode.insertBefore(newRow, this.nextSibling);
        });
}
</script>
<style type="text/css">
      .service-row:hover {
  background-color: #f5f5f5;
}
thead {
  background-color: #106EEA;
  color:white;
}
table {
  margin-top: 60px;
}

</style>