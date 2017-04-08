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
        <div class="row">
          <div class="col-sm-4">
            {!!  Form::open(['url' => 'assignments/piglatin/translate', 'method' => 'get']);
            echo Form::text('inputText');
            echo Form::checkbox('lengthCheckbox', 'lengthCheckbox');
            echo Form::radio('suffix', 'ay');
            echo Form::radio('suffix', 'a');
            echo Form::close(); !!}
            <?php if ($_GET): ?>
            <div class="alert" role="alert">
              <h2>
              {{ $inputText }}
              </h2>
            </div>
            <?php endif; ?>
          </div>
        </div>
@endsection


@push('body')
    <script src="/js/books/show.js"></script>
@endpush
