<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    	#return 'halo hallo!';
    	return view('/blog/home');
    }

    public function show($id)
    {
    	$nilai = 'ini adalah linknya ' . $id;
    	#$user = 'Slamet Santoso';

    	$users = ['slamet', 'habib', 'bambang'];
    	return view('blog/single', ['blog' => $nilai, 'users' => $users]);
    }

}
