function viewTasks(id) {
	var form = document.createElement("form");
	form.action = "taskpage.php";
	form.method = "get";
	var input = document.createElement("input");
	input.value = id;
	input.name = "name";
	form.appendChild(input);
	form.submit();
}

