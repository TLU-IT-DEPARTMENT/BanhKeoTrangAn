<style>
    @import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic);

    body {font-family: 'Source Sans Pro', sans-serif; font-size: 14px; color: #666;}

    #lean_overlay {
        position: fixed;
        z-index:100;
        top: 0px;
        left: 0px;
        height:100%;
        width:100%;
        background: #000;
        display: none;
    }

    .popupContainer{
        position:absolute;
        width:330px;
        height: auto;
        left:45%;
        top:80px;
        background: #FFF;
    }

    .btn {padding:10px 20px; background: #F4F4F2;}
    .btn_red {background: #ED6347; color: #FFF;}

    .btn:hover {background: #E4E4E2;}
    .btn_red:hover {background: #C12B05;}

    a.btn {color:#666; text-align: center; text-decoration: none;}
    a.btn_red {color: #FFF;}

    .one_half {width:50%; display: block; float:left;}
    .one_half.last {width:45%; margin-left:5%;}

    /* Popup Styles*/
    .popupHeader {font-size:16px; text-transform: uppercase;}
    .popupHeader {background:#F4F4F2; position:relative; padding:10px 20px; border-bottom:1px solid #DDD; font-weight:bold;}
    .popupHeader .modal_close {position: absolute; right: 0; top:0; padding:10px 15px; background:#E4E4E2; cursor: pointer; color:#aaa; font-size:16px;}

    .popupBody {padding:20px;}


    /* Social Login Form */
    .social_login {}
    .social_login .social_box {display:block; clear:both; padding:10px; margin-bottom: 10px; background: #F4F4F2; overflow: hidden;}
    .social_login .icon {display:block; width:10px; padding:5px 10px; margin-right: 10px; float:left; color:#FFF; font-size:16px; text-align: center;} 
    .social_login .fb .icon {background:#3B5998;}
    .social_login .google .icon {background:#DD4B39;}
    .social_login .icon_title {display:block; padding:5px 0; float:left; font-weight: bold; font-size: 16px; color:#777;}
    .social_login .social_box:hover {background: #E4E4E2;}

    .centeredText {text-align: center; margin: 20px 0; clear: both; overflow: hidden; text-transform: uppercase;}

    .action_btns {clear:both; overflow: hidden;}
    .action_btns a {display: block;}

    /* User Login Form */
    .user_login {display: none;}
    .user_login label {display: block; margin-bottom:5px;}
    .user_login input[type="text"], .user_login input[type="email"], .user_login input[type="password"] {display: block; width:90%; padding: 10px; border:1px solid #DDD; color:#666;}
    .user_login input[type="checkbox"] {float:left; margin-right:5px;}
    .user_login input[type="checkbox"]+label {float:left;}

    .user_login .checkbox {margin-bottom: 10px; clear: both; overflow: hidden;}
    .forgot_password {display:block; margin: 20px 0 10px; clear: both; overflow: hidden; text-decoration: none; color:#ED6347;}

    /* User Register Form */
    .user_register {display: none;}
    .user_register label {display: block; margin-bottom:5px;}
    .user_register input[type="text"], .user_register input[type="email"], .user_register input[type="password"] {display: block; width:90%; padding: 10px; border:1px solid #DDD; color:#666;}
    .user_register input[type="checkbox"] {float:left; margin-right:5px;}
    .user_register input[type="checkbox"]+label {float:left;}

    .user_register .checkbox {margin-bottom: 10px; clear: both; overflow: hidden;}
</style>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="<?= ROOT_PATH ?>"><img style="width: 139px; height: 79px;" src="<?= WEBROOT_PATH ?>/img/logo/trang_an.gif" alt="trang_an" /></a>
                    </div>
                    <div class="btn-group pull-right">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                USA
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canada</a></li>
                                <li><a href="#">UK</a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
                                DOLLAR
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Canadian Dollar</a></li>
                                <li><a href="#">Pound</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-user"></i> Account</a></li>
                            <li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
                            <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
                            <li><a href="cart.html"><i class="fa fa-shopping-cart"></i> Cart</a></li>
                            <li><a id="modal_trigger" class="btn" href="#modal"><i class="fa fa-lock"></i>Login</a></li> 
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">

                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="<?= ROOT_PATH ?>" class="active">Home</a></li>
                            <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="en/product/index/page/1">Products</a></li>
                                    <li><a href="product-details.html">Product Details</a></li> 
                                    <li><a href="checkout.html">Checkout</a></li> 
                                    <li><a href="cart.html">Cart</a></li> 
                                </ul>
                            </li> 
                            <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="blog.html">Blog List</a></li>
                                    <li><a href="blog-single.html">Blog Single</a></li>
                                </ul>
                            </li> 
                            <li><a href="contact-us.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="search_box pull-right">
                        <input type="text" placeholder="Search"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->

<!-- Popup signup form-->

<!--<div class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                
            </div>
            <div class="modal-body">
                
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>-->


<div id="modal" class="popupContainer" style="display:none;">
    <header class="popupHeader">
        <span class="header_title">Login</span>
        <span class="modal_close"><i class="fa fa-times"></i></span>
    </header>

    <section class="popupBody">
        <!-- Social Login -->
        <div class="social_login">
            <div class="">
                <a href="#" class="social_box fb">
                    <span class="icon"><i class="fa fa-facebook"></i></span>
                    <span class="icon_title">Connect with Facebook</span>

                </a>

                <a href="#" class="social_box google">
                    <span class="icon"><i class="fa fa-google-plus"></i></span>
                    <span class="icon_title">Connect with Google</span>
                </a>
            </div>

            <div class="centeredText">
                <span>Or use your Email address</span>
            </div>

            <div class="action_btns">
                <div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
                <div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
            </div>
        </div>

        <!-- Username & Password Login form -->
        <div class="user_login">
            <form>
                <label>Email / Username</label>
                <input type="text" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="remember" type="checkbox" />
                    <label for="remember">Remember me on this computer</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Login</a></div>
                </div>
            </form>

            <a href="#" class="forgot_password">Forgot password?</a>
        </div>

        <!-- Register Form -->
        <div class="user_register">
            <form>
                <label>Full Name</label>
                <input type="text" />
                <br />

                <label>Email Address</label>
                <input type="email" />
                <br />

                <label>Password</label>
                <input type="password" />
                <br />

                <div class="checkbox">
                    <input id="send_updates" type="checkbox" />
                    <label for="send_updates">Send me occasional email updates</label>
                </div>

                <div class="action_btns">
                    <div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
                    <div class="one_half last"><a href="#" class="btn btn_red">Register</a></div>
                </div>
            </form>
        </div>
    </section>
</div>

<script type="text/javascript" src="<?= WEBROOT_PATH ?>/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?= WEBROOT_PATH ?>/js/jquery.leanModal.min.js"></script>

<script type="text/javascript">
    $("#modal_trigger").leanModal({top: 200, overlay: 0.6, closeButton: ".modal_close"});

    $(function () {
        // Calling Login Form
        $("#login_form").click(function () {
            $(".social_login").hide();
            $(".user_login").show();
            return true;
        });

        // Calling Register Form
        $("#register_form").click(function () {
            $(".social_login").hide();
            $(".user_register").show();
            $(".header_title").text('Register');
            return true;
        });

        // Going back to Social Forms
        $(".back_btn").click(function () {
            $(".user_login").hide();
            $(".user_register").hide();
            $(".social_login").show();
            $(".header_title").text('Login');
            return true;
        });

    })
</script>