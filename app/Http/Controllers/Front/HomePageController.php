<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Http\Controllers\Front\Course;
use App\Course;
use App\Trainer;
use App\Student;
use App\Test;
use App\SiteContent;
class HomePageController extends Controller
{
    //
  public function index(){
      $data['banner'] = SiteContent::select('content')->where('name','banner')->first();
      $data['courses_content'] = SiteContent::select('content')->where('name','courses_content')->first();

      $data['courses'] = Course::select('id' ,'cat_id' , 'trainer_id' , 'name' , 'small_desc' ,
       'desc' , 'price' , 'img')
       ->orderBy('id' , 'desc')
       ->take(3)
       ->get();

       $data['courses_count'] = Course::count();
       $data['trainers_count'] = Trainer::count();
       $data['students_count'] = Student::count();

       $data['tests'] = Test::select('name' , 'spec' , 'desc' , 'img')->get();
        return view('front.index')->with($data);
    }
}
