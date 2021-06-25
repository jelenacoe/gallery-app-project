@extends('layouts.app')
@section('sadrzaj')
  <h1>Sve objave</h1>
    @if(count($postovi)>0)
      @foreach($postovi as $nasipostovi)
        <div class="card p-4">
          <h3><a href="galerija/{{$nasipostovi->id}}">{{$nasipostovi->title}}</a></h3>
          <small>Napisan je: {{$nasipostovi->created_at}}</small>
        </div>
      </br>
    @endforeach
    {{$postovi->links()}}
    @else
    <p>Nije pronađena nijedna objava.</p>
@endif
@endsection