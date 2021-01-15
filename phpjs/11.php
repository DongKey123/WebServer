<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <h1>JavaScript</h1>
    <ul>
      <script>
        list = new Array("이름1","이름2","이름3","이름4","이름5");
        i = 0;
        while(i < list.length)
        {
          document.write("<li>"+list[i]+"</li>");
          i++;
        }
      </script>
    </ul>
    <h1>PHP</h1>
    <ul>
      <?php
        $list = array("이름1","이름2","이름3","이름4","이름5");
        $i = 0;
        while($i < count($list))
        {
          echo "<li>".$list[$i]."</li>";
          $i++;
        }
       ?>
     </ul>
  </body>
</html>
