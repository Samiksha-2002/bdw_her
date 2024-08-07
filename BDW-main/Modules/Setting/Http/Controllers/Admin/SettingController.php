<?php

namespace Modules\Setting\Http\Controllers\Admin;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Modules\Setting\Http\Models\Setting;
use Illuminate\Support\Facades\Route;
use Cache;
use File;

class SettingController extends Controller
{
  public function index()
  {
    $route = Route::current()->getName();

    $title = str_replace(['.', 'admin', 'index'], ['', '', ''], $route);

    $settings = Setting::where('route', $route)->where('is_hidden', 0)->orderBy('sort', 'asc')->get();

    return view('setting::admin.index', compact('settings', 'title'));
  }
  
  public function save(Request $request)
  {
    foreach ($request->except('_token') as $index => $value) {
      $setting = Setting::whereAttribute($index)->first();
      if($setting->type == 'file'){
        $this->delete_previous_image($setting->value);
        $setting->value = $this->upload_image($value, "settings");
      }else{
        $setting->value = $value;
      }
      $setting->save();

      Cache::forget('zahidaz_setting_'.$index);

    }
    return redirect()->back()->with("message", "Settings has been updated");
  }

  // delete previous image
  public function delete_previous_image($pre_file)
  {
    $path = str_replace(url('/').'/' , "", $pre_file);
    if(File::exists($path))
    {
      File::delete($path);
    }
  }

  public function upload_image($file, $path = '',  $name = null)
  {
      $ext = $file->getClientOriginalExtension();
      $filename = time().'.'.$ext;
      $file->move($path,$filename);
      $upload_path = $path.'/'.$filename;
      return url($upload_path);
  }

}