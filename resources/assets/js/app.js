require('./bootstrap');
//require('./bootstrap-datepicker');
window.swal = require('sweetalert2');
require('jquery-ui-bundle');
require('selectize');
require('soundmanager2');
require('./bar-ui');


$(function () {
    "use strict";
    $('.datepicker').datepicker({
        dateFormat: 'yy-mm-dd',
        changeMonth: true,
        changeYear: true
    });
});


$(document).on('change', ':file', function () {
    var input = $(this),
            numFiles = input.get(0).files ? input.get(0).files.length : 1,
            label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
});
$(document).ready(function () {
    $(':file').on('fileselect', function (event, numFiles, label) {
        $('.btn-file span').text(label);
    });
});

$('#delivery,#tags').selectize({
    plugins: ['restore_on_backspace'],
    delimiter: ',',
    persist: false,
    options: [],
    create: function (input) {
        return {
            value: input,
            text: input
        };
    }
});

function bs_input_file() {
    $(".input-file").before(
            function () {
                if (!$(this).prev().hasClass('input-ghost')) {
                    var element = $("<input type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                    element.attr("name", $(this).attr("name"));
                    element.change(function () {
                        element.next(element).find('input').val((element.val()).split('\\').pop());
                    });
                    $(this).find("button.btn-choose").click(function () {
                        element.click();
                    });
                    $(this).find("button.btn-reset").click(function () {
                        element.val(null);
                        $(this).parents(".input-file").find('input').val('');
                    });
                    $(this).find('input').css("cursor", "pointer");
                    $(this).find('input').mousedown(function () {
                        $(this).parents('.input-file').prev().click();
                        return false;
                    });
                    return element;
                }
            }
    );
}
$(function () {
    bs_input_file();
});

$(function () {

    var requiredCheckboxes = $(':checkbox[required]');

    requiredCheckboxes.change(function () {

        if (requiredCheckboxes.is(':checked')) {
            requiredCheckboxes.removeAttr('required');
        } else {
            requiredCheckboxes.attr('required', 'required');
        }
    });

});

$("#link").change(function () {
    var fileInput = document.getElementById('link');
    var fileUrl = window.URL.createObjectURL(fileInput.files[0]);
    $(".audio_preview").attr("src", fileUrl);
});


$("#saveButton").click(function () {
    $('#progressDialog').modal('show');

    var updateForm = document.querySelector('form');
    var request = new XMLHttpRequest();

    request.upload.addEventListener('progress', function (e) {
        var percent = Math.round((e.loaded / e.total) * 100);

        $('.progress-bar').css('width', percent + '%');
        $('.sr-only').html(percent + '%');


    }, false);
});