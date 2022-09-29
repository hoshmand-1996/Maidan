<?php
//connect to database.
include('dbh.inc.php');
$id = $_REQUEST['id'];  //this REQUEST id is a variable in administrator_detail.php from DELETE URL.

$result = mysqli_query($conn, "DELETE FROM post_info WHERE infoId = ".$id."");

if($result){
    $second_result = mysqli_query($conn, "DELETE FROM post_img WHERE infoId = ".$id."");
}
else{
    echo "ERROR: Could not able to execute " ;

}
mysqli_close($conn);
header('Location: ../administrator.php?delete=success');
?>