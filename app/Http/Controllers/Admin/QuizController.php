<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Quiz;
class QuizController extends Controller
{
    public function add(){
        return view('admin.quiz.create');
    }

    public function create(Request $request)
    {
      $this->validate($request, Quiz::$rules);
      $quiz = new Quiz;
      $form = $request->all();
      unset($form['_token']);
      $quiz->fill($form);
      $quiz->save();
      return redirect('admin/quiz/create');
    } 
}
