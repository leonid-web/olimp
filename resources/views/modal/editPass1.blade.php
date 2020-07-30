{{--Модальное окно редактирования мероприятия--}}
<div class="modal" tabindex="-1" role="dialog" id="modal_02">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Редактирование мероприятия</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" class="form-horizontal" id="edit_form">
                    @csrf
                    @method('PATCH')
                    <div class="form-group row">
                        <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Статус') }}</label>
                        <div class="col-md-6">
                            <select class="form-control" name="status" id="status">


                                    <option value="Пропуск готов"
                                            >Пропуск готов</option>

                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-my">Сохранить</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
