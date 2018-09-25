<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Language;

class LanguagesController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::all();
        return view('admin/language/language')->with('languages', $languages);
    }

    public function add_languages(){

        return view('admin/language/language-add');
    }

    public function addLanguagePost(Request $request){

        $this->validate($request, [
            'name' => 'required|max:20',
            'iso' => 'required|max:5',
            'active' => 'required',
        ]);

        $languges = new Language();
        if($languges::create($request->all())){
            return redirect('admin/language/languages');
        }

    }

    public function editLanguage($id){
        $languages = new Language();
        $language = $languages->where('id', $id)->first();
        return view('admin/language/language-edit')->with('language',$language);
    }

    public function editLanguagePost(Request $request, $id){
        $languages =Language::find($id);
        $this->validate($request, [
            'name' => 'required|max:255',
            'iso' => 'required',
            'active' => 'required',
        ]);

        $params = $request->all();
        unset($params['_token']);

        if($languages != null){
            $languages->update($params);
            return redirect('admin/languages');
        }
    }


    public function deleteLanguagePost(Request $request){
        $language = new Language();

        if($language->where('id', '=', $request->id)->delete()){
            return $request->id;
        }
    }
}