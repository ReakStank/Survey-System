<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\survey;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class SurveyController extends Controller
{
    //
    public function insert(Request $request){
        // $name = $request->input('name');
        // $description = $request->input('description');
        // $data=array('name'=>$name,"description"=>$description);
        $table= new Survey();
        $test = $table->name= $request['name'];
        $table->description= $request['description'];
       
        $table->save();
        // DB::table('surveys')->insert($data);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/surveys/create">Click Here</a> to go back.';
    }
}
