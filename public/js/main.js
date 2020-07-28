
$('#type').change(function () {
    if ($('#type').val()==2){
    $('#p_vr').hide(1000);
    $('#date_begin').removeAttr('required');
    $('#date_end').removeAttr('required');
    $('#quest').removeAttr('required');
    }
    else {$('#p_vr').show(1000);
    $('#date_begin').attr('required');
    $('#date_end').attr('required');
    $('#quest').attr('required');
    }
});

$('#date_begin').change(function () {
    let mindate= $('#date_begin').val();
    $('#date_end').attr('min', mindate);
});

$('#dal').click(function () {
    $('.step1').hide(1000);
    $('.step2').show(1000);
    $('#head').html('Шаг 2');
});
$('#dal1').click(function () {
    $('.step2').hide(1000);
    $('.step3').show(1000);
    $('#head').html('Шаг 3');
    let fio= $('#fio').val();
    let photo= $('#photo').val();
    let email= $('#email').val();
    let type1= $('#type').val();
    let date_begin= $('#date_begin').val();
    let date_end= $('#date_end').val();
    let type='';
    if (type1===1){
       type= "постоянный";
        $('#type_p').html('Тип пропуска: '+type);
    }
    else {
        type= "временный";
        $('#type_p').html('Тип пропуска: '+type+' c '+date_begin+' по '+date_end);
    }
    $('#photo_src').attr('src', photo);
    $('#fio_p').html('ФИО: '+fio);
    $('#email_p').html('Email: '+email);

});
$('#back').click(function () {
    $('.step1').show(1000);
    $('.step2').hide(1000);
    $('#head').html('Шаг 1');
});
$('#back1').click(function () {
    $('.step2').show(1000);
    $('.step3').hide(1000);
    $('#head').html('Шаг 2');
});
$('.step2').hide();
$('.step3').hide();

$("#mm").hide();
$('#status').change(function () {
    let t= $('#status').val();
    if (t=='Отклонено'){
        $("#mm").show(1000);
        $('#status').attr('required');
    }
    else{
        $("#mm").hide(1000);
        $('#status').removeAttr('required');
    }
});

// при открытии модального окна редактирования event (панель администратора)
$('#modal_01').on('show.bs.modal', function (pass) {
    // получить кнопку, которая его открыло
    let button = $(pass.relatedTarget);
    // извлечь информацию из атрибута data-content
    let content = button.data('content');
    let id = content.id;
    // let old_prob = content.prob;
    let old_status = content.status;

    console.log(content);
    console.log(old_status);

    $("#status [value='Пропуск готов']").remove();
    $(this).find('#edit_form').attr('action', 'admin/passes/' + id + '/update');
    // $(this).find('#prob').val(old_prob);
    if (old_status=='Пропуск готов'){
        $("#status").empty();
        $("#status").append('<option value="Истек">Истек</option>');

        // old_prob='';
    }
    $(this).find('#status').val(old_status);

});


