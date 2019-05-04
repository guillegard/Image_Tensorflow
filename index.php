<?
require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
use google\appengine\api\cloud_storage\CloudStorageTools;
$options = [ 'img-tellme' => 'yourbucketname' ];
$upload_url = CloudStorageTools::createUploadUrl('/upload_handler.php', $options);

?>
<form action="<?php echo $upload_url?>" enctype="multipart/form-data" method="post">
    Files to upload: <br>
   <input type="file" name="userfile" size="40">
   <input type="submit" value="Send">
</form> 