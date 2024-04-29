$(document).ready(function () {

    quote();
    form_send_wrapper();
});

function quote() {
    $('[name="amount_people"]').change(function () {
        var amount_people = parseInt($(this).val());
        var amount_people_row = $('.person-add-wrapper').html();
        var amount_people_row_list = '';
        var person_no = 1;

        for (var $i = 1; $i <= amount_people; $i++) {
            amount_people_row_list += amount_people_row;
        }


        $('.person-list-wrapper').html(amount_people_row_list);

        var amount_people_number_next = $('.person-list-wrapper .row').length;

        $('.person-list-wrapper .row').each(function () {
            $(this).find('.person-number').html(person_no);

            person_no++;
        });


    });
}

function form_send_wrapper() {

    $('.form-send').submit(function (e) {
        e.preventDefault();

        var self = $(this);
        var val = false;
        var label_button = $(this).find('[type="submit"]').text();
        // $(this).find('[type="submit"]').text('Loading ...').prop('disabled', true);


        var confirm_status = $(this).data('confirm-status');
        var confirm_message = $(this).data('confirm-message');

        if (confirm_status) {
            swal({
                title: "Perhatian ...",
                html: confirm_message,
                type: "warning",
                showCancelButton: !0,
                confirmButtonText: "Ya, yakin",
                cancelButtonText: "Batal",
            }).then(function (e) {
                if (e.value) {
                    form_send(self, label_button);
                } else {
                    self.find('[type="submit"]').text(label_button).prop('disabled', false);
                }
            });
        } else {
            form_send(self, label_button);
        }
        return false;
    });
}

function form_send(self, label_button = '') {
    loading_start();
    var action = self.attr('action');
    var method = self.attr('method');

    var redirect = self.data('redirect');
    var pdf = self.data('pdf');
    var alert_show = self.data('alert-show');
    var alert_field_message = self.data('alert-field-message');
    var show_error_input = typeof self.data('show-error-input') == 'undefined' ? true : self.data('show-error-input');

    var page_reload = typeof self.data('page-reload') == 'undefined' ? true : self.data('page-reload');

    var alert_show_success_status = typeof self.data('alert-show-success-status') == 'undefined' ? false : self.data('alert-show-success-status');
    var alert_show_success_title = typeof self.data('alert-show-success-title') == 'undefined' ? 'Success' : self.data('alert-show-success-title');
    var alert_show_success_message = typeof self.data('alert-show-success-message') == 'undefined' ?  'Your process is Success' : self.data('alert-show-success-message');

    var message = '';
    var message_field = '';

    var form = self;
    var formData = new FormData(form[0]);

    $.ajax({
        url: action,
        type: method,
        data: formData,
        // async: false,
        beforeSend: function () {
            loading_start();
        },
        error: function (request, error) {
            loading_finish();
            if(show_error_input) {
                $('.error.invalid-feedback').remove();
                $('.form-control, .custom-file-input').removeClass('is-invalid');
                $.each(request.responseJSON.errors, function (key, val) {
                    var type = self.find('[name="' + key + '"]').attr('type');
                    self.find('[name="' + key + '"]').addClass('is-invalid');
                    message_field += val[0] + '<br />';
                    /**
                     * check apakah tipe inputan merupakan file atau tidak
                     */
                    if (type == 'file') {
                        self.find('[name="' + key + '"]').parents('.input-group').after('<span class="error invalid-feedback">' + val[0] + '</span>');
                        self.find('[name="' + key + '"]').parents('.input-group').addClass('is-invalid');
                    } else {
                        /**
                         * check apakah inputan merupakan piutangLain atau tidak
                         */
                        if ($('[name="' + key + '"]').hasClass('bootstrap-touchspin')) {
                            self.find('[name="' + key + '"]').after('<span class="error invalid-feedback">' + val[0] + '</span>');
                        } else {
                            self.find('[name="' + key + '"]').after('<span class="error invalid-feedback">' + val[0] + '</span>');
                        }
                    }
                });
            }

            if (alert_show == true) {

                if (alert_field_message == true) {

                    if (message_field) {
                        message = message_field;
                    } else {
                        message = request.responseJSON.message;
                    }
                } else {
                    message = request.responseJSON.message;
                }
                Swal.fire({
                    title: "Something wrong",
                    html: message,
                    icon: "warning"
                });

            }


            self.find('[type="submit"]').text(label_button).prop('disabled', false);
        },
        success: function (data) {
            loading_finish();
            self.find('.form-send [type="submit"]').text(label_button).prop('disabled', false);
            if (alert_show_success_status) {
                Swal.fire({
                    title: alert_show_success_title,
                    html: alert_show_success_message,
                    icon: 'success',
                    showDenyButton: false,
                    confirmButtonText: 'Ok',
                }).then(function (result) {
                    if(page_reload) {
                        window.location.reload();
                    }
                });

            } else {
                if (data.redirect) {
                    window.open(data.redirect, "_blank");
                    window.location.href = redirect;
                } else if (typeof redirect == 'undefined') {
                    if(page_reload) {
                        window.location.reload();
                    }
                } else {
                    if (pdf) {
                        window.open(pdf, "_blank");
                        window.location.href = redirect;
                    } else {
                        window.location.href = redirect;

                    }
                }
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });

}

function loading_start() {
    $('.container-loading').hide().removeClass('d-none').fadeIn('fast');
}

function loading_finish() {
    $('.container-loading').fadeOut('fast').addClass('d-none');
}
