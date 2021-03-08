<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserTask;

class UserTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = UserTask::all();
        return response()->json([
            $user
        ]);
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
        $user = UserTask::create([
            'role_id'=> $request->input('role_id'),
            'name'=> $request->input('name'),
            'surname'=> $request->input('surname'),
            'username'=> $request->input('username')
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = UserTask::find($id);
        return response()->json([
            $user
        ]);
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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = UserTask::where('id',$id)
        ->update([
            'role_id'=> $request->input('role_id'),
            'name'=> $request->input('name'),
            'surname'=> $request->input('surname'),
            'username'=> $request->input('username')
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserTask $user){
        $user->delete();
    }
}
