function portfolio_filter( selected_category ) {

    var archive_results = $('#archive-results'),
        ajax_loader = $('.ajax-loader');

    $(ajax_loader).addClass('show');

    $(archive_results).addClass('hidden').empty();

    $.ajax({

        type : 'GET',

        url : ajax.ajax_url,

        data : {
            'action'    : 'mk_portfolio_filtering',
            'category'  : selected_category
        },

        success : function(response) {

            //console.log( response );

            $(ajax_loader).removeClass('show');

            $(archive_results).removeClass('hidden').html(response);
        },

        error : function(errorThrown) {

            console.log( errorThrown );
        }

    });

}