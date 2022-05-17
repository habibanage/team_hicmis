<?php
include "header.php";
?>
<?php
   $servername = 'localhost';
   $dBteachername = 'root';
   $dbpassword = '123456789';
   $dBrName = 'school' ;
   $conn= mysqli_connect("localhost", "root", "123456789", "school");
   ?>
   <div class="container">
       <section class="login">
       <h1> تسجيل مدرس جديد</h1>
       <form action="register.php" method="post"> 
         <div class="form-floating mb-3">
             <input required type="text" name="teachercode" class="form-control" id="floatingteachercode" placeholder="teachercode">
        </div>
         <div class="form-floating mb-3">
             <input   type="text" name="teachername" class="form-control" id="floatingteachername" placeholder="teachername">
</div>
<div class="form-floating mb-3">
             <input  type="password" name="teacherpassword" class="form-control" id="floatingPassword" placeholder="pass">
</div>

             <button  type="submit"  class="btn btn-primary"  name="newTeacher"> تسجيل </button>
             <button  type="submit"  class="btn btn-primary"  name="deletTeacher">حذف  </button>
             <button  type="submit"  class="btn btn-primary"  name="updateTeacher">تعديل </button>

            </form>
</section>
</div>

<?php
if(isset($_post["newTeacher"]))
{

    $servername = 'localhost';
   $dBteachername = 'root';
   $dbpassword = '123456789';
   $dBrName = 'school' ;
   $conn= mysqli_connect("localhost", "root", "123456789", "school");

$teachercode=$_post["teachercode"];
$teachername=$_post["teachername"];
$teacherpass=$_post["teacherpass"];

$sql2="INSERT INTO teacher (teacherCode,teacherName,teacherPass)VALUES ('$teachercode','$teachername','$teacherpass')";
$check = mysqli_query($conn,$sql2);
$row = mysqli_close($conn);
}


if(isset($_post["deletTeacher"]))
{

}
if(isset($_post["updateTeacher"]))
{

}

if(isset($_post["loginTeacher"]))
{
    $teachercode=$_POST["teachercode"];
    $teacherpass=$_POST["teacherpass"];


    $sql = "SELECT * FROM teacher WHERE teachercode = '$teachercode' AND teacherpass = 'teacherpass'";
    $row = mysqli_query($conn, $sql);
    $school = mysql_fetch_assoc($row);

if($school){
     $_SESSION["teachercode"] = $school["teachercode"];
     $_SESSION["teachername"] = $school["teachername"];
     $_SESSION["teacherlevel"] = $school["teacherlevel"];
 header("location: index.php");

   } else {
    echo "خطأ في تسجيل الدخول";

   }  

}
include "footer.php";
?>
