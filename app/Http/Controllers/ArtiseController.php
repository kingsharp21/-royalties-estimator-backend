<?php

namespace App\Http\Controllers;

use App\Models\Artise;
use Illuminate\Http\Request;

class ArtiseController extends Controller
{
    //

    public function index(){
        // return Artise::paginate();
        return Artise::where('followers','>',10389646 )
            ->get()
            ->random(25);
    }

    public function show (string $id){
       return Artise::where('id', $id)->get();
        // return $request;
    }

    public function artiseAlbums(){
        $tracks = Artise::join('albums', 'artises.id', '=', 'albums.artises_id')
        ->join('tracks', 'albums.id', '=', 'tracks.albums_id')
        ->select('artises.name as artise', 'albums.name as album', 'tracks.name as track')
        ->get();

        return $tracks;
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
