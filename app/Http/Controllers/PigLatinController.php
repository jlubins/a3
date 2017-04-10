<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class PigLatinController extends Controller
{
    //
    public function translate(Request $request)
    {

        $this->validate($request, [
        'inputText' => 'required',
        'suffix' => 'required'
        ]);

        $getText = $request->input('inputText', null);
        $suffix = $request->input('suffix', null);
        $inputText = preg_split("/\s*\b\s*/", $getText);
        $vowels = "aeiou";
        if (isset($request->lengthCheckbox)) {
            foreach ($inputText as $keyval=>&$value) {
                if (ctype_alpha($value) and strlen($value) > 3) {
                    $splitword = str_split($value);
                    $firstchar = $splitword[0];
                    $secondchar = $splitword[1];

                    if ((strpbrk($firstchar.$secondchar, $vowels)) === false) {
                        $trimmedword = substr($value, 2);
                        $value = $trimmedword.$firstchar.$secondchar.$suffix;
                        $value = strtolower($value);
                    } elseif (strpbrk($firstchar, $vowels) === false) {
                        $trimmedword = substr($value, 1);
                        $value = $trimmedword.$firstchar.$suffix;
                        $value = strtolower($value);
                    } else {
                        $value = $value.'way';
                        $value = strtolower($value);
                    }
                }
                unset($value);
            }
        } else {
            foreach ($inputText as $keyval=>&$value) {
                if (ctype_alpha($value)) {
                    $splitword = str_split($value);
                    $firstchar = $splitword[0];
                    $secondchar = $splitword[1];


                    if ((strpbrk($firstchar.$secondchar, $vowels)) === false) {
                        $trimmedword = substr($value, 2);
                        $value = $trimmedword.$firstchar.$secondchar.$suffix;
                        $value = strtolower($value);
                    } elseif (strpbrk($firstchar, $vowels) === false) {
                        $trimmedword = substr($value, 1);
                        $value = $trimmedword.$firstchar.$suffix;
                        $value = strtolower($value);
                    } else {
                        $value = $value.'way';
                        $value = strtolower($value);
                    }
                }
            }
            unset($value);
        }
        if ($getText === null) {
            $outputText = "Please enter text.";
            return View::make('assignments.piglatin', compact('outputText'));
        } elseif ($suffix === null) {
            $outputText = "Please choose an ending.";
            return View::make('assignments.piglatin', compact('outputText'));
        } else {
            $outputText = implode(" ", $inputText);
        }
        return View::make('assignments.piglatin', compact('outputText'));
    }
}
