<!DOCTYPE html>
<!-- code by Myprograming ( https://www.myprograming.com/) -->
<html>
  <head>
    <title>Simple Calculator In PHP | MyPrograming.com</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <style type="text/css">
    .class1{
      background: #f3f3f3;
      padding: 50px;
      text-align: center;
    }
      .class1 h1{
        word-wrap: break-word;
      }
    .class1
    form{
    background: #ced2a4;
    padding: 50px 0;
    }
    form .class2{
      padding: 10px;
      border: 1px solid;
    }
  </style>
  <body>
    <div class="class1">
           <h1>Simple Calculator In PHP | Create by <a href="https://www.myprograming.com/">MyPrograming.com</a></h1>
        <!-- Calculator form by Myprograming.com -->
        <form method="post" action="#">
            <input name="num1" type="text" class="class2" style="width: 150px; display: inline" /><br><br>
            <select name="operation">
                <option value="plus">Plus +</option>
                <option value="minus">Minus -</option>
                <option value="multiply">Multiply *</option>
                <option value="divided by">Devide /</option>
            </select> <br><br>
            <input name="num2" type="text" class="class2" style="width: 150px; display: inline" /><br><br>
            <input name="submit" type="submit" value="Calculate" class="class3" />
        </form>
    </div>
 <?php
        // If the submit button has been pressed
        if(isset($_POST['submit']))
        {
          // Check number values
          if(is_numeric($_POST['num1']) && is_numeric($_POST['num2']))
          {
            // Calculate total
            if($_POST['operation'] == 'plus')
            {
              $total = $_POST['num1'] + $_POST['num2'];
            }
            if($_POST['operation'] == 'minus')
            {
              $total = $_POST['num1'] - $_POST['num2'];
            }
            if($_POST['operation'] == 'multiply')
            {
              $total = $_POST['num1'] * $_POST['num2'];
            }
            if($_POST['operation'] == 'divided by')
            {
              $total = $_POST['num1'] / $_POST['num2'];
            }
            // Print total to the browser
          echo " <script>alert('{$_POST['num1']} {$_POST['operation']} {$_POST['num2']} = {$total}');</script>";
          } else {
            // Print error message to the browser
            echo "<script>alert('Numeric values are required');</script>";
          }
        }
      // end PHP. Code by Myprograming.com
      ?>
  </body>
</html>
