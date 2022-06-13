@extends('adminlayouts.app')
@section('content')
    <ul>
        @foreach ($themes as $theme)
        <li>
            {{$theme->name}}
            <ul>
                @foreach ($theme->words as $word)
                <li>{{$word->name}}</li>
                @endforeach
            </ul>
        </li>
        @endforeach
    </ul>
@endsection
