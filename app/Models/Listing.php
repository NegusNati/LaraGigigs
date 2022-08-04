<?php

namespace App\Models;


class Listing {

  public static function all(){
    return [[
      'id'=> 1,
      'title' => 'Listing One',
      'description' => 'lorean jandj dajkd jasd a jsd jkAKBDJAd ajKJDBAD adbskds kjsd  dsfl'
    ],
  [
      'id'=> 2,
      'title' => 'Listing Two',
      'description' => 'lorean jandj dajkd jasd a jsd jkAKBDJAd ajKJDBAD adbskds kjsd  dsfl'
  ]];
  }

  public static function find($id){
    $listings = self::all();

    foreach($listings as $listing){
      if($listing['id'] == $id ){
        return $listing;
      }
    }


  }
}