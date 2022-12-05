<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>註冊</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <style>
        html,
        body {
            display: flex;
            align-items: center;
            flex-direction: column;
        }

        .box {
            display: flex;
            align-items: center;
            flex-direction: column;
            width: 600px;
            text-align: center;
            margin-top: 100px;
        }
    </style>
</head>

<body>
    <div class="box">
        <form action="login.php" method="POST">

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">姓名:</label>
                <input type="text" name="r_name" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">帳號:</label>
                <input type="text" name="r_account" name="r_account" class="form-control" id="exampleFormControlInput1" required>
            </div>


            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">密碼:</label>
                <input type="password" name="r_password" name="r_name" name="r_account" class="form-control" id="exampleFormControlInput1" required>
            </div>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="submit" class="btn btn-primary" name="register">註冊</button>
               
            </div>



           
            <br><br>

            <a href="login.php">已有帳號?點此登錄</a>

        </form>
    </div>
</body>

</html>