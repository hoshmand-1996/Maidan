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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">  <!-- Bootstrap Offline -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap Online -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
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


  <!-- Start post section -->
  <section class="post">
   <div class="container">
      <div class="text-end my-5">
            <!-- Row Start -->
            <div class="row">

                <?php

                    $output='';
                    if(isset($_POST['search'])){
                        $search=$_POST['text'];
                        // $search= preg_replace("#[^0-9a-z]#i","",$search);
    
                        $query= mysqli_query($conn,"SELECT * FROM post_info WHERE thingsName LIKE '%$search%' OR thingType LIKE '%$search%' OR post_number LIKE '%$search%' OR keywords LIKE '%$search%' ") or die("couldnt search");
                        $count= mysqli_num_rows($query);

                        if ($count ==0) {
                            $output= '<div class="alert alert-warning" role="alert"> ببورە هچ زانیارییەک لەم شێوەیە نییە! </div>';
						}else{
                            while($row=mysqli_fetch_array($query)){
                                $test = $row['infoId'];

                                $second_query = "SELECT * FROM post_img WHERE infoId = $test LIMIT 1";
                                $second_result = mysqli_query($conn, $second_query);
        
                                while($rows = mysqli_fetch_assoc($second_result)){
                                    echo 
                                    "
                                        <div class='col-lg-4 col-md-6 col-sm-12 my-col'>
                                            <div class='card mb-5 shadow-sm my-card'>
                                                <a href='detail_post.php?id=".$row['infoId']."'>
                                                    <img src='uploads/",$rows['imageName'],"' class='img-fluid post-img' style='width:100%'>
                                                    <div class='content'>
                                                        <p class='name'>".$row['thingsName']."</p>
                                                        <p class='price'>".$row['price']."    ".$row['typePrice']."</p>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    ";
                                }
                            }
                        }
                    }
					print ("$output");

                    // close connection
                    mysqli_close($conn);
                ?>

            </div>
            <!-- Row End -->

          <div class="pagination-content">
            <div id="pagination-container">

            </div>
          </div>
      </div>
   </div>
  </section>
  <!-- End post section -->

  <!-- Start Footer Section -->
  <section class="my-footer">
   <div class="my-container">
       <div class="all-rows">

           <div class="my-row">
               <div class="my-footer-col">
                   <h4>جۆری پۆست</h4>
                   <span class="under-line"></span>
                   <ul>
                       <li><a href="index.php?state=balnda">باڵندە</a></li>
                       <li><a href="index.php?state=palawar">پەلەوەر</a></li>
                       <li><a href="index.php?state=azhal">ئاژەڵ</a></li>
                       <li><a href="index.php?state=awy">گیانداری ئاویی</a></li>
                       <li><a href="index.php?state=jorytr">جۆری تر</a></li>
                   </ul>
               </div>
               <div class="my-footer-col">
                   <h4>باڵندە</h4>
                   <span class="under-line"></span>
                   <ul>
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
               </div>
               <div class="my-footer-col">
                   <h4>پەلەوەر</h4>
                   <span class="under-line"></span>
                   <ul>
                     <li class="menu-item"><a href="index.php?state=mrishk">مریشک و کەڵەشێر</a></li>
                     <li class="menu-item"><a href="index.php?state=qal">قەل</a></li>
                     <li class="menu-item"><a href="index.php?state=qaz">قاز</a></li>
                     <li class="menu-item"><a href="index.php?state=mrawy">مراویی</a></li>
                     <li class="menu-item"><a href="index.php?state=jorytr">جۆری تر</a></li>
                   </ul>
               </div>
               <div class="my-footer-col">
                   <h4>ئاژەڵ</h4>
                   <span class="under-line"></span>
                   <ul>
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
               </div>
               <div class="my-footer-col">
                   <h4>گیانداری ئاویی</h4>
                   <span class="under-line"></span>
                   <ul>
                   <li class="menu-item"><a href="index.php?state=masy">ماسی</a></li>
                     <li class="menu-item"><a href="index.php?state=jorytr">جۆری تر</a></li>
                   </ul>
               </div>
           </div>
           <!-- second row -->
           <div class="my-row">
                <div class="third-row">
                    <h4>بەشەکان</h4>
                    <ul>
                        <li><a href="how_to.php">چۆنێتی پۆستکردن</a></li>
                        <li><a href="about.php">دەربارەی ئێمە</a></li>
                        <li><a href="contact.php"> پەیوەندیمان پێوەبکە </a></li>
                        <li><a href="ruls.php"> یاساوڕێنمایی </a></li>
                        <li><a href="login.php"> چونەژورەوە </a></li>
                    </ul>
                </div>
            </div>
            <!-- third row -->
           <div class="my-row">
               <div class="second-row">
                   <div class="my-social">
                       <h4>پەیوەندیمان پێوە بکە</h4>
                       <div class="my-social-links">
                           <a href="#"><i class="fab fa-facebook-f"></i></a>
                           <a href="#"><i class="fab fa-twitter"></i></a>
                           <a href="#"><i class="fab fa-instagram"></i></a>
                           <a href="#"><i class="fab fa-linkedin-in"></i></a>
                       </div>
                   </div>
                   <!-- <div class="our-app">
                       <h4>ئەپڵیکەیشنی مەیدان دابەزێنە</h4>
                       <a href="#"><img src="logo/ios.png" alt="" srcset=""></a>
                       <a href="#"><img src="logo/android.png" alt="" srcset=""></a>
                   </div> -->
               </div>
           </div>
       </div>
   </div>
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
</body>
</html>