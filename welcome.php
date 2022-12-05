<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>歡迎</title>

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
    <?php
    session_start();
    echo "<h1>", substr($_SESSION['r_name'], 3), "，歡迎回來!</h1>";

    if (isset($_POST['logout'])) {
      session_destroy();
      header("Location: login.php");
    }


    ?>
    <form method="POST">
      <div class="btn-group" role="group" aria-label="Basic example" style="margin-top: 30px;">
        <button type="submit" class="btn btn-primary" name="logout">註銷帳號</button>

      </div>

    </form>
</div>
  
</body>

</html>