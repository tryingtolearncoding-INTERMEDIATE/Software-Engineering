<?php
if (isset($_POST['new_content'])) {
    $new_content = $_POST['new_content'];
    
    file_put_contents('questions.txt', $new_content);
    
    header('Location: typesofcodinglanguages.php');
    exit();
}
?>
