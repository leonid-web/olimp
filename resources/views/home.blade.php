@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" id="head">{{ __('Шаг 1') }}</div>

                <div class="card-body">
                    <form action="{{  route ('store_pass') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row step1">
                            <label for="fio"
                                   class="col-md-4 col-form-label text-md-right">{{ __('ФИО') }}</label>
                            <div class="col-md-6">
                                <input id="fio" type="text" class="form-control" name='fio'
                                       value="{{ old('fio') }}" placeholder="Введите ФИО"
                                       autofocus required pattern="^[А-Яа-яЁё\s]+$">
                            </div>
                        </div>
                        <div class="form-group row step1">
                            <label for="email"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Email-адрес') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name='email'
                                       value="{{ old('email') }}" placeholder="Введите email-адрес"
                                       autofocus required>
                            </div>
                        </div>


                        <div class="form-group row step1">
                            <label for="type"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Тип пропуска') }}</label>
                            <div class="col-md-6">
                                <select id="type"  class="form-control" required name="type">
                                    <?php $types=DB::table('types')->get() ?>
                                    @foreach($types as $type)
                                        <option name="type" value="{{ $type->id }}">{{ $type->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <?php
                        $p = date('Y-m-d', time() + 86400);


                        ?>


                        <div id="p_vr">
                        <div class="form-group row step1" >
                            <label for="date_begin"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Дата начала действия пропуска') }}</label>
                            <div class="col-md-6">
                                <input id="date_begin" type="date" class="form-control" name='date_begin'
                                       value="{{ old('date_begin') }}" placeholder="Введите дату" autofocus required min="<?php echo $p;?>">
                            </div>

                        </div>
                        <div class="form-group row step1">
                            <label for="date_end"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Дата окончания действия пропуска') }}</label>
                            <div class="col-md-6">
                                <input id="date_end" type="date" class="form-control" name='date_end'
                                       value="{{ old('date_end') }}" placeholder="Введите дату" autofocus required min="">
                            </div>

                        </div>
                        <div class="form-group row step1">
                            <label for="quest"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Цель посещения') }}</label>
                            <div class="col-md-6">
                                <input id="quest" type="text" class="form-control" name='quest'
                                       value="{{ old('quest') }}" placeholder="Введите цель"
                                       autofocus required>
                            </div>
                        </div>
                        </div>
                        <div class="step1">
                        <button type="button" id="dal">Далее</button>
                        </div>
                        <div class="form-group step2">
                            <input id="photo" type="file"  name="photo" required>
                        </div>
                            <div class="row step2">
                        <div class="col-md-6"><button type="button" id="back">Назад</button></div>


                            <div class="col-md-6"><button type="button" id="dal1">Далее</button></div>

                        </div>
{{--                        шаг 3--}}
                        <div class="step3">
                            <div class="row">
                                <div class="col-md-4"><img class="img-fluid" src="" id="photo_src"></div>
                                <div class="col-md-8">
                                    <p id="fio_p"></p>
                                    <p id="email_p"></p>
                                    <p id="type_p"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row step3">
                            <div class="col-md-6"><button type="button" id="back1">Назад</button></div>


                            <div class="col-md-6"><button id="ac">Подтвердить</button></div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
