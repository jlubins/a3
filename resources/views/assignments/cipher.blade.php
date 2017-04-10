@extends('layouts.master')


@section('title')
    Pig Latin Translator
@endsection


@push('head')
    <link href="/css/assignments/a3.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
    <h1>A3: Ciphers</h1>

    <form class="clearfix" role="form" method='GET' action='/assignments/cipher/encipher'>

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
      <label class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Cipher:</label>
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <fieldset class='radio'>
          <label id="cipherChoice"><input type='radio' name='cipherChoice' value='vigenere'>Vigenere</label>
          <label id="cipherChoice"><input type='radio' name='cipherChoice' value='caesar'>Caesar</label>
        </fieldset>
      </div>
    </div>

    <div class="form-group">
      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
        <label for='shiftValue'>Caesar Displacement:</label>
      </div>
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div class="dropdown dropdown-dark">
          <select name="shiftValue" class="dropdown-select">
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            <option value='4'>4</option>
          </select>
        </div>
      </div>
    </div>

    <div class="form-group">
      <label for="seedText" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Vigenere Key:</label>
        <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
          <div class="inputGroupContainer">
            <div class="input-group">
              <textarea class="form-control" cols="75" rows="1" id="seedText" name="seedText"></textarea>
            </div>
          </div>
        </div>
      </div>

    <div class="form-group">
      <label for="inputText" class="col-xs-2 col-sm-2 col-md-2 col-lg-2">Input:</label>
      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div class="inputGroupContainer">
          <div class="input-group">
            <textarea class="form-control" cols="75" rows="5" id="inputText" name="inputText"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <input type='submit' class='btn btn-primary btn-small form-control' id="piglatinsubmitbutton">
    </div>

    <br>
    </form>
@endsection


@push('body')
@endpush