<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>veiw</title>
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
    <?php 
    $res=1;
        $con = mysqli_connect('localhost','root','','coaching');
    
        $displayquery = "SELECT * FROM fileupload WHERE course ='JAVA' " ;

        $querydisplay = mysqli_query($con,$displayquery);
       // $row = mysqli_num_rows($querydisplay);
       echo '<h1>Here are your reference book and slides :</h1><br><br>';
       echo '<table class="content"> 
    
<thead>  
<tr>
<th> sr.No </th> 
<th> Files</th>

 </tr>
 </thead>';
        while($result = mysqli_fetch_array($querydisplay)){
            ?> 
                 <tbody>

                     <tr>
                         <td><?php echo $res++ ;?> </td>
                         
                         <td> <a href="<?php echo $result['files'] ;?>"><?php echo $result['filename'] ;?></a><td>
                             <br>
                            </tr>
                        </tbody>

            <?php
        }

        echo '</table' ;
    ?>
</body>
</html>