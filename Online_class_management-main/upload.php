
  <?php
  $con = mysqli_connect('localhost','root','','coaching');
  if(!$con){  
    echo "failed to conn";
    exit();
  }

  if(isset($_POST['Upload'])){
      $course = $_POST['Course_id'];
      $files = $_FILES['file'];

      $filename = $files['name'];
      $fileerror =$files['error'];
      $filetmp = $files['tmp_name'];
      $filesize = $files['size'];

      //$fileext = explode('.',$filename) ;
      if($filesize < 10000000000){
        $fileext = explode('.',$filename) ;
      $filecheck = strtolower(end($fileext));

      $fileextstored = array('png','jpg','pptx','pdf','mp4','docx');

      if(in_array($filecheck,$fileextstored)){
          $destination = 'upload/'.$filename ;
          move_uploaded_file($filetmp,$destination);
         
          $q = "INSERT INTO fileupload(course,files,filename) VALUES ('$course','$destination','$filename')";

          $query = mysqli_query($con,$q);
      
        
          header("location:Teacher_Dashboard.php");
          

          $displayquery = "SELECT * FROM fileupload" ;

          $querydisplay = mysqli_query($con,$displayquery);
      }
         // $row = mysqli_num_rows($querydisplay);
         while($result = mysqli_fetch_array($querydisplay)){
              ?>
               <tr>
                  <td><?php echo $result['id'] ;?> </td>
                  <td><?php echo $result['course'] ;?> </td>
                  <td><embed src="<?php echo $result['files'] ;?>" width="100" height="50" </embed></td> 
                <a href="<?php echo $result['files'] ;?>"><?php echo $result['course'] ;?></a>
                    <br>
               </tr>

              <?php
          

      }
 


  }
  else{
    echo 'File is too large';
}

}
   
    
    
    

  ?>
</body>
</html>