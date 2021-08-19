"use strict";
var KTDatatablesBasicPaginations = function() {

	var initTable1 = function(e) {
		var table = $('table');
		// begin first table
		table.DataTable({
			responsive: true,
			pagingType: 'full_numbers',
			columnDefs: [
				{
					//targets: 3,
					width: '125px',
					title: 'Actions',
					orderable: false,
					render: function(data, type, full, meta) {
						return '';
					},
				},

			],
		});
	};

	return {
		//main function to initiate the module
		init: function() {
			initTable1();
		},

	};

}();
function tabChange(e){
	console.log(e);
}

jQuery(document).ready(function() {
	KTDatatablesBasicPaginations.init();
	
});
