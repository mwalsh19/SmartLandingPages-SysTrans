var datePicker = $('#datePicker'), id_group, oTable;

function getParameterByName(url, name)
{
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"), results = regex.exec(url);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function loaderReport1()
{
    var intVal = function (i) {
        return typeof i === 'string' ?
                i.replace(/[\$,]/g, '') * 1 :
                typeof i === 'number' ?
                i : 0;
    }, colsTotals = [];

    $.getJSON("/tenstreet/grandtotal?id_group=" + id_group, function (response) {
        //console.log(response);
        $('#grand-total').text(response.total);
    });

    if (oTable) {
        colsTotals = [];
        oTable.fnDestroy();
    }

    oTable = $("#report1-table").DataTable({
        "iDisplayLength": -1,
        "aaSorting": [],
        "bLengthChange": false,
        "sAjaxSource": "/tenstreet/report1?id_group=" + id_group,
        "fnPreDrawCallback": function (oSettings) {
            colsTotals = [];
        },
        "fnDrawCallback": function (oSettings) {
            var total = 0;
            $('#totals-row th').each(function (index, ele) {
                if (index > 0 && index < 9) {
                    var n = colsTotals[index];
                    $(ele).text(n);
                    total += n;
                }
            });
            //$('tfoot tr th:eq(9)').text(total);
        },
        "fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
            var total = 0;
            $(nRow).find('td').each(function (index, ele) {
                if (index > 0 && index < 9) {
                    var n = intVal(aData[index]);
                    total += n;
                    if (colsTotals[index] === undefined) {
                        colsTotals[index] = n;
                    } else {
                        colsTotals[index] += n;
                    }
                }
            });
            //$(nRow).find('td:eq(9)').text(total);
        }
    });
}

function filterDate(date) {
    var date_arr = date.split(' - ');
    $('#loader').show();
    $.getJSON('/tenstreet/index?date_from=' + date_arr[0] + '&date_to=' + date_arr[1], function (
            response) {
        id_group = response.data;
        $('#loader').hide();
        loaderReport1();
        //console.log(id_group);
    });
}

//datePicker.daterangepicker({format: 'YYYY-MM-DD', opens: 'left'});
//$(document).on('click', '.applyBtn', function () {
//
//    setTimeout(function () {
//        dateSelected = datePicker.val();
//        if (dateSelected) {
//            filterDate(dateSelected);
//        }
//    }, 1000);
//
//});

$('.exportReport').on('click', function () {
    var dataToSend = [];
    $("#report1-table tbody tr").each(function (index, elem) {
        var cols = [];
        $(elem).find('td').each(function (index2, elem2) {
            cols[index2] = $(elem2).text();
        });
        dataToSend.push(cols);
    });

    var footerCols = [[], []];
    $("#report1-table tfoot tr").each(function (index, elem) {
        $(elem).find('th').each(function (index2, elem2) {
            footerCols[index][index2] = $(elem2).text();
        });
    });
    dataToSend.push(footerCols);

//    console.log(dataToSend);

    window.frames.formToSend.contentWindow.send(JSON.stringify(dataToSend));
});


var fromDatePicker = $('#from'),
        toDatePicker = $('#to'),
        dateFormat = 'yy-mm-dd',
        from = $("#input1"),
        to = $("#input2");

fromDatePicker.datepicker({
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    minDate: null,
    numberOfMonths: 1,
    dateFormat: dateFormat,
    onSelect: function (dateText, inst) {
        from.val(dateText);
        toDatePicker.datepicker("option", "minDate", dateText);

    }
});
toDatePicker.datepicker({
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    minDate: null,
    numberOfMonths: 1,
    dateFormat: dateFormat,
    onSelect: function (dateText, inst) {
        to.val(dateText);
        fromDatePicker.datepicker("option", "maxDate", dateText);

    }
});
$('#report-dates').change(function () {
    $('.customDateVal strong').text('');
    var val = $(this).find('option:selected').val();

    if (val) {
        if (val !== 'custom') {
            filterDate(val);
        } else {
            $('#calendarModal').modal('show');
        }
    }

});
$('.applyCustomDateBtn').on('click', function () {
    var from = $('#input1').val();
    var to = $('#input2').val();

    if (!from) {
        alert('Start Date can\'t be blank. Please select a date');
        return false;
    }
    if (!to) {
        alert('End Date can\'t be blank. Please select a date');
        return false;
    }
//    console.log(from, to);
    $('.customDateVal strong').text('From: ' + from + ' To: ' + to);
    $('#calendarModal').modal('hide');

    filterDate(from + ' - ' + to);

});