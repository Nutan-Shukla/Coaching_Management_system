

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request_list</title>
  <style>
     
      a{
          text-decoration:none;
      }
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
  <h1>All Request :- </h1> 
  <br>
<?php

$link = mysqli_connect('localhost', 'root', '', 'coaching');  


if(!$link)
{ 
die('Failed to connect to server: ');
 } 


$qry = 'SELECT * FROM trequest'; 


$result = mysqli_query($link, $qry);
echo '<h1>The Teacher requests are - </h1>';

echo '<table class ="content"> 
  <thead>
  <tr>
<th> Userid </th> 
<th> Proffessor name</th>
<th>DOB</th>
 <th> phone_no</th> 
 <th> Qualification</th> 
 <th> Accept</th>
 <th> Reject</th>
 </tr>
    <thead>';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 

    ?>
    <tbody>
    <tr> 
     
       <td><?php echo $row['Tid'] ;?> </td>
       <td><?php echo $row['Tname'] ;?> </td>
       <td><?php echo $row['DOB'] ;?> </td>
       <td><?php echo $row['phone_no'] ;?> </td>
       <td><?php echo $row['QFT'] ;?> </td>
       
        <td><a href="Tinsert.php?Tid= <?php echo $row['Tid'];?>">ADD</a> </td>
        <td><a href="Tdelete.php?Tid=<?php echo $row['Tid'];?>"onclick="return confirm('Are you sure , you want to delete request?')">Remove</a> </td>
    
    </tr>
    </tbody>
   <?php 

}

echo '</table>';
 

?> 
<?php

$link = mysqli_connect('localhost', 'root', '', 'coaching');  


if(!$link)
{ 
die('Failed to connect to server: ');
 } 


$qry = 'SELECT * FROM srequest'; 


$result = mysqli_query($link, $qry);
echo '<h1>The Students request are - </h1>';

echo '<table class="content"> 
 <thead> 
<tr>
<th> Userid </th> 
<th> Student name</th>
<th>DOB</th>
 <th> phone_no</th> 
 <th> Accept</th>
 <th> Reject</th>
 </tr>
 <thead>
 ';

/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 

    ?> 
    <tbody>
    <tr> 
     
       <td><?php echo $row['userid'] ;?> </td>
       <td><?php echo $row['sname'] ;?> </td>
       <td><?php echo $row['dob'] ;?> </td>
       <td><?php echo $row['phone_no'] ;?> </td>
        <td><a href="Sinsert.php?userid= <?php echo $row['userid'];?>">ADD</a> </td>
        <td><a href="delete.php?userid=<?php echo $row['userid'];?>"onclick="return confirm('Are you sure , you want delete the request?')">Remove</a> </td>
       
        

    </tr>
</tbody>
   <?php 

}

echo '</table>';
 

?>
</body>
</html>

