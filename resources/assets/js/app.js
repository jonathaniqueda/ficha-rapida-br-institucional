function appendErrors(res) {
    var toEach = res.response != undefined || res.response != null ? res.response : res.responseJSON;
    $.each(toEach, function (k, v) {
        var splitKey = k.split('.');

        if (splitKey.length < 2) {
            var input = $("input[name='" + k + "']");

            if (input.length < 1) {
                var input = $("textarea[name='" + k + "']");
            }

            if (input.length < 1) {
                var input = $("select[name='" + k + "']");
            }
        } else {
            var key = splitKey[0] + '[' + splitKey[1] + ']';

            var input = $("input[name='" + key + "']");

            if (input.length < 1) {
                var input = $("textarea[name='" + key + "']");
            }

            if (input.length < 1) {
                var input = $("select[name='" + key + "']");
            }
        }

        if (input.length > 0) {
            $.each(v, function (number, error) {
                input.parent().append('<div class="alert alert-warning" style="margin-top: 10px;">' + error + '</div>');
            });
        }
    });

    $('#appendGlobalErrors').append('<div class="alert alert-warning" style="margin-top: 10px;">por favor, confira os campos do formulário.</div>');
}

$(document).ready(function () {

    // Smoothscroll to anchor
    $(document).on('click', '[data-scrollto]', function () {
        var html_body = $('html, body');

        var id = '#' + $(this).data('scrollto');
        if ($(id).length > 0) {
            var offset = 0;
            html_body.animate({scrollTop: $(id).offset().top - offset}, 1000);
        }
        return false;
    });

    $('.phone').mask('(00) 00000-0000');

    const ERROR_AJAX = '<div class="alert alert-error" style="margin-top: 10px;">Ocorreu um erro interno, por favor entre em contato com o administrado do site.</div>';

    $.ajaxSetup({
        headers: {'X-CSRF-TOKEN': window.Laravel.csrfToken}
    });

    $('.send-email').on('submit', function (e) {
        "use strict";
        e.preventDefault();
        var originalBtnTxt = $('.btn-process-ajax').text();

        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serializeArray(),
            timeout: 99999999,
            success: function (res) {
                if (res.status === 'success') {
                    var hasMsg = (res.response.msg != '' && res.response.msg != undefined);
                    var hasMessage = (res.message != '' && res.message != undefined);

                    if (hasMsg || hasMessage) {
                        var msg = (res.response.msg != '' && res.response.msg != undefined) ? res.response.msg : res.message;
                        swal({
                            title: msg,
                            type: "success",
                            closeOnConfirm: true
                        });
                    }
                } else if (res.status === 'warning') {
                    if (res.response.hasOwnProperty('msg')) {
                        $(this).append('<div class="alert alert-warning" style="margin-top: 10px;">' + res.response.msg + '</div>');
                    } else {
                        appendErrors(res);
                    }
                } else {
                    $(this).append(ERROR_AJAX);
                }
            },
            error: function (err) {
                appendErrors(err);
            },
            beforeSend: function () {
                $('.alert').remove();
                $('.btn-process-ajax').text('Processando...');
            },
            complete: function () {
                $('.btn-process-ajax').text(originalBtnTxt);

                if ($("#contact-form").length > 0) {
                    $("#contact-form")[0].reset();
                }
            }
        });

    });
});