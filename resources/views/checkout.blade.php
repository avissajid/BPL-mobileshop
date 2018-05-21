@extends('layouts.checkoutApp')
@section('content')

<div id="main">
    <div class="top">
        <div class="top2_wrapper">
            <div class="container">
                <div class="top2 clearfix">
                    <div class="col-sm-3">
                        <header>
                            <div class="logo_wrapper">
                                <a href="index-2.html" class="logo">
                                    <img src="{{asset('flextop/images/logo.png')}}" alt="" class="img-responsive" title="">
                                </a>
                            </div>
                        </header>
                    </div>
                    <div class="col-sm-6">
                        <div class="search_section_wrapper">
                            <div class="search-form-wrapper clearfix">
                                <form class="clearfix">
                                    <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if (this.value == '')
                                                this.value = 'Search Here'" onFocus="if (this.value == 'Search Here')
                                                            this.value = ''">
                                    <a href="#" target="_blank" class="">Search</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="hello1">Hello Customer - <a href="#" target="_blank">Login</a> or <a href="#" target="_blank">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="top3_wrapper">
            <div class="container">
                <div class="top3 clearfix">
                    <div class="navbar navbar_ navbar-default">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-collapse navbar-collapse_ collapse">
                            <ul class="nav navbar-nav sf-menu clearfix">
                                <li class="sub-menu sub-menu-1">
                                    <a href="listing.html">Computer & Laptop</a>
                                    <div class="sf-mega">
                                        <ul class="sf-mega-ul">
                                            <li class="menu-item-container-text">
                                                <div class="menu-item-title">iMac Computers</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="listing.html">Fashion Scarves</a></li>
                                                    <li><a href="listing.html">Wallets</a></li>
                                                    <li><a href="listing.html">Evening Handbags</a></li>
                                                    <li><a href="listing.html">Wrist Watches</a></li>
                                                </ul>
                                                <div class="menu-item-title">Makbooks</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="#" target="_blank">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-container-text">
                                                <div class="menu-item-title">Windows Computers</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="#" target="_blank">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                                <div class="menu-item-title">Laptops</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="#" target="_blank">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-container-image">
                                                <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-computer.jpg')}}" alt="" class="img-responsive" title=""></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sub-menu sub-menu-1">
                                    <a href="listing.html">TV & Audios</a>
                                    <div class="sf-mega">
                                        <ul class="sf-mega-ul">
                                            <li class="menu-item-container-text">
                                                <div class="menu-item-title">TV Samsung</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                                <div class="menu-item-title">TV Philips</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-container-text">
                                                <div class="menu-item-title">Lorem Audio</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                                <div class="menu-item-title">Lorem Sound Audio</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-container-image">
                                                <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu-audio.jpg')}}" alt="" class="img-responsive" title=""></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="#" target="_blank">Smartphone & Tablets</a></li>
                                <li><a href="#" target="_blank">Games & Consoles</a></li>
                                <li class="sub-menu sub-menu-1">
                                    <a href="listing.html">Accessories</a>
                                    <div class="sf-mega">
                                        <ul class="sf-mega-ul">
                                            <li class="menu-item-container-text">
                                                <div class="menu-item-title">TV Samsung</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                                <div class="menu-item-title">TV Philips</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-container-text">
                                                <div class="menu-item-title">Lorem Audio</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                                <div class="menu-item-title">Lorem Sound Audio</div>
                                                <ul class="sf-mega-menu">
                                                    <li><a href="listing.html">Flip-Flops</a></li>
                                                    <li><a href="#" target="_blank">Fashion Scarves</a></li>
                                                    <li><a href="#" target="_blank">Wallets</a></li>
                                                    <li><a href="#" target="_blank">Evening Handbags</a></li>
                                                    <li><a href="#" target="_blank">Wrist Watches</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-item-container-image">
                                                <div class="menu-item-image"><img src="{{asset('flextop/images/mega-menu01.jpg')}}" alt="" class="img-responsive" title=""></div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="sub-menu sub-menu-2">
                                    <a href="#" target="_blank">Pages <span class="caret"></span></a>
                                    <div class="sf-mega">
                                        <ul>
                                            <li>
                                                <a href="index-2.html">Home Page <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                                <div class="sf-mega">
                                                    <ul>
                                                        <li><a href="index-2.html">Home version 1</a></li>
                                                        <li><a href="index-3.html">Home version 2</a></li>
                                                        <li><a href="index-4.html">Home version 3</a></li>
                                                        <li><a href="index-5.html">Home version 4</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="listing.html">Product Listing Page</a></li>
                                            <li><a href="product-details.html">Product Description Page</a></li>
                                            <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                            <li><a href="checkout.html">Checkout Page</a></li>
                                            <li>
                                                <a href="blog.html">Blog <i class="fa fa-caret-right gridgumright" aria-hidden="true"></i></a>
                                                <div class="sf-mega">
                                                    <ul>
                                                        <li><a href="blog.html">Blog Left Sidebar</a></li>
                                                        <li><a href="blog-right.html">Blog Right Sidebar</a></li>
                                                        <li><a href="post.html">Post Left Sidebar</a></li>
                                                        <li><a href="post-right.html">Post Right Sidebar</a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li><a href="contact-us.html">Contact Us</a></li>
                                            <li><a href="404.html">404 Page</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li><a href="contact-us.html">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--header ends-->
    <br>
    <!--Main Content-->
    <div class="main-content">
        <form action="{{route('checkoutProcess')}}" method="POST">

            @csrf
            <div class="main-content-inner">
                <div id="content">
                    <div class="container">
                        <div class="accordion accordion1">
                            <div class="accordion-title">Checkout Method</div>
                            <div class="accordion-title">Billing Information</div>
                            @include('forms.billing')
                            <div class="accordion-title">Shipping Information</div>
                            @include('forms.shipping')
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="pk_test_pIaGoPD69OsOWmh1FIE8Hl4J"
                                data-amount="<?php echo Session::get('Total')?>"
                                data-name="Stripe Demo"
                                data-description="Online course about integrating Stripe"
                                data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                data-locale="auto"
                                data-currency="usd">
                            </script>   
                        </div>
                    </div>
                </div>
            </div>	 
        </form>
        <!--footer starts-->
        <div class="bot2_wrapper">
            <div class="container">
                <div class="bot2 clearfix">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="logo2">
                                <a href="#">
                                    <img src="{{asset('flextop/images/logo2.png')}}" alt="" class="img-responsive" title="">
                                </a>
                            </div>
                            <div class="contact-details">
                                <p>
                                    <i class="fa fa-address-card"></i>
                                    <span>Address:</span>
                                    1234 Heaven Stress, Beverly Hill, Melbourne, USA.
                                </p>
                                <p>
                                    <i class="fa fa-envelope"></i>
                                    <span>Email:</span>
                                    someone@example.com
                                </p>
                                <p>
                                    <i class="fa fa-phone-square"></i>
                                    <span>Phone Number:</span>
                                    (0333) 1234567
                                </p>
                            </div>
                            <div class="download-app-text">Download Mobile Touch App:</div>
                            <div class="download-app-wrapper">
                                <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download01.png')}}" alt="" class="img-responsive" title=""></a></div>
                                <div class="download-app"><a href="#"><img src="{{asset('flextop/images/download02.png')}}" alt="" class="img-responsive" title=""></a></div>
                            </div>
                        </div>
                        <div class="col-sm-2">
                            <div class="bot2-title">Information</div>
                            <ul class="ul0">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <div class="bot2-title">Quick Links</div>
                            <ul class="ul0">
                                <li><a href="#">Smartphones</a></li>
                                <li><a href="#">Mobile & Tablet Accessories</a></li>
                                <li><a href="#">Tablets</a></li>
                                <li><a href="#">Feature Phones</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2">
                            <div class="bot2-title">Join us on</div>
                            <div>
                                <a href="#"><img src="{{asset('flextop/images/icons8-facebook-48.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('flextop/images/icons8-whatsapp-48.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('flextop/images/if_Instagram_1298747.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('flextop/images/icons8-google-plus-48.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('flextop/images/icons8-skype-48.png')}}" alt=""></a>
                                <a href="#"><img src="{{asset('flextop/images/icons8-twitter-48.png')}}" alt=""></a>                  
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bot3_wrapper">
            <div class="container">
                <div class="bot3 clearfix">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="copyrights">Copyright &copy; <a href="#">Mobile Touch</a> All rights reserved. Powered by <a href="#">DEVDIGS @BrainPlow</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection