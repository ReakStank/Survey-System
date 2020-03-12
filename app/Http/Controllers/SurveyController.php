<?php

namespace App\Http\Controllers;
use DB;
use DataTables;
use Illuminate\Http\Request;
use App\Models\survey;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class SurveyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function insert(Request $request){
        $table= new Survey();
        $test = $table->name= $request['name'];
        $table->description= $request['description'];
        $table->save();
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/surveys/create">Click Here</a> to go back.';
    }
    public function update($id){
        $survey = DB::select('select * from surveys where id = ?',[$id]);
        return view('surveys/update',['survey'=>$survey]);
    }
    public function index()
    {
        $survey = DB::select('select * from surveys');
        return view('surveys/index',['survey'=>$survey]);
    }
    public function create()
    {
        return view('surveys.create');
    }
    public function destroy($id) {
        $survey = survey::find($id);
        $survey->delete();
        return redirect('surveys/index')->with('status', 'The survey has been some destroy.');
    }
    public function edit(Request $request,$id) {
        $survey = DB::select('select * from surveys where id = ?',[$id]);
        $name = $request->input('name');
        $description = $request->input('description');
        DB::update('update surveys set name = ?,description=? where id = ?',[$name,$description,$id]);
        return redirect('surveys/index');
        }
}
