<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function index()
    {    
  //
  
 // for ($i=1; $i<=104 ; $i++)
 //   {
   $jsonString = file_get_contents(base_path("public\assets\surah\surah_list.json"));
    $data = json_decode($jsonString, true);

    return response()->json($data);


    }

    public function detail($id)
    {    
      $no_surah =$id;
   $jsonString = file_get_contents(base_path("public\assets\surah\/$no_surah.json"));
    $data = json_decode($jsonString, true);


    return response()->json($data[$no_surah]);

    // $jml_ayat=$data[$no_surah]['number_of_ayah'];
 
     //dd($jml_ayat);

      //  return view ('surah.detail',compact('data','jml_ayat','no_surah'));
    }
}
