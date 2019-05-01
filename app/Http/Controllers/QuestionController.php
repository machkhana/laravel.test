<?php

namespace App\Http\Controllers;

use App\Model\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    //
    protected $question;

    public function __construct()
    {
        $this->question = new Question();
    }

    public function index(){
        $questions = $this->question->all();
        return view('question.index')->with('questions',$questions);
    }
}
