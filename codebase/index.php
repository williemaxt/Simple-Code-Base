<?php 
    include_once 'connection.php';
    //inserting the form inputs as variables
    $title = $_POST['title'];
    $body = $_POST['body'];
    $commit_date = $_POST['commit_date'];
    #this line above (line 6) is saying post the commit date variable into sql table
    #this line below (line 8) is telling the commit date variable what the format is for both the date and time.
    $commit_date = date("Y-m-d h:i:s");


    $sql = "INSERT INTO code (title, body, commit_date) VALUES ('$title', '$body', '$commit_date');";
    mysqli_query($conn, $sql);
    //take us back home after submission
   // header("Location: allcode.php?commit=success");

?>

<html>
<head>
    <title>Code Base</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>CODE BASE</h1>
    <a id="allcode" href="allcode.php">
        <img src="icon-menu.png">
    </a>
<?php include ("body.php");?>

</body>
</html>
