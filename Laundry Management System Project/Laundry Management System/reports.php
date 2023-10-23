

<?php
$content = file_get_contents('store.json');
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
            window.open("reports.php?id="+id, 'blank');
        }
        
        function edit(id){
            window.open("input_report.html?id="+id, 'blank');
        }

        </script>
</head>
<form action="input_report.html" method="post">
<body>
    <main>
        <ul>
     <a href="Dashboard.html" class="bck"><li> Back </li></a>
</ul>
<div class="container">
<div class="header">
        <h4> Report </h4>
        <a href="input_report.html" class="btn-green"> Add New Report</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
                        <th>Customer's Name</th>
                        <th>Total Amount</th>
                        <th>Action</th>
              </tr>
</thead>
                      <tbody> 
                           
        <?php
       $content = file_get_contents('store.json');
       $jsondata = json_decode($content, true);
       
    
        $sn=0;
        foreach($jsondata as $key => $row){
      
           $sn++;
             ?>

            <tr>
            <td><?php echo $sn; ?> </td>
            <td> <?php echo $row['date']; ?> </td>
            <td> <?php echo $row ['customersName']; ?> </td>
            <td> <?php echo $row['totalAmount']; ?> </td>
           
                       <td>       
                         
             <a href="input_report.html">
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
