function getParameterByName(url, name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
            results = regex.exec(url);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}
;

$(".filterByDate").on("change", function () {
    var extra_params,
            date_param,
            filter_param,
            filter_param_value,
            option_selected = $(this).find(":selected").val(),
            hasfilter;

    console.log(option_selected);

    filter_param_value = getParameterByName(window.location.href, "filter");

    hasfilter = filter_param_value && filter_param_value !== "";

    date_param = (hasfilter ? '&' : '?') + 'date=' + option_selected;
    if (option_selected === '') {
        date_param = '';
    }

    console.log(filter_param_value);
    if (hasfilter) {
        filter_param = 'filter=' + filter_param_value;
        window.location = location.protocol + "//" + location.host + location.pathname + '?' + filter_param + date_param;
    } else {
        window.location = location.protocol + "//" + location.host + location.pathname + date_param;
    }

});