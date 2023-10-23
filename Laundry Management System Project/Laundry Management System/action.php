<?php


if(isset($_POST['submit'])){

    if(isset($_POST['transactionId']) && !empty($_POST['transactionId'])){
        $firstname = $_POST['transactionId'];
    }    
    if(isset($_POST['customer']) && !empty($_POST['customer'])){
        $salary = $_POST['customer'];
    }
    if(isset($_POST['employee']) && !empty($_POST['employee'])){
        $salary = $_POST['employee'];
    }
    if(isset($_POST['content']) && !empty($_POST['content'])){
        $salary = $_POST['content'];
    }
    if(isset($_POST['weight']) && !empty($_POST['weight'])){
        $salary = $_POST['weight'];
    
    }
    if(isset($_POST['total']) && !empty($_POST['total'])){
        $salary = $_POST['total'];
    }
    
    if(isset($_POST['date']) && !empty($_POST['date'])){
        $salary = $_POST['date'];
    }
    if(isset($_POST['order']) && !empty($_POST['order'])){
        $salary = $_POST['order'];
    }
    if(isset($_POST['finished']) && !empty($_POST['finished'])){
        $salary = $_POST['finished'];
    }
    if(isset($_POST['actions']) && !empty($_POST['actions'])){
        $salary = $_POST['actions'];
    }

    $transactionid= $_POST['transactionId'];
    $customer= $_POST['customer'];
    $employee= $_POST['employee'];
    $content= $_POST['content'];
    $weight= $_POST['weight'];
    $total= $_POST['total'];
    $date= $_POST['date'];
    $order= $_POST['order'];
    $finished= $_POST['finished'];
    $actions= $_POST['actions'];
   


$studentdata = file_get_contents ('trans.json');
$datalist = json_decode($studentdata, true); 


$profile=array(
    'id'=>count ($datalist)+1,
    'transactionId'=>$transactionid,
    'customer'=>$customer,
    'employee'=>$employee,
    'content'=>$content,
    'weight'=>$weight,
    'total'=>$total,
    'date'=>$date,
    'order'=>$order,
    'finished'=>$finished,
    'actions'=>$actions,
  
  
);

array_push($datalist, $profile);

$en_datalist = json_encode($datalist);

file_put_contents ('trans.json', $en_datalist);

echo "<script>
alert('Information successfully submitted');

window.location = 'transactions.php'
</script>";

}


?>