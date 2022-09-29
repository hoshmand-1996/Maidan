<?php
    //connecting to the database
    include 'dbh.inc.php';
    require_once 'function.inc.php';
    session_start();

    // error_reporting(E_ERROR | E_PARSE);

    // Report simple running errors
    // error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // Report all PHP errors
    // error_reporting(E_ALL);

    if(isset($_POST['submit'])){

        $things_name = $_POST['things_name'];
        $thingType = $_POST['thingType'];
        $price = $_POST['price'];
        $type_of_price = $_POST['type_of_price'];
        $note = $_POST['note'];
        $slct1 = $_POST['slct1'];
        $slct2 = $_POST['slct2'];
        $seller_name = $_POST['seller_name'];
        $seller_tel = $_POST['seller_tel'];
        // $random_number = rand(100000, 999999);
        $random_number = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", 5)), 0, 6);
        $post_number = 10000;

        if(empty($_POST['things_name']) || empty($_POST['thingType']) || empty($_POST['price']) || empty($_POST['type_of_price']) || empty($_POST['slct1']) || empty($_POST['slct2']) || empty($_POST['seller_name']) || empty($_POST['seller_tel'])){
            header("Location: ../submit_form.php?error=emptyinput");
            exit();
        }

        if(empty($_FILES['file']['name'][0])){ 
            header("Location: ../submit_form.php?error=chooseFile");
            exit();
        }

        // if(invalidName($things_name) !== false){
        //     header("location: ../submit_form.php?error=invalidThingsName");
        //     exit();
        // }


        if(invalidNumber($seller_tel) == false){
            header("location: ../submit_form.php?error=invalidNumber");
            exit();
        }

        // these under conditional are used for set keywords to database.
        $keywords = "";
        if($thingType == 'پەلەوەر'){
            if($things_name == 'مریشک و کەڵەشێر'){
                $keywords = 'مریشك و کەڵەشێر مریشکوکەڵەشێر کەلەشیر کەڵەشئر mrishk w kalasher';
            }
            elseif($things_name == 'قەل'){
                $keywords = 'قەل عەلەشیش قەلەمون qal alashish qalamwn';
            }
            elseif($things_name == 'قاز'){
                $keywords = 'قاز qaz';
            }
            elseif($things_name == 'مراوی'){
                $keywords = 'مراوی mrawy mrawi';
            }
            elseif($things_name == 'جۆری تر'){
                $keywords = 'جۆری تر';
            }
        }
        elseif($thingType == 'باڵندە'){
            if($things_name == 'کۆتر'){
                $keywords = 'کۆتر kotr';
            }
            elseif($things_name == 'کەناری'){
                $keywords = 'کەناری kanary';
            }
            elseif($things_name == 'بوکەسوورە'){
                $keywords = 'بوکەسوورە بوکەسورە بووکەسورە bukaswra bwkaswra bukasura bwkasura';
            }
            elseif($things_name == 'فنس'){
                $keywords = 'فنس fns fins';
            }
            elseif($things_name == 'تووتی'){
                $keywords = 'تووتی توتی tuty tuti twti twty';
            }
            elseif($things_name == 'کۆکتێل'){
                $keywords = 'کۆکتێل کۆکتیل کوکتیل کؤکتیل کؤکتئل koktel koktil koktl';
            }
            elseif($things_name == 'غەندور'){
                $keywords = 'غەندور غەندوور خەندور خەندوور xandwr xandur xandor khandwr khandur khandor';
            }
            elseif($things_name == 'تەیرەحوب'){
                $keywords = 'تەیرەحوب تەیرەحووب tairahub tairahwb taira7ub taira7wb';
            }
            elseif($things_name == 'باز'){
                $keywords = 'باز داڵ هەڵۆ واشە باشوکە baz halo dal washa bashwka bashuka';
            }
            elseif($things_name == 'مینا'){
                $keywords = 'مینا mina';
            }
            elseif($things_name == 'خورماخۆرە'){
                $keywords = 'خورماخۆرە بول بول بولبول xurmaxora xwrmaxora bwlbwl bulbul bolbol';
            }
            elseif($things_name == 'جۆری تر'){
                $keywords = 'جۆری تر';
            }
        }
        elseif($thingType == 'ئاژەڵ'){
            if($things_name == 'مەیموون'){
                $keywords = 'مەیموون مەیمون maimon maimwn maimun';
            }
            elseif($things_name == 'سمۆرە'){
                $keywords = 'سمۆرە سمؤرە smora';
            }
            elseif($things_name == 'کەروێشك'){
                $keywords = 'کەروێشک کەرویشک کەروئشک karweshk';
            }
            elseif($things_name == 'ئەسپ'){
                $keywords = 'ئەسپ asp';
            }
            elseif($things_name == 'پشیلە'){
                $keywords = 'پشیلە pshila';
            }
            elseif($things_name == 'مەڕ'){
                $keywords = 'مەڕ مەر mar';
            }
            elseif($things_name == 'بزن'){
                $keywords = 'بزن bzn';
            }
            elseif($things_name == 'مانگا'){
                $keywords = 'مانگا manga';
            }
            elseif($things_name == 'جۆری تر'){
                $keywords = 'جۆری تر';
            }
        }
        elseif($thingType == 'گیانداری ئاویی'){
            if($things_name == 'ماسی'){
                $keywords = 'ماسی masy masi';
            }
            elseif($things_name == 'کیسەڵ'){
                $keywords = 'کیسەڵ کیسەڵ kisal kesal';
            }
            elseif($things_name == 'ئەستێرە'){
                $keywords = 'ئەستێرە astera';
            }
            elseif($things_name == 'حەوزی ماسی'){
                $keywords = 'حەوزی ماسی عەشیای ماسی ئەشایی ماسی hawzy masy ashyay masi';
            }
            elseif($things_name == 'جۆری تر'){
                $keywords = 'جۆری تر';
            }
        }
        elseif($thingType == 'جۆری تر'){
            $keywords = 'جۆری تر';
        }

        // check the code post inside the database exist or not.
        // if(codeExists($conn, $random_number) !== false){
        //     $random_number = rand(100000, 999999);
        //     if(codeExists($conn, $random_number) !== false){
        //         header("Location: ../submit_form.php?error=codeExist");
        //         exit();
        //     }
        // }
        
        // this code are used for set a number code to any post
        // if the table is not empty get the post_number of the last row and increase it by one, but
        // if the table is empty set "100235" code to the first post.
        $select = "SELECT * FROM post_info ORDER BY infoId DESC LIMIT 1";
        $second_result = mysqli_query($conn, $select);

        if($row = mysqli_fetch_assoc($second_result)){
            $sum = $row['post_number'];
            $increase_sum = $sum + 1;
        }else{
            $increase_sum = 100235;
        }

        // insert the informations to database.
        $query = "INSERT INTO post_info (thingsName, thingType, price, typePrice, note, city, town, sellerName,post_code,post_number,keywords, sellerTel) VALUES ('$things_name','$thingType', '$price', '$type_of_price', '$note', '$slct1', '$slct2', '$seller_name','$random_number','$increase_sum','$keywords', '$seller_tel')";
        $result = mysqli_query($conn, $query);


        //this is for Get the last id from database.
        $last_id = mysqli_insert_id($conn);

        if($result){
            $fileCount = count($_FILES['file']['name']);
            for($i=0; $i<$fileCount; $i++){

                $fileName = $_FILES['file']['name'][$i];
                $size = $_FILES['file']['size'][$i];
                $type = $_FILES['file']['type'][$i];
                $tmp = $_FILES['file']['tmp_name'][$i];

                $explode = explode('.', $fileName);
                $ext = end($explode);
                $path = '../uploads/';
                $path_image = basename( $explode[0] . time() .'.'. $ext);
                $path = $path . basename( $explode[0] . time() .'.'. $ext);
                $errors = array();

                $second_query = "INSERT INTO post_img (imageName, infoId) VALUES ('$path_image', '$last_id')";
                $second_result = mysqli_query($conn, $second_query);

                if(empty($_FILES['file']['tmp_name'][$i])) {
                    $errors[] = 'Please choose at least 1 file to be uploaded.';
                }
                if(empty($errors)) 
                {
            
                    if(!file_exists($path))
                    {
            
                        if(move_uploaded_file($tmp, $path)) 
                        {
                            echo '<p>The file <b>'.$fileName.'</b> successfully uploaded</p>';

                            $a = "SELECT * FROM post_info ORDER BY infoId DESC LIMIT 1";
                            $b = mysqli_query($conn, $a);

                            $r = mysqli_fetch_array($b);

                            // we are used the session for set post_code to the "submit_form.php" 
                            // but look at this point "we don't destroy the session from this page because we sent data for another pages".
                            $_SESSION['post_code'] = $r['post_code'];
                        }
                        else
                        {
                            echo 'Something went wrong while uploading the file <b>'.$fileName.'</b>';
                        }
                    }
                }
                else
                {
                    foreach($errors as $error)
                    {
                        echo '<p>'.$error.'<p>';
                    }
                }
            }
            header("Location: ../index.php?error=none");
            exit();
            // echo "<script>alert('Inserted Successfully!');</script>";
        }else{
            echo "Error: Couldn't insert to the database.";
            // header("Location: ../submit_form.php?error=none");

        }
    }

    //Close MySQL connection.
    $conn -> close();
?>