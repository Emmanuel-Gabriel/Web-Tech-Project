<?php


if(isset($_POST['submit'])){

    if(isset($_POST['date']) && !empty($_POST['date'])){
        $firstname = $_POST['date'];
    }    
    if(isset($_POST['customersName']) && !empty($_POST['customersName'])){
        $salary = $_POST['customersName'];
    }
    if(isset($_POST['totalAmount']) && !empty($_POST['totalAmount'])){
        $salary = $_POST['totalAmount'];
    }
   
    $date= $_POST['date'];
    $customersname= $_POST['customersName'];
    $totalamount= $_POST['totalAmount'];
 
    


$studentdata = file_get_contents ('store.json');
$datalist = json_decode($studentdata, true); 


$profile=array(
    'id'=>count ($datalist)+1,
    'date'=>$date,
    'customersName'=>$customersname,
    'totalAmount'=>$totalamount,
  
);

array_push($datalist, $profile);

$en_datalist = json_encode($datalist);

file_put_contents ('store.json', $en_datalist);

echo "<script>
alert('Information successfully submitted');

window.location = 'reports.php'
</script>";

}


?>