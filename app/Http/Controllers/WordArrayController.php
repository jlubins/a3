<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordArrayController extends Controller
{
    //
    public $generatedvalues;
    public $textarray;

    public function MakeArray($text) {

        global $textarray;

        $textscan = file_get_contents(database_path().'/'.$text, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $textsanspunctuation = trim(preg_replace('/[^0-9a-z]+/i', ' ', $textscan));
        $textarray = explode(" ", $textsanspunctuation);

        return $textarray;
    }

    public function generate(Request $request) {

      global $text;

      $text = $request->input('text',  null);
      $wordnumber = $request->input('wordNumber',  null);
      $isUppercase = isset($request->uppercaseCheckbox);
      $inclNumber = isset($request->inclNumberCheckbox);


      if ($text != 'choose') {
        //create array from chosen text file
        $textarray = $this->MakeArray($text);
        shuffle($textarray);

        foreach ($textarray as $keyval=>$value) {
            if (strlen($value) < 4) {
              unset($textarray[$keyval]);
            }
          }

        foreach ($textarray as $keyval=>$value) {
          $textarray[$keyval] = strtolower($textarray[$keyval]);
        }

        $textarray = array_unique($textarray);


        $generatedvalues = array_slice($textarray, 0, $wordnumber);

        if($isUppercase) {
          foreach ($generatedvalues as $keyval => $value) {
            $generatedvalues[$keyval] = ucwords($generatedvalues[$keyval]);
          }
        }

        if ($inclNumber) {
          $generatednumber = mt_rand(0, 99);
          array_push($generatedvalues, $generatednumber);
        }

        $password = join('-', $generatedvalues);
      } else {
        $password = 'Please choose a text.';
      }
      return \View::make('assignments.pwgenerator', compact('password'));
    }
  }
