
<html>
  <head>
    <meta charset="utf-8">
    <title>CODE BASE</title>
  </head>
  <body>
      <h1>These Are Your Codes</h1>
    <a href="index.php">Return 
        Home</a>
      <br>
      <?php
      include_once 'connection.php';
    //write an sql statement to pull all information from table
   // $sql = "SELECT * FROM code;";
      $sql  = 'SELECT * FROM `code`';
    //variable to query the code
    //conn istaken from the connection file
    $result = mysqli_query($conn, $sql); 
    
    
    // this begins the section where we check for data
    $resultCheck = mysqli_num_rows($result);
    
    if ($resultCheck > 0){
        while ($row = mysqli_fetch_assoc($result)){
            echo "<br/>";
            echo $row['title'];
            echo "<br/>";
            echo $row['commit_date'];
            echo "<br/>";
            echo $row['body'];
            echo "<br/>";
        }
    }
    //this ends the non mandetory section for checking data
 
     ?>
  </body>
</html>
