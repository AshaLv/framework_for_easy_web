<?php

namespace App\Http\Controllers;

use App\Post;
use App\User;
use App\Salary;
use App\Message;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function store(Request $request)
    {
    	$student_salary = new Salary();
    	$student_salary->date = $request->input('date');
    	$student_salary->salary = $request->input('salary');
    	$student_salary->time = $request->input('worktime');
    	$student_salary->user_id = $request->input('id');
    	$student_salary->save();
    	return back();
    }
    public function change(Request $request)
    {
    	$idCard = User::find($request->input('params.idCard'));
    	$idCard->salary = $request->input('params.salary');
    	$idCard->save();
    	return $idCard;
    }
    public function usersalaries(Request $request)
    {
    	$usersalaries = Salary::with('user')->where('user_id',$request->input('id'))->get();
    	return $usersalaries;
    }
    public function givesalary(Request $request)
    {
    	$message = new Message();
    	$message->title = $request->input('title');
    	$message->content = $request->input('content');
    	$message->user_id = auth()->user()->id;
    	$message->save();
    	return back();
    }
    public function showmessages()
    {
    	$messages = Message::with('user')->get();
    	return $messages;
    }
    public function search_salary(Request $request)
    {
        $users = User::where('name','like','%'.$request['name'].'%')->get();
        return $users;
    }
    public function check_post()
    {
        $posts=Post::all();
        return $posts;
    }
}
