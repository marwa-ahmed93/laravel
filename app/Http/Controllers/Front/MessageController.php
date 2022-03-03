<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Newsletter;
use App\Message;
use App\Student;
use Illuminate\Support\Facades\DB;
class MessageController extends Controller
{
    //
    public function newsletter(Request $request){

      $data = $request->validate([
'email' => 'required|email|max:191'

      ]);

      Newsletter::create($data);
      return back();
    }


    public function contact(Request $request){

      $data = $request->validate([
'name' => 'required|string|max:191' ,
'email' => 'required|email|max:191' ,
'subject' => 'nullable|string|max:191' ,
'message' => 'required|string|max:10000' ,

      ]);

      Message::create($data);
      return back();
    }
    
    public function enroll(Request $request){
      $data = $request->validate([
'name' => 'nullable|string|max:191' ,
'email' => 'required|email|max:191' ,
'spec' => 'nullable|string|max:191' ,
'course_id' => 'required|exists:courses,id' ,

      ]);

      $old_student = Student::select('id')->where('email' , $data['email'])->first();
if($old_student == null)
{

  Student::create([
    'name' => $data['name'] ,
    'email' => $data['email'] ,
    'spec' => $data['spec'] ,
    
          ]);
          $student_id = $students->id;
}
  else
  {
    $student_id  = $old_student->id;

    if($data['name'] !== null){
$old_student->update(['name'=> $data['name']]);
    }
    if($data['spec'] !== null){
      $old_student->update(['spec'=> $data['spec']]);
          }
  }
        
              DB::table('course_student')->insert([
                'course_id'   => $data['course_id'],
                'student_id'  => $student_id,
                 'created_at' => now(),
                 'updated_at' => now()
        
              ]);
              return back();
    }



}
