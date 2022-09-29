<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dropdown Menu Responsive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/form.css">
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

  <!-- Start Login Form -->
   <div class="modal-wrap">
      <div class="modal-bodies">
         <div class="modal-body modal-body-step-1 is-showing">
            <div class="title">Login Form</div>
            <form class="login-form" action="includes/signup.inc.php" method="post">

            <!-- Alert Message Error -->
            <?php
                if(isset($_GET["error"])){
                    if($_GET["error"] == "emptyinput"){
                        echo "<p class='alert-warning'><strong>Warning! </strong>Fill in all fields.</p>";
                    }
                    else if($_GET["error"] == "invaliduid"){
                        echo "<p class='alert-warning'><strong>Warning! </strong> Choose a proper username.</p>";
                    }
                    else if($_GET["error"] == "invalidemail"){
                        echo "<p class='alert-warning'><strong>Warning! </strong> Choose a proper Email.</p>";
                    }
                    else if($_GET["error"] == "passwordsdontmatch"){
                        echo "<p class='alert-warning'><strong>Warning! </strong> Passwords doesn't match.</p>";
                    }
                    else if($_GET["error"] == "stmtfailed"){
                        echo "<p class='alert-warning'><strong>Warning! </strong> Something went wrong, try again</p>";
                    }
                    else if($_GET["error"] == "usernametaken"){
                        echo "<p class='alert-warning'><strong>Warning! </strong> Username already taken.</p>";
                    }
                    else if($_GET["error"] == "none"){
                        echo "<p class='alert-success'><strong>Success! </strong> Registered successfully.</p>";
                    }
                }
            ?>

               <input type="text" name="first_name" placeholder="First Name">
                <input type="text" name="middle_name" placeholder="Middle Name">
                <input type="text" name="uid" placeholder="User Name">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="pwd" placeholder="Password">
                <input type="password" name="pwd_repeat" placeholder="Confirm Password">
                <input type="tel" name="phone_number" placeholder="Phone Number">
                <input type="date" name="date_of_birth" placeholder="Date of Birth">
                <input type="submit" name="submit" value="Create Account">

            </form>
         </div>
      </div>
   </div>
  <!-- End Login Form -->

    <!-- Start Footer Section -->
<section class="my-footer">
   <div class="copy-right">
       <div class="text">
           <p>Copyright &copy; 2021 Maidan., &nbsp;&nbsp;Developed By: <a rel="nofollow noopener" href="https://www.facebook.com/hoshmand.soran.71" target="_blank"> Hoshmand Soran</a></p>
       </div>
   </div>
</section>

<!-- End Footer Section -->

 <!-- This script is used for  navigation menu -->
<script src="js/menu.js"></script>
</body>
</html>