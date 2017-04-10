@extends('layouts.master')

@section('title')
Pig Latin Translator
@endsection

@push('head')
<link href="/css/assignments/a3.css" type='text/css' rel='stylesheet'>
@endpush

@section('content')

<h1>A3: Pig Latin Translator</h1>

<form class="clearfix" method='GET' action='/assignments/piglatin/translate'>

    <div class="form-group">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <?php if ($_GET): ?>
            <br>
            <div class="alert" role="alert">
                <p>
                    {{ $outputText }}
                </p>
            </div>
            <?php endif; ?>
        </div>
    </div>


    <div class="form-group">
        <label for="inputText" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Input:</label>
        <div class="inputGroupContainer">
            <div class="input-group">
                <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
                    <textarea class="form-control" cols="75" rows="5" id="inputText" name="inputText"></textarea>
                </div>
            </div>
        </div>
    </div>


    <div class="form-group">
        <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Ending:</label>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <fieldset class='radio'>
                <label><input type='radio' name='suffix' value='ay'> ay</label>
                <p>
                    <p>
                        <label><input type='radio' name='suffix' value='a'> a</label>
            </fieldset>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            <label class="control-label">Optional:</label>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
            <fieldset class='checkboxes'>
                <label id="lengthCheckbox"><input type='checkbox' name='lengthCheckbox' value='lengthCheckbox' class="control-label">Omit words less than 3 characters?</label><br><br>
            </fieldset>
        </div>
    </div>

    <div class="form-group">
        <input type='submit' class='btn btn-primary btn-small form-control' id="piglatinsubmitbutton">
        <br>
    </div>

</form>
@endsection @push('body')

@endpush
