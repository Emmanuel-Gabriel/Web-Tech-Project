



<?php
$content = file_get_contents('custom.json');
$jsondata = json_decode($content, true);
$sn = 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit </title>
    <link rel="stylesheet" href="record.css" />
    <script type="text/javascript">

        function edit(id){
            window.open("input_customers_info.php?id="+id, 'blank');
        }
        
        function edit(id){
            window.open("customers.php?id="+id, 'blank');
        }

        </script>
        <head>
        <form action="input_customers_info.html" method="post">
<body>
    <main>
        <ul>
     <a href="Dashboard.html"><li> Back </li></a>
</ul>
<div class="container">
<div class="header">
        <h4> Customer's </h4>
        <a href="input_customers_info.html" class="btn-green"> Add New Customer</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Customers ID</th>
                <th>Customer's Name</th>
                <th>Address</th>
                <th>Contact</th>
            
              </tr>
</thead>
                      <tbody>   
                             
        <?php
       $content = file_get_contents('custom.json');
       $jsondata = json_decode($content, true);
       
    
        $sn=0;
        foreach($jsondata as $key => $row){
      
           $sn++;
             ?>     
             
            <tr>
            <td><?php echo $sn; ?> </td>
            <td> <?php echo $row ['customersId']; ?> </td>
            <td> <?php echo $row['customersName']; ?> </td>
            <td> <?php echo $row ['address']; ?> </td>
            <td> <?php echo $row ['contact']; ?> </td>
                       <td>
                                
             <a href="input_customers_info.html">
              <button type="button" class="btn btn-secondary"> Edit </button> </a>
   <button type="button" class="btn btn-danger"> Delete </button> 
        </a>
                    
                           </td>
                   </tr>
<?php

    
           }

           ?>


    </tbody>
    </table>
</div>
</main>
</body>
</html>




