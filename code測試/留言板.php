<?php
// 載入db.php來連結資料庫
require_once 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>特色美食</title>
    <!-- JavaScript Bundle with Popper -->
</head>
<link rel="stylesheet" href="./bootstrap.css">
<link rel="stylesheet" href="./animaction/animaction.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

<style>
    #map {
        height: 600px;
    }

    /* 測試會不會跑版 */
    html {
        height: 100%;
    }

    body {
        background-image: url("../圖檔/小專_background-.png");
        width: 100%;
        background-size: contain;
        background-repeat: repeat-y repeat-x;
        background-attachment: fixed;

    }

    #bigcontent {
        margin-top: 80px;
        margin-left: 250px;
        /* text-align: center; */
        width: 800px;
        background-color: rgba(255, 255, 255, 0.5);
        background-repeat: repeat-y;
        box-shadow: 3px 3px 5px gray inset;
        text-align: center;
    }

    #title {
        background-color: rgba(255, 166, 0, 0.463);
        color: black;
    }

    .navbar {
        background-image: url("../圖檔/櫻花.png");
        background-color: rgb(248, 194, 237);
        color: white;
        height: 80px;
    }

    .nav-item {
        display: flex;
        font-family: 'Noto Sans TC', sans-serif;
        font-size: 16px;
        margin-left: 100px;
        align-items: center;
        justify-content: center;
        font-weight: bold;

    }

    .navbar-brand {
        position: relative;
    }

    .nav-item:hover {
        background-color: peachpuff;
        -webkit-animation: jello-diagonal-2 0.8s both;
        animation: jello-diagonal-2 0.8s both;
    }

    .dropdown-menu {
        background-color: rgb(255, 218, 185, 0.7);
    }

    .offcanvas-body li {
        text-align: start;
    }

    #link_a a:link {
        color: black;
        text-decoration: none;
        font-size: 16px;
    }

    #link_a a:visited {
        color: darkblue;
        font-size: 30px;
        text-decoration: line-through;

    }

    #link_a a:focus {
        background-color: coral;
        color: white;
        font-size: 20px;

    }

    #link_a a:hover {
        background-color: gold;
        text-decoration: overline;


    }

    #link_a a:active {
        text-decoration: line-through;
    }

    #bigcontent .btn {
        margin-right: 730px;

    }


    /* 要先設定外層容器的width才能調整object-fit */
    .carousel {
        width: 80%;
    }

    .slide button {
        margin-left: 100px;
    }

    .carousel img {
        margin-left: 80px;
        height: 400px;
        display: block;
        object-fit: contain;
    }

    #temple li {
        list-style-type: "\2728"
    }

    #addr {
        padding: 25px;
    }

    #addr li {
        list-style-type: "\2728"
    }


    #content {
        background-color: rgba(250, 235, 215, 0.85);
        font-size: 14px;
        padding: 30px;
        text-align: justify;
        line-height: 30px;
    }

    #content img {
        margin-left: 80px;
    }

    #up {
        display: inline-block;
        position: fixed;
        right: 10px;
        bottom: 10px;
        background-color: #fff591;
        /* border-radius: 20px; */
    }

    #clickmsg {
        display: none;
    }

    #up:hover #clickmsg {
        display: inline-block;
        position: absolute;
        top: -35px;
        right: 20px;
        width: 50px;
        border: 3px;
        background-color: rgba(17, 17, 16, 0.5);
        color: azure;
        border-radius: 20px;

    }
</style>
<script>
    $(function () {
        $("#tabs").tabs();
    });
</script>

<body action="signup.php" method="post">
    <div id="background">
        <div class="container">
            <nav class="navbar navbar-expand-sm fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.html"><img src="../圖檔/GOKYOTO-1--unscreen.gif" alt=""
                            height="120"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="homepage.html">回分類頁</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="culture" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="true">體驗與祭典</a>
                                <ul class="dropdown-menu" aria-labelledby="culture">
                                    <li><a class="dropdown-item" href="./文化體驗.html">文化體驗</a></li>
                                    <hr>
                                    <li><a class="dropdown-item" href="./葵祭.html">祭典節慶</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./景點介紹.html">景點介紹</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./美食介紹.html">美食介紹</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./map.html">用地圖來認識京都</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <div id="bigcontent">
        <form name="signup">
            <p>暱稱 : <input type=text name="name"></p>
            <p>留言 :</p> 
                <div><textarea name="ta" id="ta" cols="30" rows="10"></textarea></div></textarea>
            <p><input type="submit" name="submit" value="submit"></p>
        </form>

        <!-- 顯示資料表list內容的php -->
        <?php
        $sql="select * from list";
        $result=$mysqli->query($sql); //物件->物件裡面的function
        ?>

        <div>
            送出內容:
            <?php while($row = $result->fetch_assoc()){  ?>
            <p>暱稱:<?php echo $row["name"] ?></p>
            <p>內容:<div><?php echo $row["contents"] ?></div></p>
            <?php } ?>
        </div>
    </div>

    <div id="up" class="rounded-circle"><a class="nav-link active" aria-current="page" href="#"><img
                src="../圖檔/up-2--unscreen.gif" alt="" height="50"></a>
        <div id="clickmsg" class="animate__animated animate__bounce animate__infinite">To top</div>
    </div>
</body>
<!-- <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->

</html>