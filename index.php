<?php
    //connect to database.
    include 'includes/dbh.inc.php';
    session_start();
    ob_start();
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

  <!-- this under link is used for remove console errors from inspect -->
  <link rel="shortcut icon" href="#">

  
  <!-- this under script is used for sweet alert for success the submit form from the "submit_form.php" -->
 <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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

                    // this code is useing for deleting the records after a week
                    // mysqli_query($conn,"DELETE FROM post_info WHERE dateAndTime < NOW() - INTERVAL 15 DAY");
                    // mysqli_query($conn,"DELETE FROM post_img WHERE dateAndTime < NOW() - INTERVAL 15 DAY");
                    // mysqli_query($conn,"DELETE FROM post_img WHERE infoId=".$id."");
                    // mysqli_query($conn,"DELETE FROM post_info WHERE thingsName='test'");
                    // mysqli_query($conn, "UPDATE post_info SET status = 'public' WHERE status = 'private'");

                    error_reporting(E_ERROR | E_WARNING | E_PARSE);   //for remove the warning. if you want remove Notices you can add E_NOTICE to this line.
                    error_reporting(0); //for removing all warring
                    // or you can using this sign "@" befor that variable whene have an error from of it. like the under line
                    // @$post_code = $_SESSION['post_code'];
            
                    // we are using session for geting the post_code from the submit_form.inc.php, to show the code to the user.
                    $post_code = $_SESSION['post_code'];

                    $first_query = "SELECT * FROM post_info WHERE status ='public'";
                    $first_result = mysqli_query($conn, $first_query);

                    if(isset($_GET["state"])){

                        $output='';

                        // parts of "Balnda"
                        if($_GET["state"] == "balnda"){
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingType ='balnda'";
                        }
                        else if($_GET["state"] == "kotr"){
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='کۆتر' OR thingsName='kotr'";
                        }
                        else if($_GET["state"] == "kanary"){
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='کەناری' OR thingsName='kanary'";
                        }
                        else if($_GET["state"] == "bwkasura"){
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='بوکەسورە' OR thingsName ='بووکەسورە' OR thingsName ='بوکەسوورە' OR thingsName='bukaswra' OR thingsName='bwkaswra' OR thingsName='bukasura' OR thingsName='bwkasura'";
                        }
                        else if($_GET["state"] == "fins"){                    
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='فنس' OR thingsName='fns' OR thingsName='fins'";
                        }
                        else if($_GET["state"] == "twty"){
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='تووتی' OR thingsName ='توتی' OR thingsName ='tuty' OR thingsName ='tuti' OR thingsName ='twti' OR thingsName='twty'";
                        }
                        else if($_GET["state"] == "koktel"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='کۆکتێل' OR thingsName ='کۆکتیل' OR thingsName ='کوکتیل' OR thingsName='koktel'";   
                        }
                        else if($_GET["state"] == "khandwr"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='غەندور' OR thingsName ='غەندوور' OR thingsName='xandwr' OR thingsName='xandur' OR thingsName='xandor' OR thingsName='khandwr' OR thingsName='khandur' OR thingsName='khandor'";
                        }
                        else if($_GET["state"] == "tairahub"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='تەیرەحوب' OR thingsName ='تەیرەحووب' OR thingsName ='tairahub' OR thingsName ='tairahwb' OR thingsName ='taira7ub' OR thingsName='taira7wb'";
                        }
                        else if($_GET["state"] == "baz"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='باز' OR thingsName ='داڵ' OR thingsName ='هەڵۆ' OR thingsName ='واشە' OR thingsName ='باشوکە' OR thingsName ='baz' OR thingsName ='halo' OR thingsName ='dal' OR thingsName ='washa' OR thingsName='bashwka' OR thingsName='bashuka'";
                        }
                        else if($_GET["state"] == "mina"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='مینا' OR thingsName ='mina'";
                        }
                        else if($_GET["state"] == "xwrmaxora"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='خورماخۆرە' OR thingsName ='بول بول' OR thingsName ='xurmaxora' OR thingsName ='xwrmaxora' OR thingsName ='bwlbwl' OR thingsName ='bulbul'";
                        }

                        // parst of "Palawar"
                        else if($_GET["state"] == "palawar"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingType ='palawar'";
                        }
                        else if($_GET["state"] == "mrishk"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='مریشک' OR thingsName ='کەڵەشێر' OR thingsName ='کەڵەباب' OR thingsName ='mrishk' OR thingsName ='kalabab' OR thingsName ='kalasher' OR thingsName ='mrishk'";
                        }
                        else if($_GET["state"] == "qal"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='قەل' OR thingsName ='عەلەشیش' OR thingsName ='قەلەمون' OR thingsName ='qal' OR thingsName ='alashish' OR thingsName ='qalamwn'";
                        }
                        else if($_GET["state"] == "qaz"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='قاز' OR thingsName ='qaz'";
                        }
                        else if($_GET["state"] == "mrawy"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='مراوی' OR thingsName ='mrawy' OR thingsName ='mrawi'";
                        }

                        // parts of azhal
                        else if($_GET["state"] == "azhal"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingType ='azhal'";
                        }
                        else if($_GET["state"] == "smora"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='سمۆرە' OR thingsName ='smora'";
                        }
                        else if($_GET["state"] == "maimon"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='مەیموون' OR thingsName ='مەموون' OR thingsName ='maimon' OR thingsName ='maimwn' OR thingsName ='maimun'";
                        }
                        else if($_GET["state"] == "karweshk"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='کەروێشک' OR thingsName ='karweshk'";
                        }
                        else if($_GET["state"] == "asp"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='ئەسپ' OR thingsName ='asp'";
                        }
                        else if($_GET["state"] == "pshila"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='پشیلە' OR thingsName ='pshila'";
                        }
                        else if($_GET["state"] == "mar"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='مەڕ' OR thingsName ='mar'";
                        }
                        else if($_GET["state"] == "bzn"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='بزن' OR thingsName ='bzn'";
                        }
                        else if($_GET["state"] == "manga"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='مانگا' OR thingsName ='manga'";
                        }

                        // parts of "Gyandary Awy"
                        else if($_GET["state"] == "awy"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingType ='awy'";
                        }
                        else if($_GET["state"] == "masy"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingsName ='ماسی' OR thingsName ='masy' OR thingsName ='masi'";
                        }

                        // part of jorytr
                        else if($_GET["state"] == "jorytr"){ 
                            $first_query = "SELECT * FROM post_info WHERE status ='public' and thingType ='jorytr'";
                        }



                    }

                    $first_result = mysqli_query($conn, $first_query);
                    if(mysqli_num_rows($first_result) == 0){
                        $output= '<div class="alert alert-warning" role="alert"> ببورە هچ زانیارییەک لەم شێوەیە نییە! </div>';
                    }
                    print ("$output");


                    // this is used for error messages
                    if(isset($_GET["error"])){
                        if($_GET["error"] == "deleted_post"){
                          echo '<div class="alert alert-success" role="alert">بەسەرکەوتویی سڕایەوە!</div>';
                        }
                        // when the form is submited without any error let's show a sweet alert message
                        elseif($_GET["error"] == "none"){
                            echo "<script>
                            swal({
                                title: 'سەرکەوتو بوو',
                                text: '  ".$post_code."  :ئەم کۆدە بەکاردێت بۆسڕینەوەی پێش وەخت ',
                                icon: 'success',
                                button: 'OK'
                            }).then(function() {
                                window.location = 'index.php';
                            });
                            </script>";
                            
                        }
                    }

                    while($row = mysqli_fetch_array($first_result)){
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

                    // we should destroy the session inside this page but not destroy form that page when we get the data from there.
                    session_destroy();

                    // we need to close connections
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

           <div class="my-row only-pc">
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
           <div class="my-row third">
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

<script src="js/clerable-search.js"></script>
</body>
</html>