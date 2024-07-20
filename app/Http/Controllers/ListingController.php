<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class ListingController extends Controller
{
  
    
    // Show Create Form

    public function index() {
        return view('startfolder.index');
    }
   
  

    public function store(Request $request){

        $data = [
           "name" => $request->pdname,
           "title" => $request->qty,
           "price" => $request->price,
        ];

           Storage::disk('public')->put('stock.json', json_encode($data));
           return redirect('/')->with('message', 'File created successfully: Its Located in the storage/app/pulic folder of your app');
        }

}


