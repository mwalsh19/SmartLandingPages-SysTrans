
var ajaxUpdateTimeout,
        ajaxRequest,
        dataUpdated;

$('input#string').keyup(function (event) {
    data = $(this).serialize();
    clearTimeout(ajaxUpdateTimeout);
    ajaxUpdateTimeout = setTimeout(function () {
        $.fn.yiiListView.update('ajaxListView', {data: data});
    },
            300);

});

$('input#string').keypress(function (event) {
    if (event.which == 13) {
        return false;
    }
    if (event.which == 13) {
        event.preventDefault();
    }
});

function calculateViews() {
    $('.total span').text($(document).find('.ajaxTotalViews').text());
}

function getParameterByName(url, name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(url);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

$(document).on("change", '.filterByDate', function () {
    var date_param,
            filter_param,
            filter_param_value,
            option_selected = $(this).find(":selected").val(),
            hasFilter,
            stringParam,
            string_param_value,
            hasString;

    filter_param_value = getParameterByName(window.location.href, "filter");
    string_param_value = $('input#string').val();

    hasFilter = filter_param_value && filter_param_value !== "";
    hasString = string_param_value && string_param_value !== "";

    date_param = (hasFilter ? '&' : '?') + 'date=' + option_selected;

    if (option_selected === '') {
        date_param = '';
    }
    stringParam = '';
    if (hasString) {
        stringParam = date_param == '' ? '?string=' + string_param_value : '&string=' + string_param_value;
    }

    if (hasFilter) {
        filter_param = 'filter=' + filter_param_value;
        window.location = location.protocol + "//" + location.host + location.pathname + '?' + filter_param + date_param;
    } else {
        window.location = location.protocol + "//" + location.host + location.pathname + date_param;
    }

});