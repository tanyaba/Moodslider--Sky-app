<?php
$allowedTypes = ['image/jpeg', 'image/jpg'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_FILES['data'])) {
        uploadData();  //call function to upload xml file
    }
    if (!empty($_FILES['images'])) {
        uploadImages($allowedTypes);    //call function to upload image files
    }
    header("Location: index.php");  //return to home page
    exit();
}

function uploadData() {

    if ($_FILES['data']['error'] > 0) {
        trigger_error("Data File Error: " . $_FILES['data']['error']);
    }

    if ($_FILES['data']['type']!='text/xml') {
        trigger_error("File Type Not Allowed: " . $_FILES['data']['type']);
    }

    $temp_datafile = $_FILES['data']['tmp_name'];
    $data_destination = "programmes.xml" ;
    if (!move_uploaded_file($temp_datafile, $data_destination)) {   //move the file from temporary location to destination
        trigger_error("Data file didn't load to destination");
    }
    if (file_exists($temp_datafile)) {          //delete temporary file
        unlink($temp_datafile);
    }
}

function uploadImages($allowedTypes) {
    $total = count($_FILES['images']['name']); // if multiple files are selected
    for ($i = 0; $i < $total; $i++) {
        
        if (!in_array($_FILES['images']['type'][$i], $allowedTypes)) {
            trigger_error("File Type Not Allowed: " . $_FILES['images']['type'][$i]);
        }
        if ($_FILES['images']['error'][$i] > 0) {
            trigger_error(" Images File Error: " . $_FILES['images']['error'][$i]);
        }
        $temp_imagesfile = $_FILES['images']['tmp_name'][$i];
        $images_destination = "images/" . basename($_FILES['images']['name'][$i]);
        if (!move_uploaded_file($temp_imagesfile, $images_destination)) {      //move the file from temporary location to destination
            trigger_error("Image file " . $_FILES['images']['name'][$i] . " didn't load to destination");
        }
        if (file_exists($temp_imagesfile)) {        //delete temporary file
            unlink($temp_imagesfile);
        }
    }
}
