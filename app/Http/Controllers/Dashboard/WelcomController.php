<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Categorey;
use App\Models\CategoryDealer;
use App\Models\Product;
use App\Models\PromotedDealer;
use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomController extends Controller
{

    public function index()
    {
        return view('dashboard.welcome');

    } //end of index function
    

} //end of controller
