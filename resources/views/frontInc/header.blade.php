<div class="top">
   <div class="top2_wrapper">
      <div class="container">
         <div class="top2 clearfix">
            <div class="col-sm-3">
               <header>
                  <div class="logo_wrapper">
                     <a href="index-2.html" class="logo">
                     <img src="{{asset('flextop/images/MTLogo.png')}}" alt="" class="img-responsive" title="Logo">
                     </a>
                  </div>
               </header>
            </div>
            <div class="col-sm-6">
               <div class="search_section_wrapper">
                  <div class="search-form-wrapper clearfix">
                     <form class="clearfix">
                        <input type="text" class="form-control" placeholder="" value="Search Here" onBlur="if(this.value=='') this.value='Search Here'" onFocus="if(this.value =='Search Here' ) this.value=''">
                        <a href="#" target="_blank" class="">Search</a>
                     </form>
                  </div>
               </div>
            </div>
            <div class="col-sm-3">
               <div class="hello1"><a href="{{url('/adminlogin')}}" target="_blank">SignOut</a>
               </div>
               <div class="hello1">Hello Customer - <a href="{{url('/adminlogin')}}" target="_blank">Login</a> or <a href="{{url('/adminSignup')}}" target="_blank">Register</a>
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
                     <li class="sub-menu sub-menu-1"><a href="{{url('/mobilelist')}}">Home</a></li>

                     <li class="sub-menu sub-menu-1"><a href="#">Samsung Phones</a></li>
                     
                     <li><a href="#">Huawei Phones</a></li>

                     <li><a href="#">Oppo Phones</a></li>

                     <li class="sub-menu sub-menu-1"><a href="#">Nokia Phones</a></li>

                     <li class=""><a href="{{url('/aboutus')}}">About Us</a></li>
                     <li><a href="{{url('/contactus')}}">Contact us</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>