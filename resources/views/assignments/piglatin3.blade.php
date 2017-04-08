@extends('layouts.master')


@section('title')
    Pig Latin Translator
@endsection


@push('head')
    <link href="/css/assignments/a3.css" type='text/css' rel='stylesheet'>
@endpush


@section('content')
<h1>A3: Pig Latin Translator</h1>
<br>
<form class="form form-inline" method='GET' action='/assignments/piglatin/translate'>

  <div class="row">
    <div class="col-md-2">
      <label for="inputText"><p class="text-right">Input:</p></label><br>
    </div>

    <div class="col-md-8">
      <textarea class="form-control" cols="75" rows="5" id="inputText" name="inputText"></textarea>
    </div>
  </div>

  <div class="row">
    <br>
    <div class="col-md-2">
      <label for="suffix"><p class="text-right">Ending:</p></label> <br>
    </div>

    <div class="col-md-8">
      <fieldset class='radio'>
        <label id="suffix"><input type='radio' name='suffix' value='ay'> ay</label>
        <label id="suffix"><input type='radio' name='suffix' value='a'> a</label>
      </fieldset>
    </div>
  </div>
  <br>

  <div class="row">
    <div class="col-md-4">
      <fieldset class='checkboxes'>
        <label id="lengthCheckbox"><input type='checkbox' name='lengthCheckbox' value='lengthCheckbox'>Omit words less than 3 characters?</label><br><br>
      </fieldset>
    </div>
  </div>


    <input type='submit' class='btn btn-primary btn-small' id="piglatinsubmitbutton">
  </div>



  </div>

</div>

</form>

<?php if ($_GET): ?>
<div class="alert" role="alert">
<p>
{{ $outputText }}
</p>
</div>
<?php endif; ?>


@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
