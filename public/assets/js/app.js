
jQuery(document).ready(function($) {
    $('#view_address').click(function() {
        $('#first_view').slideUp(1000);
        $('#second_view').slideDown(1000);
    })
    $('#open_first_view').click(function() {
        $('#second_view').slideUp(1000);
        $('#first_view').slideDown(1000);
    })
    $('#open_add_new_address').click(function() {
        $('#new_address').slideDown(1000);
    })
    $('#open_edit_view').click(function() {
        $('#edit_address').slideDown(1000);
    })
    $('#cancle_new_address').click(function() {
        $('#new_address').slideUp(1000);
    })
    $('#cancel_edit_view').click(function() {
        $('#edit_address').slideUp(1000);
    })
    $('#different_billing').change(function() {
        $('.shipping-info-form-section').slideDown(1000);
    })
    $('#same_billing').change(function() {
        $('.shipping-info-form-section').slideUp(1000);
    })
})