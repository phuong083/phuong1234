<?php
	include 'connect_db.php';
	include 'header.php';
?>
<div class="body">
	<!-- Phan noi dung bai viet -->
	<div class="view_topic">
		<h2 align="center" style="font-size: 36px;color: #4CAF50;">Thêm JavaScript và CSS Style vào WordPress như thế nào cho đúng?</h2>
		<p>Làm sao để thêm JavaScript và CSS stylesheets vào WordPress một cách đúng nhất? Nhiều người tự lập trình cho website WordPress của mình thường mắc lỗi khi gõ thẳng câu lệnh của họ vào trong các plugin và các theme. Trong bài này, chúng tôi sẽ giới thiệu cho các bạn cách làm thế nào để thêm JavaScript và stylesheet đúng trong WordPress. Điều này sẽ đặc biệt hữu ích cho những người mới bắt đầu học về theme WordPress và phát triển plugin.</p>
		<img src="images/post1.png" alt="hinh1" align="center">
		<p>III. TRUY CẬP BIẾN TỪ TRÌNH DUYỆT
		Khi dùng PHP, cũng như các phần mềm trung gian khác, thông tin được cung cấp tuỳ chọn dựa vào tham chiếu người dùng. Dĩ nhiên thông tin sẽ đến thông qua “form”. Thông tin cũng có thể đến từ những nơi khác, như “cookie” hay “sessions”.

		1.Biến form:
		Một trong những cách phổ biến là chuyển biến thông qua “form”. Mỗi thành phần trong form của chúng ta sẽ được gán tên và thuộc tính giá trị. Khi form được “submit” thì name=value sẽ được chuyển đến PHP. Chúng ta có thể chuyển đến PHP bởi phương pháp GET hoặc POST, tùy thuộc chúng ta chọn gì trong thuộc tính hành động của “form”. Một khi form được “submit”, những thành phần của form sẽ tự động trở thành những biến toàn cục trong PHP.

		2.Sessions:
		PHP cũng giống như ASP và ColdFusion đều hỗ trợ sessions. Vậy sessions là gì? Về cơ bản nó là một cách khác để duy trì trạng thái giữa các trang Web. Chúng ta bắt đầu một sessions bởi hàm start_session(). Khi đó PHP sẽ đăng ký một session ID duy nhất và gửi session ID đó về cho người dùng thông qua cookie. PHP sẽ tạo những tệp đáp trả trên server để có thể lưu giữ dấu vết của bất kỳ biến nào. Những tệp này có cùng tên với session ID.
		Một khi session được tạo chúng ta có thể đăng ký bất kỳ biến số nào. Giá trị của nó sẽ được giữ trên một tệp ở máy chủ. Và như vậy trong thời gian sống của session những biến này sẽ được thực hiện bởi bất cứ trang nào trong cùng một tên miền mà không cần truy cập đến chúng.
		Tuy nhiên có một số người dùng không cho phép cookie, khi đó PHP giữ dấu vết các session ID qua các querystring. Chúng ta có thể làm điều này bằng tay bằng cách cho sessiong ID phụ thuộc queryString, hoặc thay đổi tuỳ chọn cấu hình. Để thêm session Id đến querystring, ta dùng <?=SID?>. Nó sẽ tự động in ra một chuỗi như sau:</p>
		<hr style="border:1px dashed #4CAF50;">
		<!-- Phan dang tai binh luan cua bai viet -->
		<div class="comment_topic">
			<img src="images/hinh1.png">
			<textarea cols="87" rows="6"></textarea>
			<input type="submit" name="upload_comment">
		</div>
	</div>
	<!-- Phan cac bai viet lien quan -->
	<div class="involve_topic">
		<h2 align="center" style="background-color: #98FB98;margin: 0px;padding: 20px 0px;">Bài viết liên quan</h2>
		<ul>
			<li>123</li>
			<li>2121</li>
			<li>212121</li>
		</ul>
	</div>
</div>
<div class="clearfix"></div>
<?php
	include 'footer.php';
?>