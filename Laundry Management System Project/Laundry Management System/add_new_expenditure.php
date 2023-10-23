<?php
$content = file_get_contents('user.json');
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
            window.open("add_new_expenditure.php?id="+id, 'blank');
        }
        
        function edit(id){
            window.open("input_info.html?id="+id, 'blank');
        }

        </script>
</head>
<form action="input_info.html" method="post">
<body>
    <main>
        <ul>
     <a href="Dashboard.html"><li> Back </li></a>
</ul>
<div class="container">
<div class="header">
        <h4> Expenditure </h4>
        <a href="input_info.html" class="btn-green"> Add New Expenditure</a>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Expenditure ID</th>
                <th> Details </th>
                <th> Total </th>
                <th> Date </th>
                <th> employee </th>
                <th> Action </th>
              </tr>
</thead>
                  
                      <tbody>
        
            <?php
           $content = file_get_contents('user.json');
           $jsondata = json_decode($content, true);
           
        
            $sn=0;
            foreach($jsondata as $key => $row){
          
               $sn++;
                 ?>

                <tr>
                <td><?php echo $sn; ?> </td>
                <td> <?php echo $row ['expenditureId']; ?> </td>
                <td> <?php echo $row['details']; ?> </td>
                <td> <?php echo $row ['total']; ?> </td>
                <td> <?php echo $row ['date']; ?> </td>
                <td> <?php echo $row ['employee']; ?> </td>
                           <td>
         
                 
                 <a href="input_info.html">
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
            </form>
</html>
