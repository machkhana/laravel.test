<?php

namespace App\Http\Controllers;

use App\Model\Question;
use App\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    protected $question;
    protected $user;

    public function __construct()
    {
        $this->question = new Question();
        $this->user = new User();
    }

    public function index(){

        $users = $this->user->all();

        return view('question.index')
            ->with('users',$users);
    }
    public function show(int $id){
        $questions = $this->question->where('user_id',$id);
        return view('question.show')
            ->with('questions',$questions);
    }
}
