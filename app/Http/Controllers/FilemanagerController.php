<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FilemanagerController extends Controller
{
    /**
     * Create a new AdminController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('redac');
    }

    /**
     * Show the media panel.
     *
     * @return \Illuminate\Http\Response
    */
    public function __invoke()
    {
        return view('backend.filemanager');
    }

}
