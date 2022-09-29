<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dropdown Menu Responsive</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
  <link href="bootstrap-5.1.3/css/bootstrap.min.css" rel="stylesheet">  <!--In Finaly Change This Link To Online -->
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/form-page.css">

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

  <section class="form-section">

  <?php



        echo '<div class="floting">';

        if(isset($_GET["error"])){
          if($_GET["error"] == "emptyinput"){
            echo '<div class="alert alert-warning" role="alert"> !تکایە هەمووبەشەکان پڕبکەرەوە </div>';
          }
          elseif($_GET["error"] == "chooseFile"){
            echo '<div class="alert alert-danger" role="alert"> !تکایە ڕەسمێك یان زیاتر هەڵبژێرە </div>';            
          }
        //   elseif($_GET["error"] == "codeExist"){
        //     echo "<script>alert('تکایە دووبارە هەوڵبدەرەوە!');</script>";
        //   }
          elseif($_GET["error"] == "invalidNumber"){
            echo '<div class="alert alert-danger" role="alert"> تکایە ژمارەی مۆبایل بەدروستی داغڵ بکە. </div>';
          }
        }

        echo '</div>';

    ?>

   <div class="container">
      <h4>ناردنی زانیاری</h4>
      <form action="includes/submit_form.inc.php" method="post" enctype="multipart/form-data" id="form">

           <div class="form-row">
              <div class="form-input-group">
              <select name="thingType" id="slct3" class="slct3" onchange="populate2(this.id,'slct4')">
                        <option value="">-- جۆر دیاری بکە --</option>
                        <option value="پەلەوەر"> پەلەوەر </option>
                        <option value="باڵندە"> باڵندە </option>
                        <option value="ئاژەڵ"> ئاژەڵ </option>
                        <option value="گیانداری ئاویی"> گیانداری ئاویی </option>
                        <option value="جۆری تر"> جۆری تر </option>
                    </select>
              </div>

              <div class="f-group">
                <select name="things_name" id="slct4" class="slct4">
                    <option value="">-- ناو --</option>
                </select>
            </div>
          </div>


            <div class="form-row">
                <div class="form-input-group">
                    <textarea name="note" placeholder=" تێبینی بنوسە ئەگەر پێویست دەکات"></textarea>
                </div>
            </div>

          <div class="form-row">
              <div class="col-half">
                  <div class="form-input-group">
                      <input type="number" name="price" placeholder="نرخ" autocomplete="off" id="myText" onblur="formatValue()">
                  </div>
              </div>
              <div class="col-half">
                  <div class="form-input-group radio-btn">
                      <input type="radio" name="type_of_price" value="$" id="dolar">
                      <label for="dolar">دۆلار</label>
                      
                      <input type="radio" name="type_of_price" value="IQD" id="dinar">
                      <label for="dinar">دینار</label>
                  </div>
              </div>
          </div>

          <div class="form-row">
              <div class="form-input-group">
                <div class="f-group">
                    <!-- <label for="">Contry</label> -->
                    <select name="slct1" id="slct1" onchange="populate(this.id,'slct2')">
                        <option value="">-- پارێزگا --</option>
                        <option value="هەولێر">هەولێر</option>
                        <option value="سلێمانی">سلێمانی</option>
                        <option value="دهۆک">دهۆک</option>
                        <option value="کەرکوک">کەرکوک</option>
                        <option value="هەڵەبجە">هەڵەبجە</option>
                    </select>
                </div>
            
                <div class="f-group">
                    <!-- <label for="">City</label> -->
                    <select name="slct2" id="slct2">
                        <option value="">-- قەزا --</option>
                    </select>
                </div>

              </div>
          </div>
          <div class="form-row">
              <div class="form-input-group">
                  <input type="text" name="seller_name" placeholder="ناوی فرۆشیار" autocomplete="off">
              </div>
          </div>
          <div class="form-row">
              <div class="form-input-group">
                  <input type="text" name="seller_tel" placeholder="ژمارەی تەلەفۆنی فرۆشیار" autocomplete="off">
              </div>
          </div>
          
          <div class="file-upload">
            <input type="file" name="file[]" id="image" onchange="image_select()" accept="image/png, image/jpeg, image/jpg" multiple="multiple">
            <label for="image">
                <i class="fas fa-upload"></i> &nbsp; ڕەسمێک یان زیاتر دیاری بکە
            </label>

            <div id="img-box">
                <div class="card-body d-flex flex-wrap justify-content-start" id="container">
                    <!-- Image will be show here-->    	  
               </div>
            </div>
          </div>


          <div class="form-row">
              <div class="form-input-group">
                  <div class="btn">
                      <input type="submit" name="submit" value="ناردنی زانیاری">
                  </div>
              </div>
          </div>
      </form>
  </div>

  </section>

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
<script src="js/upload-file.js"></script>
<!-- these under script are used for second select to drop down the list of the name things and the name of the city with town -->
<script src="js/second-select.js"></script>
<script src="js/second-select2.js"></script>

<!-- this script is used for add comma to the price number -->
<script src="js/add_comma_to_price.js"></script>

</body>
</html>