<?php
if(isset($_GET['file'])){
	libxml_disable_entity_loader (false);
	$file = "uploads/" .$_GET['file'];
	$xmlfile = file_get_contents($file);
	$dom = new DOMDocument();
	$dom->loadXML($xmlfile, LIBXML_NOENT | LIBXML_DTDLOAD);
	$xmlList = simplexml_import_dom($dom);
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
	<title>List Student</title>
	<link rel="stylesheet" href="page/css/bootstrap.min.css" type = "text/css"/>
</head>
<body>	
	<br>
	<div><h1>Class Info</h1></div>
	<div class="table_file">
		<table class="table table-success table-striped">
			<thead>
				<tr>
					<th>STT</th>
					<th>Student Name</th>
					<th>Year of birth</th>
					<th>School</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$cnt = 1;
				foreach($xmlList->student as $student) { ?>
				<tr>
					<td><?php echo $cnt++ ?></td>
					<td><?php echo $student->name; ?></td>
					<td><?php echo $student->birth; ?></td>
					<td><?php echo $student->school; ?></td>
				</tr>	
				<?php } ?>
			</tbody>
		</table>
	</div>
	<div>
		<a class = "btn btn-secondary" href="http://localhost/challenge10">Home</a>
		<a class = "btn btn-info" href="http://localhost/challenge10/page/about.php">My info</a>
	</div>
</body>
</html>