<?php
include ('photo_page.php');
$sql="select * from book_phototype  LIMIT $offset,$pageSize";
$result=$mysqli->query($sql);
$num=mysqli_num_rows($result);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../../public/css/book_photo.css" rel="stylesheet">
    <link rel="stylesheet" href="../../public/css/newspage.css">
</head>
<body>
<div id="main">
    <?php
    while($arr=mysqli_fetch_array($result)){
    $rows[]=$arr;}
    foreach($rows as $row){
    ?>
    <div class="img">
            <img  style="width: 200px ;margin: 5px"  src="../../public/uploads/photo/2b2251ff52c208d901accc845b23640f_t01d51d8a1582f4e79d.jpg">
            <a href="#"><h2 style="text-align: center;"><?php echo $row['phototype']?></h2></a>
    </div>
    <?php }?>
    <?php
    echo "<div id='type'>";
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=1\">最前 </a>";
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=".$prev."\"> 上一页</a>";
    echo "|";
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=".$next."\">下一页</a>";
    echo "<a href=\"".$_SERVER['PHP_SELF']."?page=".$totalPageCount."\"> 最后 </a>";
    echo "</div>";
    ?>
</div>
</body>
</html>