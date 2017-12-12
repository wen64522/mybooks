<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> welcome to my books</title>
    <link rel="stylesheet" href="public/css/mystyle.css" type="text/css" >
</head>
<body>
<div id="main">
    <div id="header">
        <div id="logo"><div id="logo_1"><a href="index.php">Books</a></div></div>
        <div id="nav">
            <ul>
                <li><a href="books/news/book_news.php" target="index">新闻</a></li>
                <li><a href="books/life/book_life.php" target="index">生活</a></li>
                <li><a href="books/book/book_book.php" target="index">书本</a></li>
                <li><a href="books/photo/book_photo.php" target="index">相册</a></li>
                <li><a href="books/message/book_message.php" target="index">留言</a></li>
            </ul>
        </div>
        <div id="login">
            <a href="books/login.php" target=_blank>管理员登录</a>
        </div>
    </div>
    <div id="content">
        <iframe src="books/message/book_index.php" name="index" width="100%" height="100%" frameborder=0 ></iframe>
    </div>
    <div id="foot">
        <p>welcome to my books,thanks!</p>
        <p>by @wenyiwen</p>
    </div>
</div>
</body>
</html>