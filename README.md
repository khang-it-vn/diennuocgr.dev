# DIEN NUOC GR
## 1. ERD 
Các thực thể:
__Sản phẩm(ID_SP, Tên sản phẩm, Mô tả, Hình ảnh, Số lượt xem sản phẩm).
  --> Trong đó: Mối lượt click vào sản phẩm sẽ được tính là một lần xem sản phẩm.
__Dịch vụ(ID_DV, Tên dịch vụ, Mô tả, Số lần dịch vụ đã cung cấp). 
  --> Trong đó: Mỗi lượt khách hàng nhấn liên hệ sẽ tính là một lần cung cấp dịch vụ.
__Post ( ID_POST, Tiêu đề bài viết, Nội dung bài viết, Số lượt xem bài, Ngày giờ đăng bài).
__Account(UID, Username, Password)
