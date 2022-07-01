<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Repositories\GalleryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{



    public function __construct(GalleryRepository $GalleryRepository){
        $this->GalleryRepository = $GalleryRepository;

        }

    public function index(Request $request){
               $data = $request->all();
               $result = $this->GalleryRepository-> InsertData($data);
               return redirect('list');
        }

        public function show(){
            $result = $this->GalleryRepository-> selectData();
            return view('Admin.list',['gall'=>$result]);
        }

        public function view(){
            return view('Admin.gallery');
        }
        
        public function delete($id)
        {
            $result = $this->GalleryRepository-> deleteData($id);
            return redirect('list')->with('success', 'Data Deleted Succesfully !!');
        }
        public function edit($id)
        {
            $result = $this->GalleryRepository->editData($id);
            return view('Admin.edit_gallery',['edited'=>$result]);
        }
        public function update(Request $request)
        {
            $data= $request->all();
            $result = $this->GalleryRepository->updateData($data);
        return redirect('list');
        }

        public function relation($id){
         
            $result=Gallery::with('blogData')->where('id', $id)->get();  
            return view('Web.Layouts.single', compact('result'));
            
        } 
        
        public function viewStatus()
    {

        $datas = [];
        // $authId = Auth::user()->id;
        $data= Gallery::all();
        // $data = NotificationList::select('notification_list.*', 'notification_types.name as type')
        //     ->leftJoin('notification_types', 'notification_list.type_id', 'notification_types.id')
        //     ->where('supervisor_id', $authId)
        //     ->orderBy('created_at', 'desc')->get();

        $Data = [];

        foreach ($data as $key => $value) {
            $Data['title'] = $value['title'];
            $Data['detail'] = $value['detail'];
            $Data['description'] = $value['description'];
            $Data['action'] = '<span><button type="button" data-toggle="tooltip" data-placement="bottom" title="Delete" class="btn btn-danger btn-rounded notificationDelete" notification_id="' . $value->id . '"><ion-icon name="trash-outline"></ion-icon></span>';
            $datas[] = $Data;
        }
        $json_data = array(
            'data' => $datas
        );
        echo json_encode($json_data);
        exit;
    }


    }