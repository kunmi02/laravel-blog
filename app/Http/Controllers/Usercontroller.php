<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Usercontroller extends Controller
{
    //
    /**
* Display a listing of the resource.
*
* @return Response
*/
public function index()
{
// fetch all users
	//$users=DB::select('select * from users');
	//return view('userview',['users'=>$users]);
	$users = DB::select('select * from users');
	return view('index', ['users'=>$users]);
}
/**
* Show the form for creating a new resource.
*
* @return Response
*/
public function create()
{
//
	return view('create');
}
/**
* Store a newly created resource in storage.
*
* @return Response
*/
public function store()
{
//

}
/**
* Display the specified resource.
*
* @param int $id
* @return Response
*/
public function show($id)
{
// display name to be edited 
$users=DB::select('select * from users where id = ?',[$id]);
return view('user_edit',['users'=>$users]);
}
/**
* Show the form for editing the specified resource.
*
* @param int $id
* @return Response
*/
public function edit(Request $request,$id)
{
//edit user details 
$name = $request->input('stud_name');
DB::update('update users set name = ? where id = ?',[$name,$id]);
echo "Record updated successfully.<br/>";
echo '<a href = "/user-records">Click Here</a> to go back.';
}
/**
* Update the specified resource in storage.
*
* @param int $id
* @return Response
*/
public function update($id)
{
//
}
/**
* Remove the specified resource from storage.
*
* @param int $id
* @return Response
*/
public function destroy($id)
{
//
}
}

