<?php

namespace App\Http\Controllers;


use App\Brand;
use App\Category;
use App\Product;
use App\photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

// class AjaxControler extends Controller
// {

// 	public function index()
// 	{
// 		$msg = 'this is simple message'
// 		return response()->json(array('msg'=>$msg), 200);
// 	}
// }

class MainController extends Controller
{
    public function showProductsWithCategory($id)
    {
    	$prodct = Product::where('cat_id', $id)->get();
        
        	
       

    	return view('Mainpage', compact('prodct','da'));
    }







                public function filter(Request $request)
                {
                    
                  $product=new Product();

                  $product->cat_id=$request->input('cat_id');
                  if($request->input('price')!='0'){

                    $product->price=$request->input('price');
                     
                    $priceRange = explode("-",$product->price, 2); 
                    $min= $priceRange[0];
                    $max=$priceRange[1];
 
                  }

                  if(empty($request->input('cat_id')) && $request->input('price')=='0'){

                    $prodct=\App\Product::all();
                     

                  }
                  else if((!empty($request->input('cat_id'))) && $request->input('price')=='0'){

                     $prodct = Product::where('cat_id','=', $product->cat_id)->get();
                  }
                  else if(empty($request->input('cat_id')) && $request->input('price')!='0'){

                     $prodct = Product::where('price','>=',$min)->where('price','<=',$max)->get();
                  }
                  else if((!empty($request->input('cat_id'))) && $request->input('price')!='0'){


                    $prodct = Product::where('cat_id','=', $product->cat_id)->where('price','>=',$min)->where('price','<=',$max)->get();
                  }

 
                  

                //   if(empty($request->input('cat_id'))){
                //    $prodct = Product:: where('price','>=',$min)->where('price','<=',$max)->get();
                //   }
                //   if(empty($request->input('price'))){

                //        $prodct = Product::where('cat_id','=', $product->cat_id)->get();
                // }
                // if(!empty($request->input('cat_id'))  && !empty($request->input('price')))
                //   {
                //        $prodct = Product::where('cat_id','=', $product->cat_id)->where('price','>=',$min)->where('price','<=',$max)->get();
                //   }
                  return view('Mainpage', compact('prodct'));
                }


   
    public function addcategory(Request $request)
     {
            $Category=new Category();
             $Category->cat_name=$request->input('cat_name');
                
             $Category->save();

             return view('AddProduct');



     }
          public function details ($id)
           {
            $data=\App\product::where('id','=',$id)->first();

             return view('details',compact('data'));
            }

     public function addbrand(Request $request)
       {
            $Brand=new Brand();
             $Brand->brand_name=$request->input('brand_name');
                $Brand->cat_id = $request->input('cat_id');
             $Brand->save();            

              return view('AddProduct');







         }
        

          public function show()
          {

          
              $prodct=\App\Product::all();

                return view('Mainpage',compact('prodct'));

          }
    

            	public function index()
				{

					$id = $_GET['id'];
					$brand= Brand::where('cat_id',$id)->get();
       	           
                  
                  // return view('AddModel', compact('category', 'brand'));
					 return $brand;


				
				}
                public function insert(){


                    return view('insert');
                }
              

				
				public function addproduct(Request $request)
                {
                     $product=new Product();
                     
                     $product->cat_id=$request->input('cat_id');
                     $product->brand_id=$request->input('brand_id');
                     $product->price=$request->input('price');
                     $product->details=$request->input('details');
                        $file=Input::file("image");
        if(!empty($file)){
            $newFilename=$file->getClientOriginalName();
            $destinationPath= public_path() . '/images';
            $upload = $file->move($destinationPath,$newFilename);
            if($upload)
               $product->image = $newFilename;
         }
                    $product->Weight=$request->input('Weight');
                    $product->OS="$request->input('OS')";
                    $product->Protection="$request->input('Protection')";
                    $product->SIM="?";
                    $product->Dimensions="$request->input('Dimensions')";
                    $product->Primary=$request->input('Primary');
                    $product->Front=$request->input('Front');
                    $product->Video=$request->input('Video');
                    $product->Internal=$request->input('Internal');
                    $product->RAM=$request->input('RAM');
                    $product->Expandable=$request->input('Expandable');
                    $product->Capacity=$request->input('Capacity');
                    $product->Type=$request->input('Type');
                    $product->Turbo=$request->input('Turbo');
                    $product->Bluetooth=$request->input('Bluetooth');
                    $product->NFC=$request->input('NFC');
                    $product->USB=$request->input('USB');
                    $product->Variant=$request->input('Variant');
                    $product->Cores=$request->input('Cores');
                    $product->Frequency=$request->input('Frequency');
                    $product->Make=$request->input('Make');
                    $product->GPU=$request->input('GPU');
                    $product->Architecture=$request->input('Architecture');
                    
                     $product->realflash=$request->input('realflash');
                     $product->G2=$request->input('G2');
                     $product->G3=$request->input('G3');
                      $product->G4=$request->input('G4');
                     $product->GPS=$request->input('GPS');
                     $product->Loudpeaker=$request->input('Loudpeaker');
                     $product->HeadPHones=$request->input('HeadPHones');
                     $product->Infrared=$request->input('Infrared');
                     $product->Fingerprint_sensor=$request->input('Fingerprint_sensor');
                        $product->Proximity=$request->input('Proximity');
                     $product->Accelerometer=$request->input('Accelerometer');
                      $product->Gyroscope=$request->input('Gyroscope');
                     $product->Ambient_Light=$request->input('Ambient_Light');  
                     $product->display_type=$request->input('display_type');    
      
                     $product->Size=$request->input('Size');
                     $product->Resolution=$request->input('Resolution');
                     $product->Pixel_Density=$request->input('Pixel_Density');
                     $product->Touchscreen_type=$request->input('Touchscreen_type');
                     $product->Color_Reproduction="Color_Reproduction";
                     $product->Screen_to_body_percentage=$request->input('Screen_to_body_percentage');
                     $product->save();
                     return view('AddProduct');  
    
                }



}
