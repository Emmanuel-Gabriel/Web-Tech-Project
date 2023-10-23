<?php


if(isset($_POST['submit'])){

    if(isset($_POST['customersId']) && !empty($_POST['customersId'])){
        $firstname = $_POST['customersId'];
    }    
    if(isset($_POST['customersName']) && !empty($_POST['customersName'])){
        $salary = $_POST['customersName'];
    }
    if(isset($_POST['address']) && !empty($_POST['address'])){
        $salary = $_POST['address'];
    }
    if(isset($_POST['contact']) && !empty($_POST['contact'])){
        $salary = $_POST['contact'];
    }
  
    $customersid= $_POST['customersId'];
    $customersname= $_POST['customersName'];
    $address= $_POST['address'];
    $contact= $_POST['contact'];
 
    


$studentdata = file_get_contents ('custom.json');
$datalist = json_decode($studentdata, true); 


$profile=array(
    'id'=>count ($datalist)+1,
    'customersId'=>$customersid,
    'customersName'=>$customersname,
    'address'=>$address,
    'contact'=>$contact,
 
  
);

array_push($datalist, $profile);

$en_datalist = json_encode($datalist);

file_put_contents ('custom.json', $en_datalist);

echo "<script>
alert('Information successfully submitted');

window.location = 'customers.php'
</script>";

}


?>