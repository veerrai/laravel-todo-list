<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\todos;

class todoController extends Controller
{
    public function index(){
        $todos= todos::all();
        $data = compact('todos');
        return view('welcome')->with($data);
    }
   public function store(Request $request){
// print_r($request->all());
$request->validate(
    [
        'name' => 'required',
        'age' => 'required',
        'city' => 'required',
        'work'=> 'required',
        'office' => 'required',
        'salary' => 'required'
    ]
    );
    // echo "validation completed";
    $todo = new todos;
    $todo->name=$request['name'];
    $todo->city=$request['city'];
    $todo->salary=$request['salary'];
    $todo->age=$request['age'];
    $todo->office=$request['office'];
    $todo->work=$request['work'];
    $todo->save();
    
  return redirect(route('home'));


   }

   public function delete($id){
todos::find($id)->delete();
return redirect(route('home'));

   }

   public function edit($id){
    $todo=todos::find($id);
    $data=compact('todo');
    return view("update")->with($data);

   }

   public function updateData(Request $request){
    $request->validate(
        [
            'name' => 'required',
            'age' => 'required',
            'city' => 'required',
            'work'=> 'required',
            'office' => 'required',
            'salary' => 'required'
        ]
        );
        // echo "validation completed";
        $id = $request['id'];
        $todo = todos::find($id);
        $todo->name=$request['name'];
        $todo->city=$request['city'];
        $todo->salary=$request['salary'];
        $todo->age=$request['age'];
        $todo->office=$request['office'];
        $todo->work=$request['work'];
        $todo->save();
        
      return redirect(route('home'));
    
    
       
   }


}
