<?php 
    include_once 'connection.php';
    //inserting the form inputs as variables
    $title = $_POST['title'];
    $body = $_POST['body'];
    $commit_date = $_POST['commit_date'];

    $sql = "INSERT INTO code (title, body, commit_date) VALUES ('$title', '$body', '$commit_date');";

    mysqli_query($conn, $sql);
    //take us back home after submition
   // header("Location: allcode.php?commit=success");
?>
<html>
<head>
    <title>Code Base</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
<h1>611 Code Base</h1>
    <a id="allcode" href="allcode.php">
        <button>+</button>
    </a>
<?php include ("body.php");?>

</body>
</html>



