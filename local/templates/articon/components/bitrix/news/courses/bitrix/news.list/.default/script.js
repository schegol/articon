$(function () {
    let filterTabs = $('.courses-tab');

    if (filterTabs.length) {
        filterTabs.on('click', function () {
            let tab = $(this),
                contentBlock = $('.courses-tab-content'),
                id = tab.data('section');

            contentBlock.fadeOut();

            //TODO: доделать подстановку
            $.ajax({
                type: 'GET',
                url: coursesListTemplatePath + '/ajax.php?iblock=' + iBlockId + '&section=' + id,
                dataType: 'html',
                success: function(data) {
                    console.log(data);
                    // let filteredData = $(data),
                    //     filterItems = filteredData.find('.portfolio__item');
                    //
                    // if (filterItems.length > 0) {
                    //     $('.portfolio__items-wrapper').replaceWith(filteredData);
                    // } else {
                    //     $('.portfolio__items-wrapper').html('<p style="text-align: center; grid-column: 1 / 6;">Нет результатов</p>');
                    // }
                    // console.log(filteredData);
                },
                complete: function () {
                    contentBlock.fadeIn();
                }
            })
        });
    }
});