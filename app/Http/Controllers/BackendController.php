<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MenuModel;
use App\SubMenumodel;
use App\LogoModel;
use App\AddressModel;
use App\DayModel;
use App\TimeModel;
use App\IconModel;
use App\BannerModel;
use App\AboutModel;
use App\LowerbannerModel;
use App\MyselfModel;
use App\AllHeadClassModel;
use App\ClassSheduleModel;
use App\BlogModel;
use App\BlogDetail;
use App\TeaModel;
use Carbon\Carbon;
use Image;


class BackendController extends Controller
{

     public function addmenu(){
     $attach=MenuModel::orderBy('id', 'DESC')->get();
    $sl=1;
      return view('dashboard.MenuAdd' ,compact('attach','sl'));
    }


public function about()
{
  $attach=AboutModel::all();
  return view('dashboard.about',compact('attach'));
}

function Aboutdelete($id){
AboutModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
}


public function aboutin(Request $request)
{

$ab=AboutModel::all()->first();
if($ab==null){
  AboutModel::insert([
    'about'=>$request->about,
    'created_at'=>Carbon::now(),
  ]);
   return back()->with('success', 'Data inserted Successfully');
}
else
{
  AboutModel::findOrFail(1)->update([
    'about'=>$request->about,
    'created_at'=>Carbon::now(),
  ]);
   return back()->with('success', 'Data inserted Successfully');
}



}









 public function inmenu(Request $request)
{
  MenuModel::insert([
    'name'=>$request->name,
    'created_at'=>Carbon::now(),
  ]);
   return back()->with('success', 'Data inserted Successfully');
}


    function menudelete($id){
 MenuModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
}

      public function addsubmenu(){
        $attach=MenuModel::all();
      return view('dashboard.Submenu',compact('attach'));
    }

