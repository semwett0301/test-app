window.onload = () => {
    $('.bank-grid').css('font-size', window.innerWidth / 50)

    $('#add_bank_form_open').click(function () {
        if ($('#add_bank_form').css('display') === 'none') {
            $('#add_bank_form').slideDown();
        } else {
            $('#add_bank_form').slideUp();
        }
    })


}
