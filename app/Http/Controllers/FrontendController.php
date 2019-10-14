<?php

namespace App\Http\Controllers;
use App\MenuModel;
use App\SubMenumodel;
use App\LogoModel;
use App\AddressModel;
use App\DayModel;
use App\TimeModel;
use App\IconModel;
use App\BannerModel;
use App\LowerbannerModel;
use App\MyselfModel;
use App\AllHeadClassModel;
use App\ClassSheduleModel;
use App\BlogModel;
use App\BlogDetail;
use App\TeaModel;
use Carbon\Carbon;
use Image;



use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
      $attach=BannerModel::all();
      $AHC=AllHeadClassModel::all();
      $schedule=ClassSheduleModel::all();
      $bg=BlogModel::all();
      $att=TeaModel::all();
      $bgg=BlogDetail::whereRaw('MOD(id, 2) = 0')->get();
      $bggo=BlogDetail::whereRaw('MOD(id, 2) <> 0')->get();
      $my=MyselfModel::all();
      $low=LowerbannerModel::whereRaw('MOD(id, 2) = 0')->get();
      $odd=LowerbannerModel::whereRaw('MOD(id, 2) <> 0')->get();
      return view('forntend.index',compact('attach','low','odd','my','AHC','schedule','bg','bgg','bggo','att'));
    }
}
