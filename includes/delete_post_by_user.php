<?php
    include 'dbh.inc.php';

    if(isset($_POST['submit'])){

        // we should cnvert this code to string because of the query.
        $code = strval($_POST['code']);

        // if the input of the form is empty.
        if(empty($_POST['code'])){
            header("Location: ../how_to_delete.php?error=emptyInput");
            exit();
        }

        // if the post code dose not exist.
        if(codeExists($conn, $code) == false){
            header("location: ../how_to_delete.php?error=invalid_post_code");
            exit();
        }

        // this query is using for deleting the post by post code
        $query = ("DELETE FROM post_info WHERE post_code = '$code'");
        $result = mysqli_query($conn, $query);

        // if the post is deleted then go to the home page and show an alert.
        if($result){
            header("location: ../index.php?error=deleted_post");
            exit();
        }

    }


    // this function is using for check the post code from the table
    function codeExists($conn, $code){
        $sql = "SELECT * FROM post_info WHERE post_code = ?;";
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../how_to_delet.php?error=stmtFaild");
            exit();
        }
    
        mysqli_stmt_bind_param($stmt, "s", $code);
        mysqli_stmt_execute($stmt);
    
        $resultData = mysqli_stmt_get_result($stmt);
    
        if($row = mysqli_fetch_assoc($resultData)){
            return $row;
        }
        else{
            $result = false;
            return $result;
        }
    
        // close the stmt 
        mysqli_stmt_close($stmt);

        
    }

?>