      public function insertsubmenu(Request $request)
     {
       SubMenumodel::insert([
         'name'=>$request->name,
         'menu_id'=>$request->menu_id,
         'link'=>$request->link,
         'created_at'=>Carbon::now(),
       ]);
        return back()->with('success', 'Data inserted Successfully');
     }
function logo(){
  $attach=LogoModel::all();
  return view("dashboard.logo",compact('attach'));
}




public function uploadlogo(Request $request)
   {
     $shopOwner = LogoModel::all()->first();
     if (empty($shopOwner->id)) {

       if($request->hasFile('uploadlogo')){
        $product_image=$request->file('uploadlogo');
        $filename= str_random(4).'.'.$product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(261, 67)->save(base_path('public/all_img/'.$filename),100);
        LogoModel::insert([
          'title'=>$request->title,
          'status'=>$request->status,
          'uploadlogo'=>'all_img/'.$filename,
          'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Data Insert Successfully');
      }else{
        LogoModel::insert([
          'title'=>$request->title,
          'status'=>$request->status,
          'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Data Insert Successfully');
      }

    }

      else {
       if($request->hasFile('uploadlogo')){
        $product_image=$request->file('uploadlogo');
        $filename= str_random(4).'.'.$product_image->getClientOriginalExtension();
        Image::make($product_image)->resize(261, 67)->save(base_path('public/all_img/'.$filename),100);
        LogoModel::findOrFail(1)->update([
          'title'=>$request->title,
          'status'=>$request->status,
          'uploadlogo'=>'all_img/'.$filename,
          'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Data Insert Successfully');
      }else{
        LogoModel::findOrFail(1)->update([
          'title'=>$request->title,
          'status'=>$request->status,
          'created_at'=>Carbon::now(),
        ]);
        return back()->with('success','Data Insert Successfully');
      }
     }

}




function logodelete($id){
LogoModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
}
function addressdelete($id){
AddressModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
}



function address(){
  $attach=AddressModel::all();
  return view("dashboard.address",compact('attach'));
}



public function postaddress(Request $request)
{
 AddressModel::insert([
   'introduction'=>$request->introduction,
   'adress'=>$request->adress,
   'phone'=>$request->phone,
   'emails'=>$request->emails,
   'created_at'=>Carbon::now(),
 ]);
  return back()->with('success', 'Data inserted Successfully');
}


public function postaddressedit($id)
{
    $attach1=AddressModel::all();
    $attach= AddressModel::findOrFail($id);
   return view("dashboard.addressedit",compact('attach','attach1'));
}

public function editaddress(Request $request)
{
  AddressModel::findOrFail($request->all_id)->update([
    'introduction'=>$request->introduction,
    'adress'=>$request->adress,
    'phone'=>$request->phone,
    'emails'=>$request->emails,
    'created_at'=>Carbon::now(),
  ]);
return redirect()->route('upper');
}

function open(){
  return view('dashboard.openingTime');
}
public function openinsert(Request $request)
{

  DayModel::insert([
    'startday'=>$request->startday,
    'endday'=>$request->endday,
    'starttime'=>$request->starttime,
    'endtime'=>$request->endtime,
    'created_at'=>Carbon::now(),
  ]);
  $days="";
  for($i=0; $i<count($request->dayname); $i++){
       if(count($request->dayname)-1==$i){
         $days = $days.$request->dayname[$i];
       }else {
         $days = $days.$request->dayname[$i].",";

       }

  }
   TimeModel::insert([
      'opentime'=>$days,
      'created_at'=>Carbon::now(),

    ]);

 return view("dashboard.addressedit",compact('attach','attach1'));
  }






public function icon()
{
  $attach=IconModel::all();
  return view('dashboard.socialicon',compact('attach'));
}



function  iconpost(Request $request)
{
  IconModel::insert([
     'icon'=>$request->icon,
     'link'=>$request->link,
     'created_at'=>Carbon::now(),

   ]);

return back()->with('success', 'Data inserted Successfully');
 }



// ========================================= banner part==================================================================
//  =========================================================================================================================

public function banner()
{
  $attach=BannerModel::all();
  return view('dashboard.banner',compact('attach'));
}

public function lower()
{
  return view('dashboard.lowerbanner');
}
function ban($id){
BannerModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
}

function ban1($id){
   $attach= BannerModel::findOrFail($id);
   return view('dashboard.banedit',compact('attach'));

}
public function banup(Request $request)
{

  if(!empty($request->hasFile('pic'))){
    $product_image=$request->file('pic');
    $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
    Image::make($product_image)->resize(1920, 775)->save(base_path('public/all_img/'.$filename),100);
    BannerModel::findOrFail($request->all_id)->update([
      'word1'=>$request->word1,
      'word2'=>$request->word2,
      'sentence'=>$request->sentence,
      'pic'=>'all_img/'.$filename,
      'created_at'=>Carbon::now(),
    ]);
  return redirect()->route('banner');
  }
  else{
  echo '<script type="text/javascript">';
  echo 'alert("YOU MUST NEED TO ADD PHOTO");';
  echo 'window.location.href = "/banner";';
  echo '</script>';


  }
  }





public function bannerentry(Request $request)
{

  if(!empty($request->hasFile('pic'))){
    $product_image=$request->file('pic');
    $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
    Image::make($product_image)->resize(1920, 775)->save(base_path('public/all_img/'.$filename),100);
    BannerModel::insert([
      'word1'=>$request->word1,
      'word2'=>$request->word2,
      'sentence'=>$request->sentence,
      'pic'=>'all_img/'.$filename,
      'created_at'=>Carbon::now(),
    ]);
    return back()->with('success','Data Insert Successfully');
  }
  else{
  echo '<script type="text/javascript">';
  echo 'alert("YOU MUST NEED TO ADD PHOTO");';
  echo 'window.location.href = "/banner";';
  echo '</script>';


  }

}

public function bannerchac(Request $request)
{

  if(!empty($request->hasFile('pic'))){
    $product_image=$request->file('pic');
    $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
    Image::make($product_image)->resize(1920, 775)->save(base_path('public/all_img/'.$filename),100);
    LowerbannerModel::insert([
      'title'=>$request->title,
      'text'=>$request->text,
      'pic'=>'all_img/'.$filename,
      'created_at'=>Carbon::now(),
    ]);
    return back()->with('success','Data Insert Successfully');
  }
  else{
  echo '<script type="text/javascript">';
  echo 'alert("YOU MUST NEED TO ADD PHOTO");';
  echo 'window.location.href = "/lower";';
  echo '</script>';


  }

}











public function map()
{
return view('dashboard.map');
}
    
    
    
   // ========================================= myself part part==================================================================
//  ========================================================================================================================= 
    public function myself()
{    
     $my=MyselfModel::all();
     return view('dashboard.myself',compact('my'));
}
   
    
    


    
    
     public function myselfinsert(Request $request)
    {
      if($request->hasFile('pic')){
       $product_image=$request->file('pic');
       $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
       Image::make($product_image)->resize(398, 583)->save(base_path('public/all_img/'.$filename),100);
       MyselfModel::insert([
         'title'=>$request->title,
         'subhead'=>$request->subhead,
         'detail'=>$request->detail,
         'link'=>$request->linkt, 
         'pic'=>'all_img/'.$filename,
         'created_at'=>Carbon::now(),
       ]);
       return back()->with('success','Data Insert Successfully');
     }else{
            echo '<script type="text/javascript">';
  echo 'alert("YOU MUST NEED TO ADD PHOTO");';
  echo 'window.location.href = "/myself";';
  echo '</script>';
      
    }
}
    
    
    function md($id){
   MyselfModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
}
    
    function mm($id){
 $attach= MyselfModel::findOrFail($id);
 $attach2= MyselfModel::all();
 return view('dashboard.myedit',compact('attach','attach2'));
}



      public function myselfupdate(Request $request)
    {
      if($request->hasFile('pic')){
       $product_image=$request->file('pic');
       $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
       Image::make($product_image)->resize(398, 583)->save(base_path('public/all_img/'.$filename),100);
       MyselfModel::findOrFail($request->all_id)->update([
         'title'=>$request->title,
         'subhead'=>$request->subhead,
         'detail'=>$request->detail,
         'link'=>$request->linkt, 
         'pic'=>'all_img/'.$filename,
         'created_at'=>Carbon::now(),
       ]);
       return redirect()->route('myself')->with('success','Data Insert Successfully');
     }else{
          MyselfModel::findOrFail($request->all_id)->update([
         'title'=>$request->title,
         'subhead'=>$request->subhead,
         'detail'=>$request->detail,
         'link'=>$request->linkt, 
        
         'created_at'=>Carbon::now(),
       ]);
      return redirect()->route('myself')->with('success','Data Insert Successfully');
      
    }
}

   // ========================================= myself part part==================================================================
//========================================================================================================================= 
   public function AH1()
{    
     $my=AllHeadClassModel::all();
     return view('dashboard.All_head_class',compact('my'));
}
   
  function  AHC(Request $request)
{
  AllHeadClassModel::insert([
     'maintitle'=>$request->maintitle,
     'txt'=>$request->txt,
     'created_at'=>Carbon::now(),

   ]);

return back()->with('success', 'Data inserted Successfully');
 }

  
function AHCD($id){
  AllHeadClassModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
} 


function classs(){
    return view('dashboard.add-class');
}

    function postclass(Request $request){
        
      if($request->hasFile('pic')){
       $product_image=$request->file('pic');
       $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
       Image::make($product_image)->resize(370, 270)->save(base_path('public/all_img/'.$filename),100);
       ClassSheduleModel::insert([
         'tteacher'=>$request->tteacher,
         'class_name'=>$request->class_name,
         'detail'=>$request->detail,
         'time_head'=>$request->time_head, 
         'starttime'=>$request->starttime, 
         'time_head'=>$request->time_head, 
         'endtime'=>$request->endtime, 
         'size'=>$request->size, 
         'size_head'=>$request->size_head, 
         'ageHead'=>$request->ageHead, 
         'agerange'=>$request->agerange, 
         'feeHead'=>$request->feeHead, 
         'feeAmount'=>$request->feeAmount,  
         'pic'=>'all_img/'.$filename,
         'created_at'=>Carbon::now(),
       ]);
       return back()->with('success','Data Insert Successfully');
     }else{
            echo '<script type="text/javascript">';
  echo 'alert("YOU MUST NEED TO ADD PHOTO");';
  echo 'window.location.href = "/classs";';
  echo '</script>';
      
    }
        
    }


function allclass()
{
    
    $attachq=ClassSheduleModel::all();
    return view('dashboard.allclass',compact('attachq'));
}



function csh($id){
 ClassSheduleModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
} 









//====================blog head=================================
function bloghead(){
 
    
   $attachq=BlogModel::all();
 return view('dashboard.BlogHead',compact('attachq'));
}
    
      function  AHCc(Request $request)
{
  BlogModel::insert([
     'maintitle'=>$request->maintitle,
     'txt'=>$request->txt,
     'created_at'=>Carbon::now(),

   ]);

return back()->with('success', 'Data inserted Successfully');
 }


    function AHCDd($id){
  BlogModel::find($id)->delete();
return back()->with('success','Item delete Successfully');
} 
    
    
    
    
    
    
    
    
    
    
    
    function blog(){  
 return view('dashboard.blogdetail');
}
    
    
    
        
        
        
          function blogpost(Request $request){
        
      if($request->hasFile('pic')){
       $product_image=$request->file('pic');
       $filename= str_random(5).'.'.$product_image->getClientOriginalExtension();
       Image::make($product_image)->resize(570, 385)->save(base_path('public/all_img/'.$filename),100);
       BlogDetail::insert([
         'maintitle'=>$request->maintitle,
         'linkk'=>$request->linkk,
         'txt'=>$request->txt, 
         'pic'=>'all_img/'.$filename,
         'created_at'=>Carbon::now(),
       ]);
       return back()->with('success','Data Insert Successfully');
     }else{
            echo '<script type="text/javascript">';
  echo 'alert("YOU MUST NEED TO ADD PHOTO");';
  echo 'window.location.href = "/blog";';
  echo '</script>';
      
    }
        
    }
        
        
        
        
        //===========================tea=========================
        
        
        
        function tea(){
            $att=TeaModel::all();
            return view('dashboard.Teacher',compact('att'));
        }
        
       
function   AHCT(Request $request)
{
  TeaModel::insert([
     'maintitle'=>$request->maintitle,
     'txt'=>$request->txt,
     'created_at'=>Carbon::now(),

   ]);

return back()->with('success', 'Data inserted Successfully');
 }
        
        
        
        
        
        
        
        
        
    
}
