<?php
namespace App\Http\Controllers;

//use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Show the home View.
     */
    public function index(): View
    {
        $user= new \stdClass();
        $user->name = "alejo";       
        return view('home.index', 
            ['user' => $user]);
    }
}