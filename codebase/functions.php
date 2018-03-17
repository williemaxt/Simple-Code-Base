<?php
/**
 * Created by PhpStorm.
 * User: william
 * Date: 3/13/18
 * Time: 6:37 PM
 */
//add projects to the database
function add_code($title, $body, $commit_date) {
    //incude our db connection form connection.php
    include ('connection.php');

    $sql = ' INSERT INTO code(title, body, commit_date) VALUES(?,?,?)';

    try {
        $results = $db->prepare($sql);
        $results->bindValue(1, $title, PDO::PARAM_STR);
        $results->bindValue(2, $body, PDO::PARAM_STR);
        $results->bindValue(3, $commit_date, PDO::PARAM_STR);
        $results->execute();
    } catch (Exception $e) {
        echo "Error!: " . $e->getMessage() . "<br />";
        return false;
    }
    return true;

}



function get_code($title, $body, $commit_date){
  //incude our db connection form connection.php
    include ('connection.php');

    $sql = ' INSERT INTO code(title, body, commit_date) VALUES(?,?,?)';

  try {
    $results = $db->prepare($sql);
    $results->bindValue(1, $title, PDO::PARAM_STR);
    $results->bindValue(2, $body, PDO::PARAM_STR);
    $results->bindValue(3, $commit_date, PDO::PARAM_STR);
    $results->execute();
  } catch (Exception $e) {
    echo "Error!: " . $e->getMessage() . "<br />";
    return false;
  }
    return true;

}
?>