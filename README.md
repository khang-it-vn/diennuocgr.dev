# DIEN NUOC GR
## 1. ERD 
Các thực thể:
- **Sản phẩm**(ID_SP, Tên sản phẩm, Mô tả, Hình ảnh, Số lượt xem sản phẩm).
  --> Trong đó: Mối lượt click vào sản phẩm sẽ được tính là một lần xem sản phẩm.
  
![image](https://user-images.githubusercontent.com/84958646/212615126-7b15d172-31ad-4f4a-b8d2-0b491798a08e.png)

  
- **Dịch vụ**(ID_DV, Tên dịch vụ, Mô tả, Số lần dịch vụ đã cung cấp). 
  --> Trong đó: Mỗi lượt khách hàng nhấn liên hệ sẽ tính là một lần cung cấp dịch vụ.
  ![image](https://user-images.githubusercontent.com/84958646/212615394-a84bd9a5-386a-467b-aaab-9e3a7d8bb4d7.png)
+ Query for MySQL
    create TABLE ServiceProvide
    (
      id_service int AUTO_INCREMENT PRIMARY KEY,
        name varchar(100)not null,
        description varchar(1000),
        totalProvide int DEFAULT 0
    ) 
    
- **Post** ( ID_POST, Tiêu đề bài viết, Nội dung bài viết, Số lượt xem bài, Ngày giờ đăng bài).
  ![image](https://user-images.githubusercontent.com/84958646/212616356-33bec261-4e71-4ad8-a9d5-77777133f743.png)
+ Query for MySQL
  create table post
  (
    id_post int AUTO_INCREMENT PRIMARY KEY,
      title varchar(200) not null,
      content text (65000),
      timeposted datetime,
      views int
  )

- **Account** (UID, Username, Password)



