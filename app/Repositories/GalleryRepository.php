<?php 
namespace App\Repositories;
use App\Models\Gallery;
  
class GalleryRepository{

    public function InsertData($data){
         $gallery = new Gallery;
         $gallery->title = $data['title'];
         $gallery->detail = $data['detail'];
         $gallery->description = $data['desc'];

         $file = $data['file'];
         $extention = $file->getClientOriginalName();
         $filename =  time().'.'.$extention;
         $file->move('uploads/',$filename);
         $gallery->image = $filename;
         $gallery->save();
         return true;
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