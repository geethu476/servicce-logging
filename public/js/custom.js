// validator
// $.getScript('https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js', function() {
    $.validator.addMethod("IsAlpha", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[a-zA-Z]+$/.test( value );
    }, 'Please enter valid detail.');
    $.validator.addMethod("IsAlphaSpace", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[a-zA-Z ]+$/.test( value );
    }, 'Please enter valid detail.');
    $.validator.addMethod("IsAlphaNum", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[a-zA-Z0-9]+$/.test( value );
    }, 'Please enter valid detail.');
    $.validator.addMethod("IsAlphaNumSpace", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[a-zA-Z0-9 ]+$/.test( value );
    }, 'Please enter valid detail.');
    $.validator.addMethod("IsPhone", function(value, element) {
        // allow any non-whitespace characters as the host part
        return this.optional( element ) || /^[0-9+ ]+$/.test( value );
    }, 'Please enter valid phone number.');
        $.validator.addMethod('filesize', function (value, element, param) {
        return this.optional(element) || (element.files[0].size <= param)
    }, 'File size must be less than {0}');
    $.validator.setDefaults({ ignore: ":hidden:not(.chosen-input)" })
// });
// end validator
// sidebar toggle save
$( "#toggle_nav_btn" ).click(function(e) {
    if($(".wrapper").hasClass('slide-nav-toggle')) {
        localStorage.setItem("sidebarStatus", "closed");
    } else {
        localStorage.setItem("sidebarStatus", "open");
    }
});
$(function () {
    if(localStorage.getItem("sidebarStatus") && localStorage.getItem("sidebarStatus") == 'open') {
        $(".wrapper").addClass("slide-nav-toggle");
    } else {
        $(".wrapper").removeClass("slide-nav-toggle");
    }
});
// end sidebar toggle save
// start datepicker
$('.datepicker').datepicker({
    format: 'dd/mm/yyyy',
    autoclose: true
});
$('.datepicker-format').datepicker({
    format: 'dd-mm-yyyy',
    autoclose: true
});
//end datepicker
// start dataTable
var dataTable = $('.dataTable').DataTable( {
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
        "order": []
    }],
    initComplete: function () {
        this.api().columns().every( function () {
            var column = this;
            if(!$(column.header()).hasClass('no-sort')) {
                if($(column.header()).hasClass('textbox')) {
                    var select = $('<input type="text" class="form-control dataTable-search" />')
                    .appendTo($(column.footer()).empty());
                } else {
                    var select = $('<select class="form-control dataTable-search"><option value=""></option></select>')
                    .appendTo($(column.footer()).empty());
                    select.on( 'change', function () {
                        var val = $.fn.dataTable.util.escapeRegex(
                            $(this).val()
                        );

                        column
                            .search( val ? '^'+val+'$' : '', true, false )
                            .draw();
                    });
                    column.data().unique().sort().each( function ( d, j ) {
                        select.append( '<option value="'+d+'">'+d+'</option>' )
                    });  
                }
            }
        });
    }
});
dataTable.columns().every( function () {
    var that = this;
    $( '.dataTable-search', this.footer() ).on( 'keyup change', function () {
        if ( that.search() !== this.value ) {
            that
                .search( this.value )
                .draw();
        }
    });
});
$('.dataTable-export').DataTable({
    "paging": true,
    "lengthChange": true,
    "searching": true,
    "ordering": true,
    "info": true,
    "autoWidth": false,
    "columnDefs": [ {
        "targets"  : 'no-sort',
        "orderable": false,
        "order": []
    }],
    dom: 'Bfrtip',
    buttons: [
        'copy', 'csv', 'excel', 'pdf', 'print'
    ]
});
// end dataTable
// start notifications
$.get("/notification/unread", function(data, status) {
    $('#notification').append(data);
}); 
// end notifications

// get branches
$.get("/get-branch", function(data, status) {
    $('#branch').append(data);
}); 
// end notifications

// getScript
$.getScript('https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js', function() {
    // start chosen
    $(".chosen-input").chosen({no_results_text: "No records found!"}); 
    // end chosen
});

// start search suggestion
$(function () {
    $('.list-group').hide();
    $('.list-group').empty();
});


$("#top-bar-search").keyup(function(e) {
    var keyword = $(e.target).val();
    if(keyword) {
        $('.list-group').show();
        $('.list-group').html('<li class="list-group-item">Please wait...</li><li class="list-group-item"></li>');
        $.get( "/search/" + keyword + "/ajax", function( response ) {
            $('.list-group').html(response + '<li class="list-group-item"></li>');
            if(!response) $('.list-group').html('<li class="list-group-item">No records found...</li><li class="list-group-item"></li>');
        });
    } else {
        $('.list-group').hide();
        $('.list-group').empty();
    }
    if(e.key === "Escape") {
        $("#top-bar-search").val('');
        $('.list-group').hide();
    }
});
// end search

function switchBranch(branch){
    $.get( "/switch/" + branch + "/branch", function( response ) {
        window.location.reload();
    });
}

// start min-max
$( ".min-max" ).change(function() {
    var min = $(this).data('min');
    var max = $(this).data('max');
    var value = $(this).val();

    if(parseInt(value) < min || isNaN(parseInt(value))) 
        $(this).val(min);
    else if(parseInt(value) > max) 
        $(this).val(max);
    else
        $(this).val(value); 
});
// end min-max

// makeDefaultCountryState
function makeDefaultCountryState(country, state) {
    $('#country').val(country);
    $('#country').trigger("chosen:updated");

    $.get("/country/" + country + "/states/json", function(data, status){
        $('#state').html('<option value="">-- select state --</option>');
        $.each(data, function(key, value) {
            $('#state')
                .append($("<option></option>")
                    .attr("value", key)
                    .text(value));
        });
        
        $('#state').val(state);
        $('#state').trigger("chosen:updated");
    });
}
$(function () {
    makeDefaultCountryState("IN", "KL");
});