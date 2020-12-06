<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class surahController extends Controller
{
    public function index()
    {    
  //
  
 // for ($i=1; $i<=104 ; $i++)
 //   {
   $jsonString = file_get_contents(base_path("public\assets\surah\surah_list.json"));
    $data = json_decode($jsonString, true);



//
   //     $number =$data[$i]['number'];
   //     $name=$data[$i]['name'];
   //      $name_latin =$data[$i]['name_latin'];
    //    $number_ayat =$data[$i]['number_of_ayah'];


    //    DB::table('surah_list')->insert(
      //      ['number' => $number,
       //      'name' => $name,
      //       'name_latin' => $name_latin, 
        //     'number_ayat' => $number_ayat,
        //     ]
       // );
      
  // }
  
  
  
  return view ('surah.home',compact('data'));
    }

    public function detail($id)
    {    
      $no_surah =$id;
   $jsonString = file_get_contents(base_path("public\assets\surah\/$no_surah.json"));
    $data = json_decode($jsonString, true);

     $jml_ayat=$data[$no_surah]['number_of_ayah'];
 
     //dd($jml_ayat);

        return view ('surah.detail',compact('data','jml_ayat','no_surah'));
    }




}
