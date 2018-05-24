<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 // $image="";
 $connect = mysqli_connect("localhost", "root", "", "xyz");
 $query = "SELECT * FROM coaching ORDER BY post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {    
   echo '<b>Institute/Coaching- Name</b><p>'.$row["institute_name"].'</p>
         <b>Course offered</b><p>'.$row["institute_courses"].'</p>
         <b>Admission Process/Exam </b><p>'.$row["institute_admission"].'</p>
         <b>Scholarship Details Descrption</b><p>'.$row["institute_scholarship"].'</p>
         <b>Address</b><p>'.$row["institute_address"].'</p>
         <b>Email</b><p>'.$row["institute_email"].'</p>
         <b>Website</b><p>'.$row["institute_website"].'</p>
         <hr />';

 }
}

?>