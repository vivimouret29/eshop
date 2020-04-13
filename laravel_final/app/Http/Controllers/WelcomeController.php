<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evenement;

class WelcomeController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $evenements = Evenement::orderBy('date', 'desc')->get();

        return view('welcome', [
            'evenements' => $evenements
        ]);
    }
}
