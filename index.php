<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>五大唱片行</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>


    <style>
        body{
            background-color: 	#FCFCFC;
        }
        .body1 {
            margin: 8%;
            margin-top: 3%;
        }

        .card_head {
            background-color: #F0F0F0;
            text-align: center;

            padding: 8px;
            margin-top: 0;
        }

        .Q_input {
            margin: 10%;
            margin-top: 3%;
            width: 80%;

        }


        .pic {
            margin: 10%;
            margin-bottom: 2%;
            width: 80%;
            height: 80%;
        }
    </style>

</head>

<body>
    <?php

    //建立伺服器連線
    //mysqli_connect('資料庫主機','登入帳號','登入密碼','要開啟的資料庫名稱')
    $link = mysqli_connect("localhost", "root", "12345678", "shop");

    //錯誤偵測
    if (!$link) {
        echo "連接失敗" . mysqli_connect_error();
    }

    //設定字元集與編碼
    mysqli_query($link, "set names utf8");

    //sql指令
    $sql = "SELECT * FROM item";

    //傳送sql指令置資料庫，並傳回執行結果
    $result = mysqli_query($link, $sql);
    $result2 = mysqli_query($link, $sql);
    ?>
    <form method="post">
        <nav aria-label="breadcrumb">

            <ol class="breadcrumb">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        喜好收藏
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                        <?
                              while($record=mysqli_fetch_row($result2)){
                                  if (isset($_SESSION[$record[1]])){
                              
                        ?>
                        <br>
                        <li style="color:black;padding-left:10%"><? echo $record[1] ?> </li>
                        <br>
                        <?
                                  }
                                }
                        ?>
                    </ul>
                </li>
                <li class="breadcrumb-item" style="padding-top:5px;padding-left:80%;"><? echo  $_SESSION['username']; ?></li>


                <li><button type="submit" name="logout" class="btn btn-primary" style="font-size: 5px;"><a href="logout.php" style="color:white;">登出</a></button></li>


            </ol>
        </nav>

        <div class="body1">


            <h1 style="text-align: center; margin-top: 20px; font-weight:bold;">五大唱片行</h1>


            <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-top:5px;  ">

                <?php

                while ($record = mysqli_fetch_row($result)) {
                ?>
                    <div class="col">
                        <div class="card" style="border-radius:10px; overflow:hidden;">
                            <div class="card_head"><b><? echo $record[1] ?></b></div>
                            <img src="<? echo $record[3] ?>" class="card-img-top pic">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: center; "><b>$<? echo  $record[2] ?></b></h5>
                                <p class="card-text" style="text-align: center;"><? echo $record[4] ?></p>
                            </div>

                            <div style="text-align: right; padding:10px;">
                            <?
                              if(isset($_SESSION[$record[1]])){
                            ?>
                            <a href="dislike.php?item_name=<? echo $record[1]; ?>">
                            <img src="like.jpg" width="20%"></a>

                            <?}else{
                            ?>
                             <a href="like.php?item_name=<? echo $record[1]; ?>">
                             <img src="dislike.jpg" width="15%"></a>

                            <?
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                <?
                }

                ?>

            </div>
    </form>
    </div>
</body>
</html>