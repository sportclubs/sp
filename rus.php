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
  
    $res = mysqli_query($mysqli,"INSERT INTO `sc_trainer` (`city_id`, `first_name`,`about_trainer`,`site_form`,`mobile_telephone`,`email`,`actual_date`,`actual_time`) 
											     VALUES ('4', '$name','$about_trener', '$rnd_uniq', '$tel', '$email', '$dt','$tm');");
	   

  $request = "SELECT max(`trainer_id`) as `max` FROM `sc_trainer` ";
  $result = mysqli_query($mysqli,$request) or die(mysqli_error());
  $row = mysqli_fetch_array($result);
  $max = $row['max'];
  for ($i=1;$i<=10;$i++){
	  echo 'fdgdfg';
  }
	   
  $res = mysqli_query($mysqli,"INSERT INTO `sc_contact` (`site_form`, `fam`,`email`, `sectionid`) 
  VALUES ('$rnd_uniq', '$fio','$email', '$maxd')");
  
?>