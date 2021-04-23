<?php  
    require_once 'fpdf183/fpdf.php';
    if(isset($_POST['g'])){
        $title = filter_input(INPUT_POST, 'title');
        $autor = filter_input(INPUT_POST, 'autor');
        #echo "<script>alert('estamo a vir gerar')</script>";
    }
?>