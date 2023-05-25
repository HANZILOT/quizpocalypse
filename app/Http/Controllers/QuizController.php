<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::withCount('questions')
            ->get();

        return view('quizzes.index', ['quizzes' => $quizzes]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     */
    public function show(Quiz $quiz)
    {
        //
        return view('quizzes.show', compact('quiz'));
    }

    public function score(Request $request, Quiz $quiz)
    {
        $answers = $request->input('answers');

        $score = 0;

        foreach ($answers as $questionId => $choiceId) {
            $question = Question::find($questionId);
            $correctChoice = $question->choices->where('is_correct', 1)->first();

            if ($correctChoice && $correctChoice->id == $choiceId) {
                $score++;
            }
        }

        // Save the score in the quiz
        $quiz->score = $score;
        $quiz->save();

        return redirect()->route('quizzes.index')->with('success', 'Quiz submitted successfully. Your score: ' . $score);
    }




    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quiz $quiz)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quiz $quiz)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quiz $quiz)
    {
        //
    }
}
