<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ClassData;
use App\Models\Student;
class ClassDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes= ClassData::all();
        return response()->json( $classes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $class = ClassData::create($request->all());
        if($class->save()){
            return response()->json(["successfully craeted"]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       // $class = ClassData::find($id);
        $students= Student::where("class_id",$id)->get();

        return response()->json($students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    public function editById($id)
    {
        $class = ClassData::find($id);
        return response()->json($class);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $class = ClassData::find($id);
        $class->name=$request->name;
        $class->maximum_students=$request->maximum_students;
        $class->status=$request->status;
        $class->description=$request->description;
        if($class->update()){
            return response()->json(["successfully updated"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $class = ClassData::find($id);
        $class->delete();
        return response()->json(["successfully deleted"]);
    }
}
