<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\FileUpload;
use File;
use Storage;

class HomeController extends Controller
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
        return view('home');
    }

    /** Return view to upload file */
    public function uploadFile(){
        return view('home');
    } 

     /**File Upload */
     public function postFile(Request $request){
    	$doc = new Project;
    	$doc->author = $request->author;
    	$doc->description = $request->description;
    	$doc->user_id = $request->user_id;
    	$doc->document = FileUpload::savefile($request,'document');
    	//$doc->savePic = $request->savePic;
    	if ($doc->save()) {
            return view('home');
    	}
    }
    

}
