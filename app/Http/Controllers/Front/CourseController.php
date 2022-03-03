<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
use App\Course;
class CourseController extends Controller
{
    //
    function cat($id){
//Cat::where('id',$id)->first();
 $data['cat'] = Cat::findOrFail($id);

 $data['courses'] = Course::where('cat_id' , $id)->paginate(3);

 return view('front.courses.cat')->with($data);
    }

    function show($id,$c_id){
        $data['course'] = Course::findOrFail($c_id);

        return view('front.courses.show')->with($data);
    }

    public function getCourses(){

        $data['allcourses'] = Course::get();
       
        return view('front.allcourses')->with($data);


    }

    public function search(Request $request){

$keyword = $request->keyword;
 $courses = Course::with('cat')->where('name' , 'LIKE' , '%$keyword%')->get();

 return response()->json($courses);

}
}
