

<?php
$content = file_get_contents('employee.json');
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
            window.open("add_new_employee.php?id="+id, 'blank');
        }
        
        function edit(id){
            window.open("employees_data.html?id="+id, 'blank');
        }

        </script>
</head>
<form action="employees_data.html" method="post">
<body>
    <main>
        <ul>
     <a href="Dashboard.html"><li> Back </li></a>
</ul>
<div class="container">
<div class="header">
        <h4> Employees Data </h4>
        <a href="input_employees_data.html" class="btn-green"> Add New Employee</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th> Employees ID </th>
                <th> Employee </th>
                <th> Address </th>
                <th> Contact </th>
                <th> Salary </th>
                <th> Join Date </th>
                <th> End Date </th>
                <th> Action </th>
              </tr>
</thead>
                      <tbody>     
                      <tbody>
        
        <?php
       $content = file_get_contents('employee.json');
       $jsondata = json_decode($content, true);
       
    
        $sn=0;
        foreach($jsondata as $key => $row){
      
           $sn++;
             ?>

            <tr>
            <td><?php echo $sn; ?> </td>
            <td> <?php echo $row ['employeesId']; ?> </td>
            <td> <?php echo $row['employee']; ?> </td>
            <td> <?php echo $row ['address']; ?> </td>
            <td> <?php echo $row ['contact']; ?> </td>
            <td> <?php echo $row ['salary']; ?> </td>
            <td> <?php echo $row ['joinDate']; ?> </td>
            <td> <?php echo $row ['endDate']; ?> </td>
            <td> <?php echo $row ['action']; ?> </td>
                       <td>
     
             
             <a href="input_employees_data.html">
              <button type="button" class="btn btn-secondary"> Edit </button> </a>
   <button type="button" class="btn btn-danger" onclick=""> Delete </button> 
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



