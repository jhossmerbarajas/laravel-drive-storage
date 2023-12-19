<?php

namespace App\Http\Controllers\Directories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DirectoriesController extends Controller
{
   	function index() {
   		// $directories = Storage::disk("system")->allDirectories();
   		// return view('index', compact('directories'));
   	}

   	function create() {}

   	function store(Request $req, ?string $files = null) {
  
         if($req->input("directory")) {
           
            $directories = $files . '/' . $req->input("directory"); 
      		Storage::disk("system")->makeDirectory($directories);

            return redirect()->route("directory.show", $directories);
         
         } else {
            $img = $req->file("file");
            $name = $img->getClientOriginalName();

            return Storage::disk("system")->putFileAs($files, $img, $name);
            // return $req->file("file")->store("system");
         }

   	}

   	function show($data) {
   		$directories = Storage::disk("system")->directories($data);
   		$files = Storage::disk("system")->files($data);

   		return view("directories.show", compact('directories', 'files'));
   	}
}

