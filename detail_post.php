<?php
    //connect to database.
    include 'includes/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dropdown Menu Responsive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> <!-- bootstrap 4 cdn W3school MaxCDN jQuery library-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script> <!-- fancybox cdn this is using for touch the images slides-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css"> <!-- fancybox cdn this is using for touch the images slides-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!-- bootstrap 4 cdn W3school MaxCDN -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">  <!--In Finaly Change This Link To Online -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/detail.css">
</head>
<body>

  <!-- Start header -->
  <header class="header">
     <div class="container">
        <div class="header-main">
           <!-- Logo  -->
           <div class="logo">
              <a href="index.php"><span class="normal">M</span><span class="small">AIDAN</span></a>
           </div>
           <!-- Humberger Menu -->
           <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>
           <!-- navigation menu start -->
           <nav class="nav-menu">
            <div class="close-nav-menu">
               <img src="img/close.svg" alt="close">
            </div>

            <!-- second-search input start -->
            <div class="second-search">
                <form action="search.php" method="post">
                    <input id="text" class="search-input" type="text" name="text" value="" placeholder="گەڕان" autocomplete="off"/>
                    <button id="search" class="search-btn" name="search" type="submit"><i class="fal fa-search"></i></button>
                </form>
            </div>
            <!-- second-search input end -->
            
             <ul class="menu">
                <li class="menu-item">
                   <a href="index.php"><i class="fas fa-home menu-icon"></i> سەرەتا </a>
                </li>
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu"><i class="fas fa-dove menu-icon"></i>باڵندە<i class="plus"></i></a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="index.php?state=balnda">هەمووجۆرەکانی باڵندە</a></li>
                     <li class="menu-item"><a href="index.php?state=kotr">کۆتر</a></li>
                     <li class="menu-item"><a href="index.php?state=kanary">کەناری</a></li>
                     <li class="menu-item"><a href="index.php?state=bwkasura">بوکەسوورە</a></li>
                     <li class="menu-item"><a href="index.php?state=fins">فنس</a></li>
                     <li class="menu-item"><a href="index.php?state=twty">تووتی</a></li>
                     <li class="menu-item"><a href="index.php?state=koktel">کۆکتێل</a></li>
                     <li class="menu-item"><a href="index.php?state=khandwr">غەندور</a></li>
                     <li class="menu-item"><a href="index.php?state=tairahub">تەیرەحوب</a></li>
                     <li class="menu-item"><a href="index.php?state=baz">باز</a></li>
                     <li class="menu-item"><a href="index.php?state=mina">مینا</a></li>
                     <li class="menu-item"><a href="index.php?state=xwrmaxora">خورماخۆرە</a></li>
                     <li class="menu-item"><a href="index.php?state=jorytr">جۆری تر</a></li>
                 </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu"><i class="fa fa-duck menu-icon"></i> پەلەوەر<i class="plus"></i></a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="index.php?state=palawar">هەمووجۆرەکانی پەلەوەر</a></li>
                     <li class="menu-item"><a href="index.php?state=mrishk">مریشک و کەڵەشێر</a></li>
                     <li class="menu-item"><a href="index.php?state=qal">قەل</a></li>
                     <li class="menu-item"><a href="index.php?state=qaz">قاز</a></li>
                     <li class="menu-item"><a href="index.php?state=mrawy">مراویی</a></li>
                     <li class="menu-item"><a href="index.php?state=jorytr">جۆری تر</a></li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu"><i class="fas fa-rabbit menu-icon"></i> ئاژەڵ <i class="plus"></i></a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="index.php?state=azhal">هەمووجۆرەکانی ئاژەڵ</a></li>
                       <li class="menu-item"><a href="index.php?state=smora">سمۆرە</a></li>
                       <li class="menu-item"><a href="index.php?state=maimon">مەیمون</a></li>
                       <li class="menu-item"><a href="index.php?state=karweshk">کەروێشک</a></li>
                       <li class="menu-item"><a href="index.php?state=asp">ئەسپ</a></li>
                       <li class="menu-item"><a href="index.php?state=pshila">پشیلە</a></li>
                       <li class="menu-item"><a href="index.php?state=mar">مەڕ</a></li>
                       <li class="menu-item"><a href="index.php?state=bzn">بزن</a></li>
                       <li class="menu-item"><a href="index.php?state=manga">مانگا</a></li>
                       <li class="menu-item"><a href="index.php?state=jorytr">جۆری تر</a></li>
                   </ul>
                </li>
                <li class="menu-item menu-item-has-children menu-icon">
                   <a href="#" data-toggle="sub-menu"><i class="fas fa-fish menu-icon"></i>گیانداری ئاویی<i class="plus"></i></a>
                   <ul class="sub-menu">
                     <li class="menu-item"><a href="index.php?state=awy">هەمووجۆرەکانی گیانداری ئاویی</a></li>
                     <li class="menu-item"><a href="index.php?state=masy">ماسی</a></li>
                     <li class="menu-item"><a href="index.php?state=jorytr">جۆری تر</a></li>
                 </ul>
                </li>
                <li class="menu-item">
                   <a href="submit_form.php"><i class="fas fa-upload menu-icon"></i>لێرە پۆست بنێرە</a>
                </li>
                <li class="menu-item remove">
                  <a href="about.php"><i class="fas fa-info-circle menu-icon"></i></i>دەربارەی ئێمە</i></a>
               </li>
               <li class="menu-item remove">
                  <a href="contact.php"><i class="fas fa-address-book menu-icon"></i>پەیوەندیمان پێوە بکە</a>
               </li>
               <li class="menu-item remove">
                  <a href="ruls.php"><i class="fas fa-gavel menu-icon"></i>یاساوڕێنمایی</a>
               </li>
               <li class="menu-item remove">
                  <a href="how_to.php"><i class="fas fa-question-circle menu-icon"></i>چۆنێتی پۆست کردن</a>
               </li>
               <li class="menu-item">
                  <a href="how_to_delete.php"><i class="fas fa-trash menu-icon"></i>سڕینەوەی پۆست </a>
               </li>
             </ul>
           </nav>
           <!-- navigation menu end -->

           <!-- first-search input start -->
           <div class="first-search">
               <form action="search.php" method="post">
                    <input id="text" class="search-input" type="text" name="text" value="" placeholder="گەڕان" autocomplete="off"/>
                    <button id="search" class="search-btn" name="search" type="submit"><i class="fal fa-search"></i></button>
               </form>
            </div>
           <!-- first-search input end -->
        </div>
     </div>
  </header>
  <!-- End header -->

  <!-- Start Detail Section -->
  <section class="detail-post">

  <?php
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $query = "SELECT * FROM post_info WHERE infoId=".$id."";
        $result = mysqli_query($conn, $query) or die("select Faild");

        $row = mysqli_fetch_array($result);

        echo '

            <div class="title-post">
                <p><a href="index.php">سەرەتا</a><span>/</span></p> <p><a href="#">'.$row['thingType'].'</a><span>/</span></p> <p><a href="#">'.$row['thingsName'].'</a></p>
            </div>
        ';
    }
  ?>

    <div class="detail">

    <div id="slideshow1" class="slideshow">

        <?php
            if(isset($_GET['id'])){
                $second_query = "SELECT imageName FROM post_img WHERE infoId = ".$row['infoId'];
                $second_result = mysqli_query($conn, $second_query);

                // this is used for counting the images.
                $second_result3 = mysqli_query($conn, $second_query);
                while($result_length = mysqli_fetch_array($second_result3))
                {
                $row_length[] = $result_length;
                }
                $length = count($row_length);

            
                $a = 1; //this variable is used for counting the images
                while($rows = mysqli_fetch_assoc($second_result))
                {

                    // we used this conditional statements for show and hide the number of the images.
                    // show the numbers if the length of image grater than one.
                    if($length != 1){
                        echo 
                        "
                        <div class='mySlides slide-fade'>
                            <div class='numbertext'>".$a++." / $length</div>
                            <a href='uploads/",$rows['imageName'],"' class='fancybox' data-fancybox='gallery1'>
                                <img src='uploads/",$rows['imageName'],"' style='width:100%'>
                            </a>
                        </div>
                        ";
                    }
                    else{
                        echo 
                        "
                        <div class='mySlides slide-fade'>
                            <a href='uploads/",$rows['imageName'],"' class='fancybox' data-fancybox='gallery1'>
                                <img src='uploads/",$rows['imageName'],"' style='width:100%'>
                            </a>
                        </div>
                        ";
                    }
                }

                // this is used for printing the dots uner the image slides while the length of the images grater then one.
                if($length != 1){
                    $second_result2 = mysqli_query($conn, $second_query);
                    echo "<br><div class='dots' style='text-align:center'>";
                    while($rows = mysqli_fetch_assoc($second_result2))
                    {
                        echo "<span class='dot'></span>";
                    }
                    echo "</div>";

                    echo '
                        <div class="btn">
                            <a class="prev" onclick="plusSlides(-1,slideshow1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1, slideshow1)">&#10095;</a>
                        </div>
                    ';
                }

            }

            
        ?>



        </div>

        <div class="content-post">

            <div class="all-items">
                <!-- this under field should be Optional, if the user won't put there name we should automaticlly puting "------" insted there name. -->
                <?php

                    if(!isset($_GET['id'])){
                        echo "<h1 class='text-danger'>Please check details and try again</h1>";

                    }else{

                        echo 
                        '
                            <div class="name-seller item">
                                <i class="fas fa-user-circle"></i><p>ناوی فرۆشیار:  '.$row['sellerName'].' </p>
                            </div>
                            <div class="price item">
                                <i class="fas fa-usd-circle"></i><p> '.$row['price'].' '.$row['typePrice'].' </p>
                            </div>
                            <div class="location item">
                                <i class="fas fa-map-marker-alt"></i><p> '.$row['city'].' - '.$row['town'].' </p>
                            </div>
                            <div class="code-post item">
                                <p>کۆد:  '.$row['post_number'].'<p>
                            </div>
                            <div class="name-thing item">
                                <p>ناو: '.$row['thingsName'].'</p>
                            </div>
                            <div class="extra-info item">
                                <p>'.$row['note'].'</p>
                            </div>

                        ';
                    }

                ?>
            </div>
                <a href="tel:<?php echo $row['sellerTel']; ?>"><button name="#"><i class="fal fa-phone-volume"></i> &nbsp;پەیوەندە بکە بەخاوەنەکەی <p><?php echo $row['sellerTel']; ?></p></button></a>
            </div>
        <br>

    </div>
  </section>
  <!-- End Detail Section -->

  <!-- Start post section -->


                <?php
                    // we used the infoId Not IN (value) for not select the selected post. 
                    if($row['thingType'] == 'palawar'){
                        $first_query = "SELECT * FROM post_info WHERE infoId NOT IN ($id) and status ='public' and thingType = 'پەلەوەر'";
                        $first_result = mysqli_query($conn, $first_query);
                    }
                    if($row['thingType'] == 'balnda'){
                        $first_query = "SELECT * FROM post_info WHERE infoId NOT IN ($id) and status ='public' and thingType = 'باڵندە'";
                        $first_result = mysqli_query($conn, $first_query);
                    }
                    if($row['thingType'] == 'azhal'){
                        $first_query = "SELECT * FROM post_info WHERE infoId NOT IN ($id) and status ='public' and thingType = 'ئاژەڵ'";
                        $first_result = mysqli_query($conn, $first_query);
                    }
                    if($row['thingType'] == 'awy'){
                        $first_query = "SELECT * FROM post_info WHERE infoId NOT IN ($id) and status ='public' and thingType = 'awy'";
                        $first_result = mysqli_query($conn, $first_query);
                    }


                    
                    // these under code are used for retrieve same data when you are selected.


                    // if(mysqli_fetch_array($first_result)){
                    //     echo "
                    //     <section class='post details-post'>
                    //         <div class='container'>
                    //         <div class='text-end my-5'>
                    //                 <div class='row'>
                    //     ";
                        
                    //     while($row = mysqli_fetch_array($first_result)){
                    //         $test = $row['infoId'];
    
                    //         $second_query = "SELECT * FROM post_img WHERE infoId = $test LIMIT 1";
                    //         $second_result = mysqli_query($conn, $second_query);
    
                    //         while($rows = mysqli_fetch_assoc($second_result)){
                    //             echo 
                    //             "
                    //                 <div class='col-lg-4 col-md-6 col-sm-12 my-col'>
                    //                     <div class='card mb-5 shadow-sm my-card'>
                    //                         <a href='detail_post.php?id=".$row['infoId']."'>
                    //                             <img src='uploads/",$rows['imageName'],"' class='img-fluid post-img' style='width:100%'>
                    //                             <div class='content'>
                    //                                 <p class='name'>".$row['thingsName']."</p>
                    //                                 <p class='price'>".$row['price']."    ".$row['typePrice']."</p>
                    //                             </div>
                    //                         </a>
                    //                     </div>
                    //                 </div>
                    //             ";
                    //         }
                    //     }
                    //         echo "
                    //                 </div>
                    //                 </div>
                    //             </div>
                    //         </section>
                    //         ";
                    // }
                    

                ?>

          <div class="pagination-content">
            <div id="pagination-container">

            </div>

  <!-- End post section -->

  

  <!-- Start Footer Section -->
  <section class="my-footer">
   <div class="copy-right">
       <div class="text">
           <p>Copyright &copy; 2021 Maidan., &nbsp;&nbsp;Developed By: <a rel="nofollow noopener" href="https://www.facebook.com/hoshmand.soran.71" target="_blank"> Hoshmand Soran</a></p>
       </div>
   </div>
</section>

<!-- End Footer Section -->
 
 <!-- This script is used for Pagination -->
<script src="js/menu.js"></script>

<!-- These under scripts used for pagination  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>
<script src="js/pajination.js"></script>

<!-- this is for slider images -->
<script src="js/slider-image.js"></script>
</body>
</html>

<?php
    // close conneection
    mysqli_close($conn);
?>