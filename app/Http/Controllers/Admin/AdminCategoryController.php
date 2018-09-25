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
use App\Category;

class AdminCategoryController extends Controller
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
        $categories = Category::all();
        return view('admin.category.category')->with(['languages' => $languages, 'categories' => $categories]);
    }

    public function add_category(){
        $languages = Language::all();

        return view('admin.category.categoryadd')->with(['languages' => $languages]);
    }

    public function add_category_post(Request $request){
//        var_dump($request->all());die;
        $this->validate($request, [
            'name' => 'required|max:255',
            'lang_iso' => 'required',

        ]);
        $categorylist = $request->all();
        array_shift($categorylist);

        $category = new Category();
        if($category::create($categorylist)){
            return redirect('admin/category');
        }
    }

    public function edit_category($id){
        $languages = Language::all();
        $category = new Category();
        $category = $category->where('id', $id)->first();
        return view('admin.category.categoryedit')->with(['languages' => $languages, 'category' => $category]);
    }

    public function edit_category_post(Request $request, $id){
        $category =Category::find($id);

        $this->validate($request, [
            'name' => 'required|max:255',
            'lang_iso' => 'required',
        ]);

        $params = $request->all();

        unset($params['_token']);


        if($category != null){
            $category->update($params);
            return redirect('admin/category');
        }
    }


}