<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 // $image="";
 $connect = mysqli_connect("localhost", "root", "", "xyz");
 $query = "SELECT * FROM co ORDER BY post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {    
   echo '<b>Comapny Name-</b><p>'.$row["company_name"].'</p>
         <b>Comapny Year</b><p>'.$row["company_year"].'</p>
         <b>Comapny Products</b><p>'.$row["company_products"].'</p>
         <b>Comapny Description</b><p>'.$row["company_description"].'</p>
         <b>Comapny Address</b><p>'.$row["company_address"].'</p>
         <b>Comapny Website</b><p>'.$row["company_website"].'</p>
         <b>Comapny Email</b><p>'.$row["company_email"].'</p>
         <hr />';

 }
}

?>