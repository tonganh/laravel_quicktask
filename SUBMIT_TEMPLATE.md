<h1>Chương 1</h1>
Câu hỏi:
1. Có những cách nào để tạo 1 project Laravel?

2. Nêu mục đích chính, ngắn gọn của các thư mục trong dự án.

3. Vòng đời của một request trong Laravel. (Mở rộng)

# 1, có những cách nào để khởi tạo 1 project laravel

### Với máy em hiện tại sử dụng WSL2:

Gồm 2 cách để khởi tạo laravel project:

- Sử dụng composer
- sử dụng docker

# 2, Nêu mục đích chính, ngắn gọn của các thư mục trong dự án:

- app: Phần chứa mã nguồn của hệ thống
- ****[The Bootstrap](https://laravel.com/docs/9.x/structure#the-bootstrap-directory) Directory: chứa bộ nhớ đệm được khởi tạo, không cần quan tâm phần này**
- ****[The Config](https://laravel.com/docs/9.x/structure#the-config-directory) Directory: config cho ứng dụng**
- ****[The Database](https://laravel.com/docs/9.x/structure#the-database-directory) Directory: chứa các cái như định nghĩa model, seed, factory,**
- ****[The Lang](https://laravel.com/docs/9.x/structure#the-lang-directory) Directory: chứa các tệp ngôn ngữ của ứng dụng**
- ****[The Public](https://laravel.com/docs/9.x/structure#the-public-directory) Directory: chứa ảnh, code js,..**
- ****[The Resources](https://laravel.com/docs/9.x/structure#the-resources-directory) Directory: chứa phần views, để cho nếu cá nhân muốn render view thì dùng cái đó**
- ****[The Routes](https://laravel.com/docs/9.x/structure#the-routes-directory) Directory: định nghĩa các route map trong hệ thống của mình.**
    - **web.php: bảo vệ CSRF và mã hóa cookie.**
- ****[The Storage](https://laravel.com/docs/9.x/structure#the-storage-directory) Directory: ghi log, session, cache,**
- ****[The Tests](https://laravel.com/docs/9.x/structure#the-tests-directory) Directory: viết php unit test**
- ****[The Vendor](https://laravel.com/docs/9.x/structure#the-vendor-directory) Directory: vendor balbla**

# 3, vòng đời của ứng dụng laravel

tham khảo từ bài viết [Laravel Request Lifecycle. This blog is to help you get to know… | by Ankita Tejani | Medium](https://medium.com/@ankitatejani84/laravel-request-lifecycle-7c2145aa1257)
![Untitled](https://miro.medium.com/max/1400/1*Vs2-42lGE7VraMjW2g73Vw.png)