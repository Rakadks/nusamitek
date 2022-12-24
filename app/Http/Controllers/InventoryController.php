<?php
namespace App\Http\Controllers\frontend;
 
use App\Http\Controllers\Controller;
use App\User;

 
class InventoryController extends Controller
{
    public function index()
    {
        return view('frontend.inventory');
    }
}