
<html>
  <head>
    <meta charset="utf-8">
    <title>CODE BASE</title>
      <link rel="stylesheet" href="main.css">
  </head>
  <body>
      <h1>These Are Your Codes</h1>
    <a id="returnBtn" href="index.php">ADD CODE</a>
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
            echo '<div class="snippet">';
            echo "<h3>" . $row['title'] ."</h3>" ;
            echo "<h5>" . $row['commit_date'] . "</h5>";
            echo "<p>" . $row['body'] . "</p>";
            echo '</div>';
        }
    }
    //this ends the non mandetory section for checking data
 
     ?>
  </body>
</html>
