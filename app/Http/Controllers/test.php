<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller{
    function index(){
      //code
      echo "ini controller contoh fx index";
      return view('quote');
    }
    function create(){
      //code
      echo "ini controller contoh fx tambah";
    }
    function tambah(){
      //code
      echo "tambah";
    }
}
