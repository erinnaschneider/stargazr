<html>
<body>

<?php

/* Get the name of the upload file */
$filename = $_FILES['file']['name'];

/* choose where to save the upload file */
$location = "upload/".$filename;

/* Save the uploaded file to the local filesystem */
if( move_uploaded_file($_FILES['file']['tmp_name'],$location)){
    echo '<p>File uploaded successfully</p>';
}else{
    echo '<b>Error uploading file.</b>';
}

?>

</body>
</html>