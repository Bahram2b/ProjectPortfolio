$( document ).ready(function() {
  $('#editableTable').SetEditable({
	  columnsEd: "0,1,2",
	  onEdit: function(columnsEd) {
		 // console.log("===edit=="+(this));
		var empId = columnsEd[0].childNodes[1].innerHTML;
        var empName = columnsEd[0].childNodes[3].innerHTML;
        var gender = columnsEd[0].childNodes[5].innerHTML;

		$.ajax({
			type: 'POST',
			url : "action.php",
			dataType: "json",
			data: {id:empId, name:empName, gender:gender, action:'edit'},
			success: function (response) {
				if(response.status) {
					// show update message
				}
			}
		});
	  },
	  onBeforeDelete: function(columnsEd) {
	  var empId = columnsEd[0].childNodes[1].innerHTML;
	  $.ajax({
			type: 'POST',
			url : "action.php",
			dataType: "json",
			data: {id:empId, action:'delete'},
			success: function (response) {
				if(response.status) {
					// show delete message
				}
			}
		});
	  },
	});
});
