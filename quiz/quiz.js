$(document).ready(() => {
    $('.input-group label, .input-group input, .input-group img').on('click', function() {
        let inputGroup = $(this).closest('.input-group');
        inputGroup.addClass('done');
    }) 
})