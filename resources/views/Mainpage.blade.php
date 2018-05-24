@extends('layouts.mainPage')
@section('content')

<div id="main">

<!--Header/Nav-->
@include('frontInc.header')
<!--Header/Nav-->
<br>
   <!--Slider-->
   <!-- <div class="gslider-wrapper">
      <div id="gslider2" class="flexslider flexslider-gslider">
         <ul class="slides"> -->
   <div class="container">
      <div class="row">
         <div class="col-sm-1"></div>
         <div class="col-sm-10">
            <div id="slider_wrapper">
               <div id="slider">
                  <div id="flexslider">
                     <ul class="slides clearfix">
                        <li>
                           <img src="{{asset('flextop/images/galaxy S7 edge.jpg')}}" alt="">
                        </li>
                        <li>
                           <img src="{{asset('flextop/images/huawei mate 9.jpg')}}" alt="">
                        </li>
                        <li>
                           <img src="{{asset('flextop/images/iphone x.jpg')}}" alt="">
                        </li>
                     </ul>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>
<!--Slider End-->
<!--Main Content Starts-->
<div class="main-content">
   <div class="main-content-overlay"></div>
   <div class="main-content-inner">
      <div id="content">
         <div class="container">
            <div class="row">
               <div class="col-sm-1"></div>
               <div class="col-sm-2 column-sidebar">
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Brands
                     </div>
                     <form   method="POST" action="{{url('/filter')}}">  
                     {{ csrf_field() }}
                     <div class="sidebar-content">
                      <div class="brandscroll">
                           <?php
                             $categry = \App\Category::all();
                             ?>
                             @foreach($categry as $cats)
                             <input type="checkbox" name="cat_id" value="{{$cats->id}}"> {{$cats->cat_name}}<br>
                              @endforeach
                        </div>
                     </div>
                  </div>
                  <div class="sidebar-block">
                     <div class="sidebar-title">
                        Filter By
                     </div>
                     <div class="sidebar-content">
                        <div class="sidebar-filters">
                           <div class="sidebar-filters-title">Price</div>
                              <select name="price">
                               <option value="0">Select Price Range</option>
                               <option value="500-1000">Rs.500-Rs.1000</option>
                               <option value="2000-5000">Rs.2000-Rs.5000</option>
                               <option value="5000-8000">Rs.5000-Rs.8000</option>
                               <option value="8000-11000">Rs.8000-Rs.11000</option>
                               <option value="1000-20000">Rs.1000-Rs.20000</option>
                              </select>
                              <div>
                                 <div class="form-group">

                                       <button type="submit" class="btn btn-primary " value="submit">Submit</button>
                                 </div>
                            </div>
                           </div>
                           </div>
                           </div>
                           </form> 
                            </div>
                            <div class="col-sm-8 column-content">
                                @if(Session::has('error_message'))
                                <?php dd('here');?>
                                <div class="alert alert-danger">
                                    <strong>Error!</strong> {{Session::get('error_message')}}
                                </div>
                                @endif
                                @if(Session::has('success_message'))
                                <div class="alert alert-success">
                                    <strong>Success!</strong> {{Session::get('success_message')}}
                                </div>
                                @endif
                                <div class="pane1 clearfix">
                                    <div id="second-tab-group" class="tabgroup">
                                        <div id="tabs2-1">
                                            <div class="row">
                                                @foreach($prodct as $book)
                                                <div class="col-sm-2" >
                                                    <div class="product">
                                                        <div class="product-inner">
                                                            <figure class="product-media">
                                                                <a href="{{route('details',['id'=>$book->id])}}">
                                                                    @if(isset($book->image))
                                                                    <img src= "{{asset('images') . '/'.$book->image}}">
                                                                    @else
                                                                    <img style="min-width: 63px; min-height: 84px" src="https://image.ibb.co/kk9GY8/shopping_cart.png" alt="shopping_cart" border="0">                                                                    @endif
                                                                </a>  
                                                                <div class="product-links">
                                                                </div>
                                                            </figure>
                                                            <div class="product-divider"></div>
                                                            <div class="product-caption">
                                                                <a href="{{route('details',['id'=>$book->id])}}"> <div class="product-name" ><label value="{{$book->brand_id}}"> 
                                                                            <?php
                                                                            $productName = DB::table('brands')->where('id', '=', $book->brand_id)->get();
                                                                            echo $productName[0]->brand_name;
                                                                            ?></a>
                                                                        </label></div>
                                                                    <div class="product-review clearfix">
                                                                    </div>
                                                                    <div >
                                                                        <div class="product-price"> {{$book->price}}</div>
                                                                        <div class="product-price-old">
                                                                            <a href="{{route('addToCart' , ['id' => $book->id])}}" class="btn btn-primary " value="submit">Buy</a>                                                                        </div>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
               
<div class="container">
   <!--Top Brands-->
   <div class="title1">Top Brands</div>
   <div class="owl-carousel owl-carousel-wide">
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand1.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand2.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand3.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand4.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand5.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand6.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand7.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand8.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand9.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand10.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand11.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand12.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand13.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
      <div class="item">
         <div class="product">
            <div class="product-inner">
               <a href="#" target="_blank" class="product-view"><img src="{{asset('flextop/images/brand14.png')}}" alt="" class="img-responsive" title=""></a>
            </div>
         </div>
      </div>
   </div>
</div>
<!--Top Brands End-->

<!--Footer Starts-->
@include('frontInc.footer')
<!--Footer End-->

</div><!--main-content Ends Here-->
</div><!--main end here-->
@endsection