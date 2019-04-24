<?
  echo "zdes pro sport pitanie !asd";

  error_reporting(E_ALL);
  include('custom_connectdb.php');
  include('Vtiger/crm_data_arrange.php');  
  date_default_timezone_set("UTC");
  global $perDate;

  $repUsers = $_REQUEST['users'];
  
  $dateFrom = $_REQUEST['dateFrom'];
  $dateTo = $_REQUEST['dateTo'];
  
  if (($dateFrom) && ($dateTo)){
    $perDate = " vtiger_crmentity.createdtime BETWEEN '$dateFrom' AND '$dateTo' ";
	$headr_date = 'From ' . $dateFrom . ' Till '.$dateTo;
  } else  if (($dateFrom) && (!$dateTo)){
    $perDate = " vtiger_crmentity.createdtime = '$dateFrom'";
  } 
  
?>