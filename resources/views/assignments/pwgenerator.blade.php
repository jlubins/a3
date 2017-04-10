@extends('layouts.master')

@section('title')
    XKCD Password Generator
@endsection

@push('head')
    <link href="/css/assignments/a3.css" type='text/css' rel='stylesheet'>
@endpush

@section('content')
    <div id="passwordgenerator">
        <h1>A3: XKCD Password Generator</h1>
        <br>
        <form method='GET' action='/assignments/pwgenerator/generate'>
            <div class="row">
                <div class="col-sm-4">
                    <label for='text'>Select which base text you would like to use to generate your password.</label>
                    <div class="dropdown dropdown-dark">
                        <select name='text' id='text' class="dropdown-select">
                <option value='choose'>Choose one...</option>
                <option value='iliad.txt'>Homer's Iliad</option>
                <option value='alice.txt'>Alice in Wonderland</option>
                <option value='constitution.txt'>United States Constitution</option>
              </select>
                    </div>
                </div>
                <div class="col-sm-4">
                    <label for='wordNumber'>Select the number of words you would like to be generated.</label>
                    <div class="dropdown dropdown-dark">
                        <select name="wordNumber" class="dropdown-select">
                <option value='3'>3</option>
                <option value='4'>4</option>
                <option value='5'>5</option>
                <option value='6'>6</option>
              </select>
                    </div>
                </div>

                <div class="col-sm-2">
                    <fieldset class='checkboxes'>
                        <label id="check1"><input type='checkbox' name='uppercaseCheckbox' value='isUppercase'>Uppercase</label><br><br>
                        <label id="check2"><input type='checkbox' name='inclNumberCheckbox' value='inclNumber'>Include Number</label><br><br>
                    </fieldset>
                </div>
                <div class="col-sm-2">
                    <br>
                    <input type='submit' class='btn btn-primary btn-small'>
                </div>
            </div>
            <?php if ($_GET): ?>
            <div class="alert" role="alert">
                <h2>
              {{ $password }}
              </h2>
            </div>
            <?php endif; ?>
        </form>
    </div>
@endsection

@push('body')
@endpush
