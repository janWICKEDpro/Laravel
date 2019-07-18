<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $title = 'Hello! and welcome to winnie.com';
        return view('Pages.index')->with('title', $title);
    }
    public function about(){
        $intro = 'About';
        return view('Pages.about')->with('intro', $intro);
    }
    public function services(){
        $data = array (
            'title' => 'SERVICES',
             'hospitals' => ['web design', 'Marketing', 'Software']  
        );
        return view('Pages.services')->with($data);
    }
    public function login(){
        
        return view('Pages.Login'); 
    }
        public function account(){
        
            return view('Pages.createAccount'); 
        }
}
