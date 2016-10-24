<!DOCTYPE html>
<html>
<head>
	<title>tree</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="plugins/d3-context-menu-master/d3-context-menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script type="text/javascript" src="plugins/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/d3.v3.min.js"></script>
	<script type="text/javascript" src="plugins/d3-context-menu-master/d3-context-menu.js"></script>
</head>
<body>
	<input type="file" style="display: none" />
	<form class="form-open-save">
		<label for="save-file-name">file name :</label>
		<input type="text" name="save-file-name" id="save-file-name">
		<input type="button" name="savebutton" value="Save" onclick="save()"/><br>
		<label for="open-file-name">file name :</label>
		<select id="open-file-name"></select>
		<input type="button" name="openbutton" value="Open" onclick="openFile()"/>
	</form>

	<div id="tree-container"></div>

	<script src="js/tree.js"></script>
</body>
</html>