<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use \App\Models\Item;

class ItemController extends Controller
{
    
    public function index() {
        
        $items = Item::All();
        
        return view('items.index', compact('items'));
    }
}
