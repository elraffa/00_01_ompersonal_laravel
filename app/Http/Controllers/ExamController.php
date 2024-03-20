<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exam;
use App\Models\Question;
use App\Models\Choice;
use App\Models\CorrectAnswer;
use Inertia\Inertia;

class ExamController extends Controller
{
    public function createExam($name)
    {
        $exam = new Exam;
        $exam->name = $name;
        $exam->save();

        // Load the questions from the JSON file
        $questionsData = json_decode(file_get_contents(database_path('questions-01.json')), true);

        foreach ($questionsData as $questionData) {
            $question = new Question;
            $question->exam_id = $exam->id;
            $question->question_text = $questionData['question'];
            $question->save();

            foreach ($questionData['choices'] as $choiceText) {
                $choice = new Choice;
                $choice->question_id = $question->id;
                $choice->choice_text = $choiceText;
                $choice->save();

                if ($choiceText === $questionData['correctAnswer']) {
                    $correctAnswer = new CorrectAnswer;
                    $correctAnswer->question_id = $question->id;
                    $correctAnswer->choice_id = $choice->id;
                    $correctAnswer->save();
                }
            }
        }
    }

    public function showExam($id)
    {
        $exam = Exam::with('questions.choices')->find($id);

        return Inertia::render('Exams/Exam-01', ['exam' => $exam]);
    }
}
