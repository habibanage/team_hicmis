<?php
include "header.php"
?>
    <h1> register </h1>
    <form action="register.php" method="post">
    <div class="form-floating mb-3">
        <input name="e" class="form-control" type="text" placeholder="entername">
        </div>
        <div class="form-floating mb-3">
        <input name="c" class="form-control" tyoe="text" placeholder="code">
        </div>
        <div class="form-floating mb-3">
        <input name="p" class="form-control" type="password" placeholder="password">
        </div>  
        <button  name="addNewstu" class="btn btn-primary" type="submit"> send</button>

        <?php
   $servername = 'localhost';
   $dBteachername = 'root';
   $dbpassword = '123456789';
   $dBrName = 'school' ;
   $conn= mysqli_connect("localhost", "root", "123456789", "school");
   ?>
  
</section>


<?php
if(isset($_post["newTeacher"]))
{
$teachercode=$_post["teachercode"];
$teachername=$_post["teachername"];
$teacherpass=$_post["teacherpass"];
$sql2="INSERT INTO teacher (teacherCode,teacherName,teacherPass)VALUES ('$teachercode','$teachername','$teacherpass')";
mysqli_query($conn,$sql2);
mysqli_close($conn);
}
include "footer.php";
?>
