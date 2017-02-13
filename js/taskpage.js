function stopstart(id) {
	var form = document.createElement("form");
	var input = document.createElement("input");

	form.action = "taskstopped.php";
	form.method = "POST";
	input.value = id;
	input.name = "id";
	
	form.appendChild(input);

	form.submit();
}