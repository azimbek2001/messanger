@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $chat->name }} <a href="{{route('messages.create',['id'=>$chat->id])}}">Написать сообщение</a></div>
                    <div class="card-body">
                        @if($chat->messanges)
                        @foreach($chat->messanges as $messange)
                            <p>{{$messange->text}} ( {{$messange->user->login}} ) {{$messange->created_at}}</p>
                        @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
