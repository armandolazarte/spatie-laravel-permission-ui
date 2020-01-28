$(function () {
    $('#name').slugify('#display_name');
});
$(function () {
    $('.permiso-group').on('change', function () {
        $(this).parent().siblings('ul').find('input[type="checkbox"]').prop('checked', this.checked);
    });

    $('.permiso-select-all').on('click', function () {
        $('ul.permisos').find('input[type="checkbox"]').prop('checked', true);
        return false;
    });

    $('.permiso-deselect-all').on('click', function () {
        $('ul.permisos').find('input[type="checkbox"]').prop('checked', false);
        return false;
    });
});

function parentChecked() {
    $('.permiso-group').each(function () {
        var allChecked = true;

        $(this).parent().siblings('ul').find('input[type="checkbox"]').each(function () {
            if (!this.checked) allChecked = false;
        });

        $(this).prop('checked', allChecked);
    });
}

parentChecked();

$('.the-permiso').on('change', function () {
    parentChecked();
});