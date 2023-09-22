

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complain_list</title>
  <style>
     .content{
          border-collapse :collapse ;
          margin :30px:0;
          font-size:1em;
          min-width: 400px;
          border-radius:5px 5px 0 0;
          overflow :hidden ;
           box-shadow:0 0 20px rgba(0 ,0 , 0,0.15);
      }
      .content thead tr{
         background-color :#009879;
         color:#ffffff;
         text-align :left ;
         font-weight:bold;
      }
      .content th,
      .content td{
          padding :12px 15px;
      }
      .content tbody tr{
          border-bottom:1px solid #dddddd;
      }
      .content tbody tr :nth-of-type(even){
          background-color: #f3f3f3;
      }
      .content tbody tr:last-of-type{
          bordr-bottom :2px solid #009879;
      }
  </style>

</head>
<body> 

<?php

$link = mysqli_connect('localhost', 'root', '', 'coaching');  


if(!$link)
{ 
die('Failed to connect to server: ');
 } 


$qry = 'SELECT * FROM complain'; 


$result = mysqli_query($link, $qry);
echo '<h1>Complains are - </h1>';

echo '<table class="content"> 
<thead>
 <tr>

<th> Userid </th> 

 <th> complain</th>
 <tr>
 </thead>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 

    ?> 
    <tbody>
    <tr> 
     
       <td><?php echo $row['complain_id'] ;?> </td>
    
       <td><?php echo $row['complain_detail'] ;?> </td>
    
        

    </tr>
</tbody>

   <?php 

}

echo '</table>';
 

?>
</body>
</html>

