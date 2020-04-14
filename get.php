<head>
  <meta charset="UTF-8">
  <title>calculator</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="main.js"></script>
</head>
<body>
  <div class="header">calculator</div>
    <div class="main-box">
      <div class="result-text">計算結果</div>
      <div class="result">
      <?php
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operation = $_GET['r1'];
        if ($operation === "Add") {
          $add = $num1 + $num2;
          echo $add;
        } else if ($operation === "Sub") {
          $sub = $num1 - $num2;
          echo $sub;
        } else if ($operation === "mul") {
          $mul = $num1 * $num2;
          echo $mul;
        } else if ($operation === "div") {
          if ($num2 == 0) {
            echo ("エラー");
          } else {
            $div = $num1 / $num2;
            echo $div;
          }
        }
      ?>
    </div>
    <form action="get.php" method="get">
      <div class="form-box">
        <div class="left">
          <label for="num1"><b>数値1</b></label>
          <input class="text" type="text" name ="num1">
          <label for = "num2"><b>数値2</b></label>
          <input class="text" type="text" name="num2">
        </div>
        <div class="right">
          <label class="Add">+
            <input class="btn" type ="radio" name = "r1" value="Add">
          </label>
          <label class="Add">-
            <input class="btn" type = "radio" name = "r1" value="Sub">
          </label>
          <label class="Add">×
            <input class="btn" type="radio" name="r1" value ="mul">
          </label>  
          <label class="Add">÷
            <input class="btn" type = "radio" name="r1" value="div">
          </label>
          <input class="submit" type="submit" value="=">
        </div>
      </div>
    </form>
  </div>
</body>
</html>