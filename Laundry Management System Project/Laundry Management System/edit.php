<?php


if(isset($_POST['submit'])){

    if(isset($_POST['expenditureId']) && !empty($_POST['expenditureId'])){
        $firstname = $_POST['expenditureId'];
    }    
    if(isset($_POST['details']) && !empty($_POST['details'])){
        $salary = $_POST['details'];
    }
    if(isset($_POST['total']) && !empty($_POST['total'])){
        $salary = $_POST['total'];
    }
    if(isset($_POST['date']) && !empty($_POST['date'])){
        $salary = $_POST['date'];
    }
    if(isset($_POST['employee']) && !empty($_POST['employee'])){
        $salary = $_POST['employee'];
    
   
    }
    $expenditureid= $_POST['expenditureId'];
    $details= $_POST['details'];
    $total= $_POST['total'];
    $date= $_POST['date'];
    $employee= $_POST['employee'];
    


$studentdata = file_get_contents ('user.json');
$datalist = json_decode($studentdata, true); 


$profile=array(
    'id'=>count ($datalist)+1,
    'expenditureId'=>$expenditureid,
    'details'=>$details,
    'total'=>$total,
    'date'=>$date,
    'employee'=>$employee,
 
  
);

array_push($datalist, $profile);

$en_datalist = json_encode($datalist);

file_put_contents ('user.json', $en_datalist);

echo "<script>
alert('Information successfully submitted');

window.location = 'add_new_expenditure.php'
</script>";

}


?>