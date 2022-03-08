<!DOCTYPE html>
<html lang="en">
<head>
	<title>Demo lỗi Blind XXE</title>
	<link rel="stylesheet" href="page/css/bootstrap.min.css" type = "text/css"/>
</head>
<body>
	<div>
		<br><br>
		<form action="upload.php" method="post" enctype="multipart/form-data">
		    Select file to upload:
		    <input type="file" name="fileToUpload" id="fileToUpload" required="">
		    <input class = "btn btn-primary" type="submit" value="Upload File">
		</form>
	</div>
	<div class="table_file">
		<table class="table table-success table-striped">
			<thead>
				<tr>
					<th>STT</th>
					<th>File Name</th>
					<th>View XML</th>
					<th>Download</th>
					<th>Parse Blind XXE</th>
					<th>Parse Fixed XXE</th>
				</tr>
			</thead>
			<tbody>
				<?php
					$dir = "./uploads/";
					$allFile = scandir($dir);
					$files = array_diff($allFile, array('.', '..'));
					$cnt = 1;
					foreach ($files as $file) { ?>
					<tr>
						<td><?php echo $cnt++ ?></td>
						<td><?php echo $file; ?></td>
						<td><a href="uploads/<?php echo $file; ?>" target="_self">View</a></td>
						<td><a href="uploads/<?php echo $file; ?>" download>Download</a></td>
						<td><a href="parse.php?file=<?php echo $file; ?>" target="_self">Parse</a></td>
						<td><a href="parse_fixed.php?file=<?php echo $file; ?>" target="_self">Parse Fixed</a></td>
					</tr>	
					<?php } ?>
			</tbody>
		</table>
	</div>
	<div><a class = "btn btn-info" href="http://localhost/challenge10/page/about.php">My info</a></div>
</body>
</html>