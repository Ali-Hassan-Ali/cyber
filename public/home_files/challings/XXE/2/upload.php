<?php
//Code tao loi unsafe file upload.
if ($_FILES['fileToUpload']['error'] > 0){
	$status = "Bạn chưa chọn file.";
}
else{
            $target = "uploads/";
            $target = $target . basename($_FILES['fileToUpload']['name']);

            if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target)) {
                $status = "Upload file thành công.";

            } else {
                $status = "Upload file thất bại.";
            }

}
	echo $status;
?>