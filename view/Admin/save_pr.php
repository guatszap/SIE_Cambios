<?php session_start();
    
    $doc_user = $_SESSION['sesion'];
    $id_program_pr =$_POST['strategic_line_id'];
    $id_pr = $_POST['program_id'];
    $name_pr = strtoupper($_POST['project_name']);
    $objective_pr = $_POST['program_objetive'];
    $weighting_pr = $_POST['program_weighting'];
    $investment_pr = strtoupper($_POST['investment']);
    $date_start_pr=$_POST['deadline_start_date'];
    $date_end_pr=$_POST['deadline_end_date'];
    
    
    require_once '../database/consultas.php';
    //INSERT INTO `sie`.`strategics_lines` (`STRATEGIC_LINE_ID`, `STRATEGIC_LINE_NAME`, `STRATEGIC_LINE_STAR_DATE`, `STRATEGIC_LINE_STATUS`, `DESCRIPTION`) VALUES (3, 'PRUEBA4', '2014-03-02', 1, 'ESTA ES UNA LINEA ESTRATéGICA ');

    $save_pr = new Consulta();
    $save_pr->setConsulta("INSERT INTO `sie`.`projects` (`PROJECT_ID`, `PROGRAM_ID`, `DOCUMENT_NUMBER`, `PROJECT_NAME`, `PROJECT_OBJECTIVE`, `PROJECT_WEIGHTING`)
        VALUES ('$id_pr', '$id_program_pr', '$doc_user', '$name_pr', '$objective_pr', '$weighting_pr');
");
    
    
    header('Location: ../../view/admin/strategic_line_consult.php');
    
?>
