<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <script>
      list = new Array("one","two","three");
      for (var i = 0; i < list.length; i++) {
        document.write(list[i]);
      }
    </script>
    <h1>PHP</h1>
    <?php
      $list = array("one","two","three");
      echo $list[2];
     ?>
  </body>
</html>
