<?php 
namespace App\Repositories;

use App\Models\Gallery;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class GalleryRepository{
 
    public function InsertData($data){
        $userId=Auth::user()->id;
         $gallery = new Gallery;
         $gallery->users_id= $userId;
         $gallery->title = $data['title'];
         $gallery->detail = $data['detail'];
         $gallery->description = $data['desc'];

         $file = $data['file'];
         $extention = $file->getClientOriginalName();
         $filename =  time().'.'.$extention;
         $file->move('uploads/',$filename);
         $gallery->image = $filename;
         $gallery->save();
         $this->notification();
    }
    public function notification(){
        $gallery=Gallery::latest('id')->first();
        $gal=$gallery['users_id'];
        
        $notify=new Notification();
        $notify->users_id=$gal;
        $notify->title="blog added";
        $notify->role_id=0;
        $notify->save();

    }

    public function selectData()
    {
        return Gallery::orderBy('id','DESC')->get();
    } 

    public function editData($id){

    return Gallery::find($id);

    }

    public function deleteData($id){

        $delete = Gallery::find($id);
        $delete->delete();
    
    }
    public function updateData($data){

        $update = Gallery::find($data['hidden']);
        $update->title = $data['title'];
        $update->detail =$data['detail'];
        $update->description =$data['desc'];

    if(isset($data['file'])){
        
        $file = $data['file'];
        $extention = $file->getClientOriginalName();
        $filename =  time().'.'.$extention;
        $file->move('uploads/',$filename);
        $update->image = $filename;
    }
    $update->update();

    }

}

?>