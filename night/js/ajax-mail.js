$('#form1').on('submit', function () {
    var formID = $(this).attr('id');
    var formNm = $('#' + formID);
    $.ajax({
        type: 'post',
        url: '../email.php',
        data: $(this).serialize(),
        success: function () {
            alert("Спасибо за ваш интерес, мы с вами свяжемся в ближайшее время!");
            $(".modal").modal('hide');
            dataLayer.push({ 'event': 'night-bmw-form1' });
        },
        error: function() {
            alert("Что-то пошло не так, повторите еще раз");
        }
    });
    return false;
});

$('#form2').on('submit', function () {
    var formID = $(this).attr('id');
    var formNm = $('#' + formID);
    $.ajax({
        type: 'post',
        url: '../email.php',
        data: $(this).serialize(),
        success: function () {
            alert("Спасибо за ваш интерес, мы с вами свяжемся в ближайшее время!");
            $(".modal").modal('hide');
            dataLayer.push({ 'event': 'night-bmw-form2' });
        },
        error: function() {
            alert("Что-то пошло не так, повторите еще раз");
        }
    });
    return false;
});

$('#form3').on('submit', function () {
    var formID = $(this).attr('id');
    var formNm = $('#' + formID);
    $.ajax({
        type: 'post',
        url: '../email.php',
        data: $(this).serialize(),
        success: function () {
            alert("Спасибо за ваш интерес, мы с вами свяжемся в ближайшее время!");
            $(".modal").modal('hide');
            dataLayer.push({ 'event': 'night-bmw-form3' });
        },
        error: function() {
            alert("Что-то пошло не так, повторите еще раз");
        }
    });
    return false;
});

$('#form4').on('submit', function () {
    var formID = $(this).attr('id');
    var formNm = $('#' + formID);
    $.ajax({
        type: 'post',
        url: '../email.php',
        data: $(this).serialize(),
        success: function () {
            alert("Спасибо за ваш интерес, мы с вами свяжемся в ближайшее время!");
            $(".modal").modal('hide');
            dataLayer.push({ 'event': 'night-bmw-form4' });
        },
        error: function() {
            alert("Что-то пошло не так, повторите еще раз");
        }
    });
    return false;
});


$('#form5').on('submit', function () {
    var formID = $(this).attr('id');
    var formNm = $('#' + formID);
    $.ajax({
        type: 'post',
        url: '../email.php',
        data: $(this).serialize(),
        success: function () {
            alert("Спасибо за ваш интерес, мы с вами свяжемся в ближайшее время!");
            $(".modal").modal('hide');
            dataLayer.push({ 'event': 'night-bmw-form5' });
        },
        error: function() {
            alert("Что-то пошло не так, повторите еще раз");
        }
    });
    return false;
});