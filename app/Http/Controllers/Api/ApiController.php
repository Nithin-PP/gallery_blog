<?php

namespace App\Http\Controllers\Api;

use App\Models\Gallery;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Repositories\GalleryRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiController extends Controller
{

    public function __construct(GalleryRepository $GalleryRepository){
        $this->GalleryRepository = $GalleryRepository;

     }
     
    public function index(Request $request){

        $user= Auth::user();
        $data = $request->all();       
        $result = $this->GalleryRepository-> InsertData($data);
        return response()->json(['data'=>$result],200);
        
       
 }
 
 public function show(){
    $result = $this->GalleryRepository-> selectData();
    return response()->json(['data'=>$result],200);
    // return view('Admin.gallery',['gall'=>$result]);
}

public function update(Request $request,$id)
{

    $data=Gallery::find($id);   
    $data= $request->all();
    $result = $this->GalleryRepository->updateData($data);
    return response()->json(['data'=>$result],200);
// return redirect('list');
}

public function register(Request $request)
{

 $validator = Validator::make($request->all(),
 [
     'name'=>'required',
     'email'=>'required|email',
     'password'=>'required',
     'c_password'=>'required|same:password'

 ]
 );
 if($validator->fails()){
     return response()->json(['message'=>'validation error'],401);
 }

 $data = $request->all();
 $data['password']=Hash::make($data['password']);
 $user = User::create($data);

 $response['token'] = $user->createToken('Myapp')->plainTextToken;
 $response['name'] = $user->name;

 return response()->json($response,200);
}

public function login(Request $request)
{
 if(Auth::attempt(['email'=>$request->input('email'),'password'=>$request->input('password')]))
 {
     $user = Auth::user();    
     $response['token'] = $user->createToken('Myapp')->plainTextToken;
     $response['name'] = $user->name;

     return response()->json($response,200);

 }
 else
 {
     return response()->json(['message'=>'invalid Credentials error'],401);
 }
}
  

}