@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" id="head">{{ __('Пропуск') }}</div>
                    <div class="card-body">
                        <div>
                            <div class="row">
                                <div class="col-md-4"><img class="img-fluid" src="{{$pass->photo}}"></div>
                                <div class="col-md-8">
                                    <p>Фамилия, Имя, Отчество: {{$pass->fio}}</p>
                                    <p>Email: {{$pass->email}}</p>
                                    <p>Статус: {{$pass->status}}</p>
                                    <p>Ссылка на пропуск: <a href="http://{{$_SERVER['SERVER_NAME'].'/'.$pass->random}}">http://{{$_SERVER['SERVER_NAME'].'/'.$pass->random}}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
