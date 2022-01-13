@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Создание сообщения</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('messages.store') }}">
                            @csrf
                            <input type="hidden" name="chat_id" value="{{$chat->id}}">
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Текст') }}</label>

                                <div class="col-md-6">
                                    <textarea id="text" class="form-control" name="text"></textarea>
                                </div>
                            </div>
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Создать') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

