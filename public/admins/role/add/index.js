$('.checkbox_parent').on('click', function () {
    $(this).parents('.card_parent').find('.checkbox_children').prop('checked', $(this).prop('checked'));
})
$('.check_all').on('click', function () {
    $(this).parents('.hehe').find('.checkbox_children').prop('checked', $(this).prop('checked'));
    $(this).parents('.hehe').find('.checkbox_parent').prop('checked', $(this).prop('checked'));
})


