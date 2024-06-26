<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkinTypeController extends Controller
{
    public function showSkinTypeTest()
    {
        return view('skinTestExam');
    }

    public function storeSkinTypeAnswers(Request $request)
    {
        // Validate the request
        $request->validate([
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
        ]);

        // Store answers in the session
        session([
            'q1' => $request->q1,
            'q2' => $request->q2,
            'q3' => $request->q3,
            'q4' => $request->q4,
            'q5' => $request->q5,
        ]);

        // Redirect to the result page
        return redirect()->route('skinTestResult.view');
    }

    public function showSkinTypeResult()
    {
        // Retrieve answers from the session
        $answers = session()->only(['q1', 'q2', 'q3', 'q4', 'q5']);

        // Determine skin type based on answers
        $skinType = $this->determineSkinType($answers);

        return view('skinTestResult', compact('skinType'));
    }

    private function determineSkinType($answers)
    {
        // Logic to determine skin type based on answers
        // Example logic
        if ($answers['q1'] == 'Tight and dry' || $answers['q4'] == 'Dry and flaky') {
            if ($answers['q3'] == 'Burns easily and feels sensitive') {
                return 'Dry, Sensitive';
            }
            return 'Dry';
        } elseif ($answers['q1'] == 'Shiny and greasy' || $answers['q4'] == 'Shiny and oily') {
            if ($answers['q2'] == 'Frequently' || $answers['q3'] == 'Gets very oily and prone to breakouts') {
                return 'Oily, Acne-Prone';
            }
            return 'Oily, Combination';
        } else {
            return 'Normal, Combination';
        }
    }
}