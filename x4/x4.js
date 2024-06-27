$(document).ready(() => {
    $('td').eq(0).addClass('lights-on');

    $('#winMessage').hide();

    $('td').on('click', (event) => {
        let target = $(event.currentTarget);
        $(target).toggleClass('lights-on');
        let targetIndex = $(target).index();

        let leftTarget = $(target).prev();
        leftTarget.toggleClass('lights-on');


        let rightTarget = $(target).next();
        rightTarget.toggleClass('lights-on');

        let upSibling = $(target).parent().prev().children().eq(targetIndex);
        upSibling.toggleClass('lights-on');
        let downSibling = $(target).parent().next().children().eq(targetIndex);
        downSibling.toggleClass('lights-on');

        if($('td.lights-on').length == 0){
            $('#winMessage').show();
        }
    })
})