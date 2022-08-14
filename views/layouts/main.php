<?php 

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;


AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>

<div class="preloader js-preloader">
    <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/preloader.gif' ?>" alt="Image">
</div>


<div class="switch-theme-mode">
    <label id="switch" class="switch">
        <input type="checkbox" onchange="toggleTheme()" id="slider">
        <span class="slider round"></span>
    </label>
</div>
   
<div class="page-wrapper ">
         <header class="header-wrap style1">

            <div class="header-top">
               <div class="container">
                  <div class="close-header-top xl-none">
                     <button type="button"><i class="las la-times"></i></button>
                  </div>
                  <div class="row align-items-center">
                     <div class="col-xl-10 col-lg-12">
                        <div class="header-top-left">
                           <div class="contact-item">
                              <i class="flaticon-wall-clock"></i>
                              <p>Mon - Sun[8:00am - 10:00pm]</p>
                           </div>
                           <div class="contact-item">
                              <i class="flaticon-phone-call"></i>
                              <a href="tel:13454567877">800-323-4567</a>
                           </div>
                           <div class="contact-item">
                              <i class="flaticon-voucher"></i>
                              <p>Discount 0ff <strong>25%</strong>only for <span>Burger Item</span></p>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-2 col-lg-12">
                        <div class="header-top-right">
                           <div class="select-lang">
                              <div class="navbar-option-item navbar-language dropdown language-option">
                                 <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <span class="lang-name"></span>
                                 </button>
                                 <div class="dropdown-menu language-dropdown-menu">
                                    <a class="dropdown-item" href="#">
                                    <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/uk.png' ?>" alt="flag">
                                    English
                                    </a>
                                    <a class="dropdown-item" href="#">
                                    <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/china.png' ?>" alt="flag">
                                    简体中文
                                    </a>
                                    <a class="dropdown-item" href="#">
                                    <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/uae.png' ?>" alt="flag">
                                    العربيّة
                                    </a>
                                 </div>
                              </div>
                           </div>
                           <div class="select-currency">
                              <select>
                                 <option value="1">USD</option>
                                 <option value="2">GBP</option>
                                 <option value="3">YEN</option>
                              </select>
                           </div>
                        </div>
                        <a href="reservation.html" class="btn style1 xl-none">Make Reservation <i class="flaticon-right-arrow-2"></i> </a>
                     </div>
                  </div>
               </div>
            </div>
            
            
            <div class="container ">
               <div class="header-bottom">
                  <div class="row align-items-center">
                     <div class="col-xl-3 col-lg-6 col-md-6 col-5">
                        <a href="index.html" class="logo"><img src="<?= Yii::getAlias('@web').'/hibootstrap/img/logo-white.png' ?>" alt="Image"></a>
                     </div>
                     <div class="col-xl-6 col-lg-6 col-md-6 col-7">
                        <div class="main-menu-wrap">
                           <div class="menu-close xl-none">
                              <a href="javascript:void(0)"><i class="las la-times"></i></a>
                           </div>
                           <div id="menu">
                              <ul class="main-menu list-style">
                                 <li class="has-children">
                                    <a class="active" href="#">Home</a>
                                    <ul class="sub-menu list-style">
                                       <li>
                                          <a class="active" href="index.html">Home 1</a>
                                       </li>
                                       <li><a href="index-2.html">Home 2</a></li>
                                       <li><a href="index-3.html">Home 3</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-children">
                                    <a href="#">Services</a>
                                    <ul class="sub-menu list-style">
                                       <li><a href="services.html">Our Service</a></li>
                                       <li>
                                          <a href="service-details.html">Service Single</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-children">
                                    <a href="#">Pages</a>
                                    <ul class="sub-menu list-style">
                                       <li><a href="about.html">About us</a></li>
                                       <li><a href="feature.html">Feature Item</a></li>
                                       <li><a href="gallery.html">Gallery</a></li>
                                       <li><a href="search-location.html">Search By Location</a></li>
                                       <li><a href="reservation.html">Make Reservation</a></li>
                                       <li><a href="app.html">Our App</a></li>
                                       <li><a href="testimonials.html">Testimonials</a></li>
                                       <li><a href="faq.html">FAQ</a></li>
                                       <li class="has-children">
                                          <a href="#">User</a>
                                          <ul class="sub-menu list-style">
                                             <li>
                                                <a href="login.html">Login</a>
                                             </li>
                                             <li>
                                                <a href="register.html">Register</a>
                                             </li>
                                             <li>
                                                <a href="forgot-pwd.html">Forgot Password</a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                       <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                                       <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                 </li>
                                 <li class="has-children">
                                    <a href="#">Shop</a>
                                    <ul class="sub-menu list-style">
                                       <li class="has-children">
                                          <a href="#">Shop Layout</a>
                                          <ul class="sub-menu list-style">
                                             <li>
                                                <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                             </li>
                                             <li>
                                                <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                             </li>
                                             <li>
                                                <a href="shop-no-sidebar.html">Shop Grid</a>
                                             </li>
                                          </ul>
                                       </li>
                                       <li>
                                          <a href="shop-details.html">Shop Single</a>
                                       </li>
                                       <li>
                                          <a href="cart.html">Cart</a>
                                       </li>
                                       <li>
                                          <a href="wishlist.html">Wishlist</a>
                                       </li>
                                       <li>
                                          <a href="checkout.html">Checkout</a>
                                       </li>
                                    </ul>
                                 </li>
                                 <li class="has-children">
                                    <a href="#">Blog</a>
                                    <ul class="sub-menu list-style">
                                       <li class="has-children">
                                          <a href="#">Blog Layout</a>
                                          <ul class="sub-menu list-style">
                                             <li><a href="blog-no-sidebar.html">Blog Grid </a></li>
                                             <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                             <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                          </ul>
                                       </li>
                                       <li class="has-children">
                                          <a href="#">Blog Single</a>
                                          <ul class="sub-menu list-style">
                                             <li><a href="blog-details-no-sidebar.html">Blog Single No
                                                Sidebar</a>
                                             </li>
                                             <li><a href="blog-details-left-sidebar.html">Blog Single Left
                                                Sidebar</a>
                                             </li>
                                             <li><a href="blog-details-right-sidebar.html">Blog Single Right
                                                Sidebar</a>
                                             </li>
                                          </ul>
                                       </li>
                                    </ul>
                                 </li>
                                 <li>
                                    <a href="contact.html">Contact</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="mobile-bar-wrap">
                           <a href="cart.html" class="shopcart  xl-none">
                           <i class="las la-shopping-cart"></i>
                           <span>1</span>
                           </a>
                           <div class="mobile-top-bar xl-none">
                              <span></span>
                              <span></span>
                              <span></span>
                           </div>
                           <div class="mobile-menu xl-none">
                              <a href="javascript:void(0)"><i class="las la-bars"></i></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-3 lg-none">
                        <div class="header-bottom-right">
                           <a href="cart.html" class="shopcart">
                           <i class="las la-shopping-cart"></i>
                           <span>1</span>
                           </a>
                           <a href="reservation.html" class="btn style1">Make Reservation <i class="flaticon-right-arrow-2"></i> </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </header>


         <?= $content ?>

         <footer class="footer-wrap">
            <div class="footer-top bg-f footer-bg-1 pt-100 pb-70">
               <div class="overlay op-9 bg-black"></div>
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="footer-widget-wrap">
                           <div class="footer-widget">
                              <a href="index.html" class="footer-logo">
                              <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/logo-white.png' ?>" alt="Image">
                              </a>
                              <p class="comp-desc">Our feet are on the ground, but our the desi ambitions are to
                                 above the clouds a Here is how we move to satisfy our customers
                              </p>
                              <div class="contact-item-wrap">
                                 <div class="contact-item">
                                    <i class="flaticon-mail-1"></i>
                                    <a href="mailto:"><span class="__cf_email__" data-cfemail="ff979a939390bf9c9e9d9e91d19c9092">[email&#160;protected]</span></a>
                                 </div>
                                 <div class="contact-item">
                                    <i class="flaticon-phone-call"></i>
                                    <a href="tel:44345467890">+44-3454-678-90</a>
                                 </div>
                              </div>
                              <ul class="social-profile style1 list-style">
                                 <li><a target="_blank" href="https://facebook.com/"><i class="flaticon-facebook"></i> </a></li>
                                 <li><a target="_blank" href="https://twitter.com/"> <i class="flaticon-twitter-1"></i> </a></li>
                                 <li><a target="_blank" href="https://instagram.com/"> <i class="flaticon-instagram"></i> </a></li>
                                 <li><a target="_blank" href="https://youtube.com/"> <i class="flaticon-youtube"></i> </a></li>
                              </ul>
                           </div>
                           <div class="footer-widget">
                              <h4 class="footer-widget-title">
                                 Quick Links
                              </h4>
                              <ul class="footer-menu list-style">
                                 <li><a href="about.html">About Us</a></li>
                                 <li><a href="menus.html">Menus</a></li>
                                 <li><a href="shop-left-sidebar.html">Shop</a></li>
                                 <li><a href="wishlist.html">Wishlist</a></li>
                                 <li><a href="contact.html">Contact Us</a></li>
                                 <li><a href="contact.html">Career</a></li>
                              </ul>
                           </div>
                           <div class="footer-widget">
                              <h4 class="footer-widget-title">
                                 Opening Hours
                              </h4>
                              <ul class="office-schedule  list-style">
                                 <li>
                                    <p>Monday</p>
                                    <p>09:00 - 18:00</p>
                                 </li>
                                 <li>
                                    <p>Tuesday</p>
                                    <p>10:00 - 18:00</p>
                                 </li>
                                 <li>
                                    <p>Wednesday</p>
                                    <p>11:00 - 18:00</p>
                                 </li>
                                 <li>
                                    <p>Thursday</p>
                                    <p>12:00 - 18:00</p>
                                 </li>
                                 <li>
                                    <p>Friday</p>
                                    <p>14:00 - 18:00</p>
                                 </li>
                                 <li>
                                    <p>Saturday,Sunday</p>
                                    <p>Closed</p>
                                 </li>
                              </ul>
                           </div>
                           <div class="footer-widget">
                              <h4 class="footer-widget-title">
                                 Instagram Photo
                              </h4>
                              <div class="instagram-img-wrap">
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-1.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-2.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-3.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-4.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-5.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-6.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-7.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-8.jpg' ?>" alt="Image">
                                 </a>
                                 <a href="https://instagram.com/" target="_blank" class="insta-box">
                                 <img src="<?= Yii::getAlias('@web').'/hibootstrap/img/instagram/instagram-9.jpg' ?>" alt="Image">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom bg-black">
               <div class="container">
                  <div class="row align-items-center">
                     <div class="col-lg-6 col-md-12 col-12 order-lg-1 order-md-2 order-2">
                        <p class="copyright">
                           <span class="las la-copyright"></span><script data-cfasync="false" src=" <?= Yii::getAlias('@web'). '/hibootstrap/cloudflare-static/email-decode.min.js' ?>"></script><script>document.write(new Date().getFullYear())</script> Caban. All Rights Reserved By <a href="https://hibootstrap.com/">HiBootstrap</a>
                        </p>
                     </div>
                     <div class="col-lg-6 col-md-12 col-12 order-lg-2 order-md-1 order-1">
                        <ul class="footer-bottom-menu list-style">
                           <li><a href="privacy-policy.html">Privacy Policy</a></li>
                           <li><a href="terms-conditions.html">Terms &amp; Conditions</a></li>
                           <li><a href="contact.html">Help Center</a></li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </footer>

      </div>
  
  
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>