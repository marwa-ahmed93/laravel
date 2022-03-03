<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Course;
use Image;
use App\Cat;
use App\Trainer;
use Illuminate\Support\Facades\Storage;
class CourseController extends Controller
{
    //
    public function index(){

        $data['courses'] = Course::select('id' , 'name', 'price', 'img')->get();
        return view('admin.courses.index')->with($data);
    }

    public function create(){
$data['cats'] = Cat::select('id','name')->get();
$data['trainers'] = Trainer::select('id' , 'name')->get();

        return view('admin.courses.create')->with($data);
    }

    public function store(Request $request){
$data = $request->validate([
    'name' => 'required|string|max:50' ,
    'small_desc' => 'required|string|max:191' ,
    'desc' => 'required|string' ,
    'price' => 'required|integer' ,
    'cat_id' => 'required|exists:cats,id' ,
    'trainer_id' => 'required|exists:trainers,id' ,
    'img' => 'required|image|mimes:jpg,jpeg,png' ,

]);

$new_name = $data['img']->hashName();
Image::make($data['img'])->resize(970,520)->save(public_path('uploads/courses/'.$new_name));
$data['img'] = $new_name;
Course::create($data);
return redirect(route('admin.courses.index'));
    }

    public function edit($id){
        
        $data['cats'] = Cat::select('id','name')->get();
$data['trainers'] = Trainer::select('id' , 'name')->get();

$data['course'] = Course::findOrFail($id);
        return view('admin.courses.edit')->with($data);
    }

    public function update(Request $request){

        $data = $request->validate([
            'name' => 'required|string|max:50' ,
            'small_desc' => 'required|string|max:191' ,
            'desc' => 'required|string' ,
            'price' => 'required|integer' ,
            'cat_id' => 'required|exists:cats.id' ,
            'trainer_id' => 'required|exists:trainers.id' ,
            'img' => 'nullable|image|mimes:jpg,jpeg,png' ,
        ]);

        $old_name = Course::findOrFail($request->id)->img;
if($request->hasFile('img'))
{
Storage::disk('uploads')->delete('courses/'.$old_name);
$new_name = $data['img']->hashName();
Image::make($data['img'])->resize(50,50)->save(public_path('uploads/courses/'.$new_name));
$data['img'] = $new_name;
}
else
{
$data['img'] = $old_name;
}
        Course::findOrFail($request->id)->update($data);
        return back();
            }
        
         public function delete($id){
            $old_name = Course::findOrFail($id)->img;
            Storage::disk('uploads')->delete('courses/'.$old_name);

            Course::findOrFail($id)->delete();
            return back();

         }
}
