<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body class="cyberpunk-bg">
    <div class="login-box">
      <h2>
      <?php
      //無理やり配列を送られていないか
        $foo = filter_input(INPUT_GET, 'indata');

        // 文字列か、空でないかをチェック
        if (!is_string($foo) || trim($foo) === '') {
         die("入力してください");
        }

        // mb_ereg数字が入力されているかどうか
        if (mb_ereg('^[0-9]+$', $foo) === false) {
          die("数字を入力してください。");
        }
        echo "入力された数字は： " . $foo;
?>
    </h2>
    </div>
  </body>
</html>
