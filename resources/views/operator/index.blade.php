@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @foreach($passes as $pass)
                    @if($pass->status=='Одобрено')
                    <div class="card">

                        <div>
                            <div class="row">
                                <div class="col-md-4"><img class="img-fluid" src="{{$pass->photo}}" id="photo" style="width: 100%; height: 100%;"></div>
                                <div class="col-md-8">
                                    <p id="fio"> ФИО: {{$pass->fio}}</p>
                                    <p id="email">Email: {{$pass->email}}</p>
                                    <p id="type">Тип пропуска: @if($pass->type==2)постоянный@else временный с {{$pass->date_begin}} по {{$pass->date_end}}@endif</p>
                                    <p id="status">{{$pass->status}}</p>
                                    <a href="#" data-toggle="modal"
                                       data-target="#modal_02" data-content="{{ $pass }}">
                                        <button style="margin-bottom: 10px;"><i>Настроить</i></button>
                                    </a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <br>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
@endsection

@include('modal.editPass1')
