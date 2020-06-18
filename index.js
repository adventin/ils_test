$(function () {
    $(".resizable1").resizable(
        {
            autoHide: true,
            handles: 'e',
            resize: function (e, ui) {
                var parent = ui.element.parent();
                var remainingSpace = parent.width() - ui.element.outerWidth(),
                    divTwo = ui.element.next(),
                    divTwoWidth = (remainingSpace - (divTwo.outerWidth() - divTwo.width())) / parent.width() * 100 + "%";
                divTwo.width(divTwoWidth);
            },
            stop: function (e, ui) {
                var parent = ui.element.parent();
                ui.element.css(
                    {
                        width: ui.element.width() / parent.width() * 100 + "%",
                    });
            }
        });

    $(".resizableVertical").resizable(
        {
            autoHide: true,
            handles: 's',
            resize: function (e, ui) {
                var parent = ui.element.parent();
                var remainingSpace = parent.height() - ui.element.outerHeight(),
                    divTwo = ui.element.next(),
                    divTwoWidth = (remainingSpace - (divTwo.outerHeight() - divTwo.height())) / parent.height() * 100 + "%";
                divTwo.height(divTwoWidth);
            },
            stop: function (e, ui) {
                var parent = ui.element.parent();
                ui.element.css(
                    {
                        height: ui.element.height() / parent.height() * 100 + "%",
                    });
            }
        });

    $(".tabsJs").tabs();

    $('.sidebarAreaJs').on('change keyup', function () {
        $('.sidebarJs').html($(this).val())
    });

    $('.contentTopAreaJs').on('change keyup', function () {
        $('.contentTopJs').html($(this).val())
    });
});