@extends('layouts.app')
@section('sadrzaj')
    <h1>{{$naslovservisa}}</h1>
        @if(count($nizservisa) >0)
            <ul class="list-group">
                @foreach($nizservisa as $nizs)
                    <li class="list-group-item">{{$nizs}}</li>
                @endforeach
            </ul>
        @endif
@endsection