
<?php
$file = "cv.pdf"; // sizning CV faylingiz yo‘li

if(file_exists($file)){
    header('Content-Description: File Transfer');
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment; filename="cv.pdf"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
} else {
    echo "Fayl topilmadi!";
}
?>
