$(function () {
    $('.sorting').on('click',function () {
        var column = $(this);
        var sort_by = $(this).hasClass('sorting_desc') ? 'ASC' : 'DESC';

        var href = '?sort='+column.data('column')+"&sort_by="+sort_by;
        if($('.js-search').val())
            href+='&q='+$('.js-search').val();

        location.href=href;
    })
})