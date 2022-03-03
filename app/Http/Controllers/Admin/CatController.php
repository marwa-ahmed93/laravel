<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Cat;
class CatController extends Controller
{
    //
    public function index(){

        $data['cats'] = Cat::select('id' , 'name')->get();
        return view('admin.cat.index')->with($data);
    }

    public function create(){

        return view('admin.cat.create');
    }

    public function store(Request $request){

$data = $request->validate([
    'name' => 'required|string|max:20' ,
]);
Cat::create($data);
return redirect(route('admin.cats.index'));
    }

    public function edit($id){
$data['cat'] = Cat::findOrFail($id);
        return view('admin.cat.edit')->with($data);
    }

    public function update(Request $request){

        $data = $request->validate([
            'name' => 'required|string|max:20' ,
        ]);
        Cat::findOrFail($request->id)->update($data);
        return back();
            }
        
         public function delete($id){
            Cat::findOrFail($id)->delete();
            return back();

         }
}
