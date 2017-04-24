<?php

namespace App\Http\Controllers;


use Illuminate\Database\DatabaseManager;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    private $db;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DatabaseManager $db)
    {
        $this->middleware('auth');
        $this->db = $db;

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $value = $this->db->table('users')->get();
        return view('home', compact('value'));
    }
}
