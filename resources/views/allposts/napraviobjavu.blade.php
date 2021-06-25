@extends('layouts.app')
@section('sadrzaj')
 {{$errors}}
  <h1>Kreiraj objavu</h1>
    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method'
    => 'POST']) !!}
  <div class="form-group">
    {{Form::label('naslovobjave', 'Naslov')}}
    {{Form::text('naslovobjave', '', ['class' =>'form-control', 'placeholder' =>'Upisi naslov'])}}
  </div>
  <div class="form-group">
    {{Form::label('telo', 'Objava')}}
    {{Form::textarea('telo', '', ['class' =>'form-control', 'placeholder' =>'Upisi nesto u body'])}}
  </div>
  {{Form::submit('Kreiraj objavu', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
@endsection