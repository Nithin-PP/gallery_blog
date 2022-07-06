<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;

class WebController extends Controller
{

    public function __construct(GalleryRepository $GalleryRepository){
        $this->GalleryRepository = $GalleryRepository;

        }

    public function webpage()
    {
        $result= $this->GalleryRepository ->selectData();
        return view('Web.Layouts.main', ['insert'=>$result]);
    }

    // public function relation($id){

    //     $result=Gallery::with('blogData')->get();
    //     return view('Web.Layouts.single',compact('result'));
        
    // }


}
