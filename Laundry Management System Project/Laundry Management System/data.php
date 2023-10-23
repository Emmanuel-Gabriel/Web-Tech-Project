<?php


if(isset($_POST['submit'])){

    if(isset($_POST['employeesId']) && !empty($_POST['employeesId'])){
        $firstname = $_POST['employeesId'];
    }    
    if(isset($_POST['employee']) && !empty($_POST['employee'])){
        $salary = $_POST['employee'];
    }
    if(isset($_POST['address']) && !empty($_POST['address'])){
        $salary = $_POST['address'];
    }
    if(isset($_POST['contact']) && !empty($_POST['contact'])){
        $salary = $_POST['contact'];
    }
    if(isset($_POST['salary']) && !empty($_POST['salary'])){
        $salary = $_POST['salary'];   
    }
    if(isset($_POST['joinDate']) && !empty($_POST['joinDate'])){
        $salary = $_POST['joinDate'];   
    }
    if(isset($_POST['endDate']) && !empty($_POST['endDate'])){
        $salary = $_POST['endDate'];   
    }
    if(isset($_POST['action']) && !empty($_POST['action'])){
        $salary = $_POST['action'];   
    }

    $employeesId= $_POST['employeesId'];
    $employee= $_POST['employee'];
    $address= $_POST['address'];
    $contact= $_POST['contact'];
    $salary= $_POST['salary'];
    $joinDate= $_POST['joinDate'];
    $endDate= $_POST['endDate'];
    $action= $_POST['action'];
    


$studentdata = file_get_contents ('employee.json');
$datalist = json_decode($studentdata, true); 


$profile=array(
    'id'=>count ($datalist)+1,
    'employeesId'=>$employeesId,
    'employee'=>$employee,
    'address'=>$address,
    'contact'=>$contact,
    'salary'=>$salary,
    'joinDate'=>$joinDate,
    'endDate'=>$endDate,
    'action'=>$action,
 
  
);

array_push($datalist, $profile);

$en_datalist = json_encode($datalist);

file_put_contents ('employee.json', $en_datalist);

echo "<script>
alert('Information successfully submitted');

window.location = 'employees_data.php'
</script>";

}


?>