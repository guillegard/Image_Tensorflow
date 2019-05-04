<?php
  require_once 'google/appengine/api/cloud_storage/CloudStorageTools.php';
  use google\appengine\api\cloud_storage\CloudStorageTools;
  
  $gs_name = $_FILES["fileToUpload"]["tmp_name"]; 
  $fileType = $_FILES["fileToUpload"]["type"]; 
  $fileSize = $_FILES["fileToUpload"]["size"]; 
  $fileErrorMsg = $_FILES["fileToUpload"]["error"]; 
  $fileExt = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_EXTENSION);

  // change name if you want
  $fileName = 'temp.jpg';

  // put to cloud storage
  $image = file_get_contents($gs_name);
  $options = [ "gs" => [ "Content-Type" => "image/jpeg"]];
  $ctx = stream_context_create($options);
  file_put_contents("gs://img-tellme/".$fileName, $gs_name, 0, $ctx);
?>