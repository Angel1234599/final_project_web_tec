function Select(elem) {

    elem.classList.toggle('active');

}
$(document).ready(function () {

    $('.btn-success').on('click', function () {
        // Hide entire col
        $(this).parent().parent().parent().hide();
        // Hide all alerts
        $('.alert').hide();
        // Show alert
        $('#successMsg').show();
    });

    $('.btn-secondary').on('click', function () {
        // Hide entire col
        $(this).parent().parent().parent().hide();
        // Hide all alerts
        $('.alert').hide();
        // Show alert
        $('#deniedMsg').show();
    });


    $('.alert').hide();
});

