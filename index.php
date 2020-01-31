<html>
  <head>
    <title>PROGRAM IDEAS</title>
  </head>
  <body>
     <?php
      echo "<div style='text-align:center'>";
      echo "<h1>PROGRAM IDEAS</h1>";
      echo "<h3>type in your ideas here...</h3>";
      echo "<form action='index.php' method='post'>";
      echo "<input id='name' name='name' placeholder='Type in your name'>";
      echo "<input id='idea' name='idea' placeholder='Type in your program idea' style='width:300'>";
      echo "<input type='submit' value='Send your idea'>";
      echo "</form>";
      echo "</div>";
      $name=$_POST["name"];
      $idea=$_POST["idea"];
      if ($name=='' || $idea==''){
        return;
      }
      else {
        $ideas=@fopen("ideas.txt","a+");
        fwrite($ideas,$name.":    ".$idea."<br>");
      }
      echo file_get_contents("ideas.txt")
     ?>
  </body>
</html>
