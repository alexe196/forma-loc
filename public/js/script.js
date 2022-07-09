$(document).ready(function ($) {

    $('#add_user_id').submit(function () {

        let data_form = $('#add_user_id').serialize();
        $.ajax({
            url: "/add-user",
            type: "POST",
            data: data_form,
            beforeSend: function () {
                $("#content_post_view_id").addClass('loader-overflow').addClass('loader-overflow--active');
            },
            complete: function () {
                $("#content_post_view_id").removeClass('loader-overflow').removeClass('loader-overflow--active');
            },
            success: function (data) {

               let block = $('#message_add_user');
               if(data==1) {
                    block.html('Email already exists ');
                    block.css('display', 'block');
                    block.addClass('alert-warning');
                }
               else if(data==2) {
                    block.html('The data is not correct');
                    block.css('display', 'block');
                    block.addClass('alert-warning');
               }
               else {
                    block.html('User add : ' + $('#exampleInputName').val() + ' ' + $('#exampleInputLastName').val() + ' ' +
                        ' ' + $('#exampleInputEmail1').val() + ' ' + $('#password1').val());
                    block.css('display', 'block');
                    block.removeClass('alert-warning').addClass('alert-success');
                    $('#add_user_id').css('display', 'none');
                    $('#profile').html(data);

               }

            }
        });

        return false;
    });

});