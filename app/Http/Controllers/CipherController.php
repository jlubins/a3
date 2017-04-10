<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class CipherController extends Controller
{
    public function encipher(Request $request)
    {
        $getText = $request->input('inputText', null);
        $cipher = $request->input('cipherChoice', null);
        $shiftValue = $request->input('shiftValue', null);
        $cipherKey = $request->input('seedText', null);

        $initialText = $getText;
        $n = strlen($getText);

        if ($cipher === 'vigenere') {
            for ($i = 0; $i < $n; $i++) {
                if (!ctype_alpha($getText[$i])) {
                    $outputText = 'Please only use alphabetic characters.';
                }
            }

            $j = 0;
            $keylength = strlen($cipherKey);

            for ($i = 0; $i < $n; $i++) {
                if (ctype_alpha($getText[$i])) {
                    $j = $j % $keylength;

                    if (ctype_lower($cipherKey[$j])) {
                        dump(ord($cipherKey[$j]));
                        $cipherKey[$j] = ((ord($cipherKey[$j]) - 97) % 26);
                        dump(ord($cipherKey[$j]));
                        dump($j);
                        dump((integer) $cipherKey[$j]);
                    } elseif (ctype_upper($cipherKey[$j])) {
                        $cipherKey[$j] = ((ord($cipherKey[$j]) - 65) % 26);
                    }

                    if ((ctype_lower($getText[$i])) && ((ord($getText[$i]) + ord($cipherKey[$j])) > 122)) {
                        // shifts by displacement key
                $getText[$i] = ((((ord($getText[$i]) - 97) + ord($cipherKey[$j])) % 26) + 97);
                    } elseif ((ctype_upper($getText[$i])) && (((ord($getText[$i]) + ord($cipherKey[$j])) > 90))) {
                        $getText[$i] = ((((ord($getText[$i]) - 65) + ord($cipherKey[$j])) % 26) + 65);
                    } else {
                        $getText[$i] = ord($getText[$i]) + ord($cipherKey[$j]);
                    }

                    $j++;
                }
            }

            if ($getText === null) {
                $outputText = "Please enter text.";
                return View::make('assignments.cipher', compact('outputText'));
            } elseif ($cipher === null) {
                $outputText = "Please choose a cipher.";
                return View::make('assignments.cipher', compact('outputText'));
            } else {
                $outputText = $getText;
                return View::make('assignments.cipher', compact('outputText'));
            }
        } elseif ($cipher === 'caesar') {
            for ($i = 0; $i < $n; $i++) {
                if (ctype_alpha($getText[$i])) {
                    if ((ctype_lower($getText[$i])) && (((int) $getText[$i] + $shiftValue) > 122)) {
                        // accounts for wraparound
                $getText[$i] = (((($getText[$i] - 97) + $shiftValue) % 26) + 97);
                    } elseif ((ctype_upper($getText[$i])) && (((int) $getText[$i] + $shiftValue) > 90)) {
                        $getText[$i] = (((($getText[$i] - 65) + $shiftValue) % 26) + 65);
                    } else {
                        $getText[$i] = (int) $getText[$i] + $shiftValue;
                    }
                }
            }
            if ($getText === null) {
                $outputText = "Please enter text.";
                return View::make('assignments.cipher', compact('outputText'));
            } elseif ($cipher === null) {
                $outputText = "Please choose a cipher";
                return View::make('assignments.cipher', compact('outputText'));
            } else {
                $outputText = $getText;
                return View::make('assignments.cipher', compact('outputText'));
            }
        }
    }
}
