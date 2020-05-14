<?php

namespace App\Http\Controllers;

class AloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function index()
        {
            return view('aa');
        }

        public function about()
        {
            return view('about');
        }

}
