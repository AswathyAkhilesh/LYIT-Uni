var table;
$(document).ready(function() {
	$("#view").click(function(){
        viewcourse();
    });
	
    table = $('#example').DataTable( {
		"processing": true,
        "serverSide": true,
        "ajax": "../includes/datatableapplicantlist.php",
        "columns": [
            { "data": null, "defaultContent": "" },
            { "data": "FirstName" },
            { "data": "CourseName" },
			
			//added courseid today
           
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
	window.location.href = "../admin/applicant.php?id=" + rowData.id+"&courseId="+ rowData.courseID;
}