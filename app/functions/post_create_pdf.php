<?php

require_once '../bootstrap.php';
require_once '../fpdf/fpdf.php';

$answers = array();
$answer_ids = array();

$sql_req = 'SELECT question_id, answer, question FROM question_answers qa JOIN questions q where qa.question_id = q.id and (qa.id=';

foreach ($_POST as $key => $value) {
    if ( is_numeric($key) ) {
        $res = explode(',', $value);

        $answer_ids[] = $res[1];

        $answers[$key] = $res;
    }
}

$sql_req .= implode(' OR qa.id=', $answer_ids) . ')';

$sth = $dbh->query($sql_req);
$answers_tb = $sth->fetchAll();


$pdf = new FPDF();
$pdf->AddPage();

foreach ($answers_tb as $key => $a) {
    $question = $a['question'];
    $answer = $a['answer'];
    
    $pdf->SetFont('Arial','B',14);
    $pdf->Cell(0,0, $question,0);
    $pdf->Ln(10);
    $pdf->Cell(20);
    $pdf->SetFont('Arial','');
    $pdf->Cell(0,0, $answer,0);
    $pdf->Ln(20);
}

$pdf->Output();

// echo '<pre>' . var_export($questions, true) . '</pre>';