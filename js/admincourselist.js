var table;
$(document).ready(function() {
	$("#view").click(function(){
        viewcourse();
    });
	
	$("#edit").click(function(){
        editcourse();
    });
	
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

function viewcourse(){
	var rowData = table.rows( { selected: true } ).data()[0];	
	if(!rowData)
		return;
	window.location.href = "../course.php?id=" + rowData.id;
}

function editcourse(){
	var rowData = table.rows( { selected: true } ).data()[0];	
	if(!rowData)
		return;
	window.location.href = "courseEdit.php?id=" + rowData.id;
}