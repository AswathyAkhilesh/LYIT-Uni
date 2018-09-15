var table;
$(document).ready(function() {
    table = $('#example').DataTable( {
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