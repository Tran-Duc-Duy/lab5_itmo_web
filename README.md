Шаг 2. Создание простого веб-приложения
Необходимо создать набор страниц, которые позволят выполнять операции CRUD для набора данных, соответствующего варианту задания. То есть, эти страницы позволят создавать, редактировать иудалять элементы данных. Например, для варианта «Социальная сеть» это будут персональные страницы, для варианта «Интернет-магазин» это товары. Все данные на данном этапе должны храниться в XML-документе. Структуру документа можно задавать произвольную, главное – обеспечить хранение заданных вариантом данных.

В результате должен быть получен следующий набор страниц:
list.php – страница, на которой отображается список всех элементов данных в виде гиперссылок, ведущих на страницу index.php с соответствующим параметром id. Страница должна содержать также ссылку на страницу create.php.
index.php – страница, на которой отображаются все данные согласно варианту. Параметр GET-запроса: id, являющийся числом. Страница должна содержать ссылку на страницы list.php, update.php и delete.php.
create.php – страница, содержащая форму для добавления новых элементов данных согласно варианту. Для формы должен быть создан обработчик POST-запроса. Обработчик должен предусматривать валидацию данных по критериям, заданным вариантом. В случае некорректного ввода данных серверный скрипт должен генерировать информативные и понятные пользователю сообщениях об ошибках. После успешного добавления элемента данных должно выполняться перенаправление на созданную страницу (index.php?id=<новый id>, где <новый id> - целочисленный идентификатор).

Также на странице должны отображаться гиперссылки на страницы update.php и delete.php с заданным идентификатором.

update.php – страница, содержащая форму для редактирования элемента, id которого передан в качестве параметра. Функциональность и поведение аналогичны странице create.php за тем лишь исключением, что при загрузке в форме отображаются актуальные значения из XML.

delete.php – страница, содержащая форму для удаления элемента. Содержит кнопку, по нажатию на которую на сервер отправляется POST-запрос, выполняющий удаление данных по заданному в GETзапросе id, а также ссылку «Назад», которая ведет на страницу index.php с соответствующим id.

Bước 2: Tạo một ứng dụng web đơn giản
Bạn cần tạo một tập hợp các trang cho phép bạn thực hiện các thao tác CRUD trên tập dữ liệu tương ứng với biến thể công việc. Tức là, các trang này sẽ cho phép bạn tạo, chỉnh sửa và xóa các mục dữ liệu. Ví dụ: đối với tùy chọn “Mạng xã hội”, đây sẽ là các trang cá nhân, đối với tùy chọn “Cửa hàng trực tuyến”, đây sẽ là các sản phẩm. Tất cả dữ liệu ở giai đoạn này phải được lưu trữ trong một tài liệu XML. Cấu trúc của tài liệu có thể được thiết lập tùy ý, điều chính là đảm bảo lưu trữ dữ liệu được chỉ định bởi tùy chọn.

Kết quả sẽ là tập hợp các trang sau:
list.php - trang hiển thị danh sách tất cả các phần tử dữ liệu dưới dạng siêu liên kết dẫn đến trang index.php với tham số id tương ứng. Trang cũng phải chứa một liên kết đến trang create.php.
index.php là một trang hiển thị tất cả dữ liệu theo biến thể. Tham số yêu cầu GET: id, là một số. Trang phải chứa liên kết đến các trang list.php, update.php và delete.php.
create.php - một trang chứa biểu mẫu để thêm các phần tử dữ liệu mới theo biến thể. Một trình xử lý yêu cầu POST phải được tạo cho biểu mẫu. Trình xử lý phải cung cấp cho việc xác thực dữ liệu theo các tiêu chí được chỉ định bởi tùy chọn. Trong trường hợp nhập dữ liệu không chính xác, tập lệnh máy chủ sẽ tạo ra các thông báo lỗi mang tính thông tin và thân thiện với người dùng. Sau khi thêm thành công phần tử dữ liệu, chuyển hướng đến trang đã tạo sẽ được thực hiện (index.php? Id = <new id>, trong đó <new id> là số nhận dạng số nguyên).

Trang cũng sẽ hiển thị các siêu liên kết đến các trang update.php và delete.php với ID đã cho.

update.php - một trang chứa biểu mẫu để chỉnh sửa phần tử có id được truyền dưới dạng tham số. Chức năng và hành vi tương tự như trang create.php, ngoại trừ khi biểu mẫu được tải, các giá trị thực từ XML sẽ được hiển thị.

delete.php - trang chứa biểu mẫu xóa một phần tử. Chứa một nút, khi được nhấp vào, sẽ gửi yêu cầu ĐĂNG đến máy chủ xóa dữ liệu theo id được chỉ định trong yêu cầu GET, cũng như liên kết "Quay lại" dẫn đến trang index.php với id tương ứng.

Cửa hàng trực tuyến
ID mặt hàng.
Chỉnh sửa tên sản phẩm, giá cả, mô tả