<?php
/**
 * Created by PhpStorm.
 * User: Sergey
 * Date: 4/21/2017
 * Time: 10:40 AM
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;
use App\Menu;

class MenuController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $languages = Language::all();
        $menus = Menu::all();
        return view('admin.menu.index')->with(['languages' => $languages, 'menus' => $menus]);
    }

    public function add_menu(){
        $languages = Language::all();

        return view('admin.menu.add_menu')->with(['languages' => $languages]);
    }

    public function add_menu_post(Request $request){
        $this->validate($request, [
            'name' => 'required|max:20',
            'language' => 'required',
            'link' => 'required',
            'active' => 'required',
        ]);

        $menu = new Menu();
        if($menu::create($request->all())){
            return redirect('admin/menu');
        }
    }

    public function edit_menu($id){
        $languages = Language::all();
        $menu = new Menu();
        $menu = $menu->where('id', $id)->first();
        return view('admin.menu.edit_menu')->with(['languages' => $languages, 'menu' => $menu]);
    }

    public function edit_menu_post(Request $request, $id){
        $menu =Menu::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'language_iso' => 'required',
            'link' => 'required',
            'active' => 'required',
        ]);

        $params = $request->all();

        unset($params['_token']);

        if($menu != null){
            $menu->update($params);
            return redirect('admin/menu');
        }
    }


}