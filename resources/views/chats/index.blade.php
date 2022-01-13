@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Чаты') }}  <a href="{{route('chats.create')}}">Новый чат</a></div>
                    <div class="card-body">
                        @if($chats->count())
                            @foreach($chats as $chat)
                            <a href="{{Route('chats.show', $chat->id)}}">{{$chat->name}}</a><br>
                            @endforeach
                            @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
