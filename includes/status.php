<?php
    //connect to database.
    include 'dbh.inc.php';

    $id = $_REQUEST['id'];  //this REQUEST id is a variable in administrator_detail.php from DELETE URL.

    $query_select = "SELECT * FROM post_info WHERE infoId = ".$id."";
    $result_select = mysqli_query($conn, $query_select);
    $row = mysqli_fetch_assoc($result_select);

    if($row['status'] == 'private'){
        $query = "UPDATE post_info SET status = 'public' WHERE status = 'private' AND infoId = ".$id."";
        $result = mysqli_query($conn, $query);

        if($result){
            header('Location: ../administrator.php?update=success');
            exit();
        }
    }else{
        $query = "UPDATE post_info SET status = 'private' WHERE status = 'public' AND infoId = ".$id."";
        $result = mysqli_query($conn, $query);

        if($result){
            header('Location: ../private_list.php?update=success');
            exit();
        }
    }


    if(!$result){
        header('Location: ../private_list.php?update=error');
        exit();
    }

    mysqli_close($conn);

?>