<?php

namespace App\Http\Controllers\Files;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FilesController extends Controller
{
   	function index() {
   		// $directories = Storage::disk("system")->allDirectories();
   		// return view('index', compact('directories'));
   	}

   	function create() {}

   	function store(Request $req) {
   		return $req->all();

         // $req->validate([
   		// 	"nameDir" => "required"
   		// ]);
   		// $directory = $req->input("nameDir");
   		// return Storage::disk("system")->makeDirectory($directory);
   	}

   	function show($data) {
   		$directories = Storage::disk("system")->directories($data);
   		$files = Storage::disk("system")->allFiles($data);

   		return view("files.show", compact('directories', 'files'));
   	}
}
