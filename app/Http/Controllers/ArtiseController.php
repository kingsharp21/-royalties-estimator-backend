<?php

namespace App\Http\Controllers;

use App\Models\Artise;
use Illuminate\Http\Request;

class ArtiseController extends Controller
{
    //

    public function index(){
        return Artise::paginate();
    }

    public function show (string $id){
       return Artise::where('id', $id)->get();
        // return $request;
    }


    public function create(){
        $data = array(
            "name"=> "kingsharp Nkansah",
            "email"=> "harpnkansah11@gmail.com",
            "email_verified_at"=> "2023-11-14 12:49:11",
            "gender"=> "other",
            "dob"=> "1973-09-22",
            "contact_number"=> "43848194878",
            "academic_level"=> null,
            "country"=> "Ghana",
            "genres"=> null,
            "created_at"=> "2023-11-14T12:49:12.000000Z",
            "updated_at"=> "2023-11-14T12:49:12.000000Z"
        );
        return Artise::create($data);
    }
}
