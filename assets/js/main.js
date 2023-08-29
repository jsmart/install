/**
 * JSmart CMS
 * @author Vadim Shestakov
 * @link https://jsmart.ru/
 * @license https://jsmart.ru/cms/eula
 * @copyright Copyright (c) 2018 Vadim Shestakov
 */

$(document).on('submit', 'form',function(event) {

    event.preventDefault();

    $('button').html('<span class="btn-loader"></span>').attr('disabled','disabled');

    $.post(base_url + 'install.php', $('form').serializeArray(), function (data) {
        if (data.success) {
            $.get(base_url + 'install.php', function (data) {
                $('body').html('<body>' + data.body + '</body>');
            });
        }
        else if(data.body) {
            $('body').html('<body>' + data.body + '</body>');
        }
    });
});

function agreement(text) {

    if (confirm(text)) {
        $('form').append('<input type="hidden" name="agreement" value="1">');
        return true;
    }

    return false;
};

function user_password() {

    var symbols = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    var length  = 8;
    var string  = '';

    for (i = 0; i < length; ++i) {
        position    = Math.floor(Math.random() * (symbols.length - 1));
        string      = string + symbols.substring(position, position + 1);
    }

    $('input[name=user_password]').val(string);
};

function copyfiles_progress() {

    $('button').html('<span class="btn-loader"></span>').attr('disabled','disabled');

    let timer = setInterval(function () {

        var value = Number($('[data-progress-bar]').data('progress-bar')) + 1;

        $('[data-progress-bar]').data('progress-bar', value);

        $('#bar-width').width(value + '%');
        $('#bar-percent').html(value + '%');

        if (value >= 100) {
            clearInterval(timer);
            $('form').submit();
        }
    }, 50);
};

function install_progress() {
    $('button').html('<span class="btn-loader"></span>').attr('disabled','disabled');
};

function install_done() {
    $('button').html($('button').data('value')).removeAttr('disabled');
    $('button').click();
};

function location_url(url) {
    $.get(base_url + 'install.php?done=yes', function (data) {
        location.href = url;
    });
};