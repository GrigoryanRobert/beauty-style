<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 4/25/2017
 * Time: 10:51 AM
 */

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Menu;
use App\Menu_translate;

class Menu_translateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $languages = Language::all()->where('iso', '!=', 'en');
        $menus = Menu::all()->where('language_iso','en');
        return view('admin.menu.translate')->with(['languages' => $languages, 'menus' => $menus]);
    }

    public function translate_post(Request $request){
        $input = $request->all();
        unset($input['_token']);
        $language_iso = $input['language'];
        unset($input['language']);

        foreach($input as $k=>$v){
            $translate = new Menu();
            $translate->language_iso = $language_iso;
            $translate->name = $v;
            $translate->link = $k;
            $translate->active = 1;
            $translate->save();
        }


    }

}