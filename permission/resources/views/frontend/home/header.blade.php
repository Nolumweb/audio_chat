

   <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="top-inner clearfix">
                    <div class="left-column pull-left">
                        <ul class="info clearfix">
                            <li><i class="far fa-map-marker-alt"></i></li>
                            <li><i class="far fa-clock"></i>Mon - Sat  9.00 - 18.00</li>
                            <li><i class="far fa-phone"></i><a href="tel:2512353256"></a></li>
                        </ul>
                    </div>
                    <div class="right-column pull-right">
    <ul class="social-links clearfix">
        <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
        <li><a href=""><i class="fab fa-twitter"></i></a></li>
        <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
        <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
        <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
    </ul>

         @auth

         <div class="sign-box">
                <a href=""><i class="fas fa-user"></i>Dashboard</a>
               <a href=""><i class="fas fa-user"></i>Logout</a>
        </div> 

         @else 

         <div class="sign-box">
         <a href="{{ route('login') }}"><i class="fas fa-user"></i>Sign In</a>
                        </div>

         @endauth               
                        


                    </div>
                </div>
            </div>
<!-- header-lower -->
<div class="header-lower">
<div class="outer-box">
<div class="main-box">
<div class="logo-box">
    <figure class="logo"><a href=""><img src="" alt=""></a></figure>
</div>
<div class="menu-area clearfix">
    <!--Mobile Navigation Toggler-->
    <div class="mobile-nav-toggler">
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
        <i class="icon-bar"></i>
    </div>
    <nav class="main-menu navbar-expand-md navbar-light">
        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
            <ul class="navigation clearfix">

     <li><a href=""><span>Home</span></a> </li>
     <li><a href=""><span>About Us </span></a> </li>
             
<li class="dropdown"><a href="index.html"><span>Property</span></a>
    <ul>
        <li><a href="">Rent Property</a></li>
        <li><a href="">Buy Property </a></li>
        
    </ul>
</li>
         <li><a href=""><span>Agent </span></a> </li>       
             
 <li><a href=""><span>Blog  </span></a> </li>


     <li><a href="contact.html"><span>Contact</span></a></li> 
    
     <li> 
    <a href="" class="btn btn-success"><span>+</span>Add Listing</a> 
</li> 


            </ul>
        </div>
    </nav>
</div>
<div class="btn-box">
    <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
</div>
</div>
</div>
</div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="outer-box">
                    <div class="main-box">
                        <div class="logo-box">
    <figure class="logo"><a href=""><img src="" alt=""></a></figure>
                        </div>
                        <div class="menu-area clearfix">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                        </div>
                        <div class="btn-box">
                            <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>