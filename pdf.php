<?php  
    require_once 'fpdf183/fpdf.php';
    require('fpdf183/makefont/makefont.php');

    if(isset($_POST['g'])){
        $title = filter_input(INPUT_POST, 'title');
        $autor = filter_input(INPUT_POST, 'autor');
        $texto = filter_input(INPUT_POST, 'text');
        $pdf = new FPDF;
       
            //Gerando
            $pdf = new FPDF();

            //MakeFont('ISO-8859-1');
                      
            class PDF extends FPDF
            {
            // Page header
            function Header()
            {
                $title = filter_input(INPUT_POST, 'title');
                $texto = filter_input(INPUT_POST, 'text');
                // Logo
                $this->Image('pdf.png',10,6,30);
                // Arial bold 15
                $this->SetFont('Arial','B',15, 'ISO-8859-1');
                // Move to the right
                $this->Cell(80);
                // Title
                $this->Cell(30,10,' - '.$title.' - ',100,200,'C');
                // Line break
                $this->Ln(20);
            }

            // Page footer
            function Footer()
            {
                $autor = filter_input(INPUT_POST, 'autor');
                // Position at 1.5 cm from bottom
                $this->SetY(-15);
                // Arial italic 8
                $this->SetFont('Arial','I',8);
                // Page number
                $this->Cell(0,10,'created-by-'.$autor.', Page '.$this->PageNo().'/{nb}',0,0,'C');
            }
            }

            // Instanciation of inherited class
            $pdf = new PDF();
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetFont('Times','',12);
                $pdf->Cell(0,10, $texto ,0,1);
            $pdf->Output();
            
        #$pdf->Text();
        #echo "<script>alert('estamo a vir gerar')</script>";
    }
?>