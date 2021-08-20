function fetchData(){
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            document.getElementById("info").innerHTML = this.responseText;
        }
    };
    xhttp.open("GET","select.php",true);
    xhttp.send();

} 

function submitFrom(){
	$.ajax({
		type: "POST",
		url: "insert.php",
		data:$('#whiskyForm').serialize(), 
		success: function(response){
			$('#succsess').html(response);
		}
	});

	var form = document.getElementById('whiskyForm').reset();
	return false;

}

function deleteRow(id){
	if(confirm('Are you sure?')){
		$.ajax({
			type: "POST",
			url: "delete.php",
			data: {delete_id:id},
			success: function(data){
				$('#delete'+id).hide();
			} 
		});
	}	
}
