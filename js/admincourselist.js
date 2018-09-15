var table;
$(document).ready(function() {
    table = $('#example').DataTable( {
		"processing": true,
        "serverSide": true,
        "ajax": "../includes/datatablecourselist.php",
        "columns": [
            { "data": null, "defaultContent": "" },
            { "data": "coursecode" },
            { "data": "coursename" },
            { "data": "studymode" },
            { "data": "award" },
            { "data": "credit" },
            { "data": "applicationdeadline" }
        ],
        columnDefs: [ {
            orderable: false,
            className: 'select-checkbox',
            targets:   0
        } ],
        select: {
            style:    'os',
            selector: 'td:first-child'
        },
        order: [[ 1, 'asc' ]]
    } );
} );