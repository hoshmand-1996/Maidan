<?php
    //connect to database.
    include 'dbh.inc.php';
    require_once 'function.inc.php';

    // We need to use sessions, should always start sessions using the below code.
    session_start();
    ob_start();

    // If the user is not logged in redirect to the login page...
    if (!isset($_SESSION['useruid'])) {
        header('Location: ../login.php');
        exit;
    }



        // error_reporting(E_ERROR | E_PARSE);

    // Report simple running errors
    // error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // Report all PHP errors
    // error_reporting(E_ALL);

    if(isset($_POST['submit'])){



        // if(empty($_POST['things_name']) || empty($_POST['thingType']) || empty($_POST['price']) || empty($_POST['type_of_price']) || empty($_POST['slct1']) || empty($_POST['slct2']) || empty($_POST['seller_name']) || empty($_POST['seller_tel'])){
        //     header("Location: ../edit_post.php?error=emptyinput");
        //     exit();
        // }
        // if(invalidNumber($seller_tel) == false){
        //     header("location: ../edit_post.php?error=invalidNumber");
        //     exit();
        // }

        $id = $_REQUEST['post_id'];

        $query1 = mysqli_query($conn, "SELECT * FROM post_info WHERE infoId = ".$id."");
        $row = mysqli_fetch_array($query1);

        $price = $_POST['price'];
        $note = $_POST['note'];
        $seller_name = $_POST['seller_name'];
        $seller_tel = $_POST['seller_tel'];
        $slct1 = $_POST['slct1'];
        $slct2 = $_POST['slct2'];
        $things_name = $_POST['things_name'];
        $thingType = $_POST['thingType'];
        $city = $row['city'];
        $town = $row['town'];
        $slct3 = $row['thingsName'];
        $slct4 = $row['thingType'];
        $typePriceDB = $row['typePrice'];
        $typePrice = $_POST['type_of_price'];

        // echo $id."</br>";
        // echo $things_name."</br>";
        // echo $thingType."</br>";
        // echo $price."</br>";
        // echo $type_of_price."</br>";
        // echo $note."</br>";
        // echo $city."</br>";
        // echo $town."</br>";
        // echo $seller_name."</br>";
        // echo $seller_tel;

        if(empty($_POST['type_of_price'])){
            $typePrice = $typePriceDB;
        }
        if(empty($_POST['slct1']) || empty($_POST['slct2'])){
            $slct1 = $city;
            $slct2 = $town;
        }
        if(empty($_POST['thingType']) || empty($_POST['things_name'])){
            $things_name = $slct3;
            $thingType = $slct4;
        }else{
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
        }


        $query = "UPDATE post_info SET thingsName = '".$things_name."', thingType = '".$thingType."', price = '".$price."', typePrice = '".$typePrice."', note = '".$note."', city = '".$slct1."', town = '".$slct2."', sellerName ='".$seller_name."', sellerTel = '".$seller_tel."', keywords = '".$keywords."' WHERE infoId = '".$id."'";
        $result = mysqli_query($conn, $query) or die("select faild");

        if($result){
            header('Location: ../administrator.php?update=success');	
            exit();
        }else{
            header('Location: ../administrator.php?update=error');	
            exit();
        }
        
    }

    //Close MySQL connection.
    $conn -> close();
?>

