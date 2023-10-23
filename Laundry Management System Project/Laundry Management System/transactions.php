<?php
$content = file_get_contents('trans.json');
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
    <link rel="stylesheet" href="del.css"/>
    <script type="text/javascript">

        function edit(id){
            window.open("transactions.php?id="+id, 'blank');
        }
        function edit(id){
            window.open("input_trans.php?id="+id, 'blank');
        }

        </script>
</head>
<form action="input_trans.html" method="post">
<body>
    <main>
        <ul>
     <a href="Dashboard.html" class="bck"><li> Back </li></a>
</ul>
<div class="container">
<div class="header">
        <h4> Transactions </h4>
    </div>
    
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Transaction ID</th>
                <th>Customer</th>
                <th>Employee</th>
                <th>Content</th>
                <th>Weight</th>
                <th>Total</th>
                <th>Date</th>
                <th>Order</th>
                <th>Finished</th>
                <th>Actions</th>
              </tr>
</thead>
                      <tbody> 
                      <?php
           $content = file_get_contents('trans.json');
           $jsondata = json_decode($content, true);
           
        
            $sn=0;
            foreach($jsondata as $key => $row){
          
               $sn++;
                 ?> 
                   <tr>
                <td><?php echo $sn; ?> </td>
                <td> <?php echo $row ['transactionId']; ?> </td>
                <td> <?php echo $row['customer']; ?> </td>
                <td> <?php echo $row ['employee']; ?> </td>
                <td> <?php echo $row ['content']; ?> </td>
                <td> <?php echo $row ['weight']; ?> </td>   
                <td> <?php echo $row ['total']; ?> </td>  
                <td> <?php echo $row ['date']; ?> </td>    
                <td> <?php echo $row ['order']; ?> </td>   
                <td> <?php echo $row ['finished']; ?> </td>   
                <td> <?php echo $row ['actions']; ?> </td>   
                           <td>
             <a href="input_trans.html"> <button type="button" class="btn btn-secondary"> Edit </button> </a>
             <!-- onclick="document.getElementById('id01').style.display='block'"-->  <button type="button" class="btn btn-danger"> Delete </button> 
             <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"> &times ; </span>
             <form class="modal-content" action="/action_page.php">
                <div class="container">
                    <h1> Delete Data </h1>
                    <p> Are you sure you want to delete this data? </p>
                    <div class="clearfix">
                        <button type="button" class="canclebtn">Cancel</button>
                        <button type="button" class="deletebtn">Delete</button> -->
            </div>
            </div>
            </form>
            </div>

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
