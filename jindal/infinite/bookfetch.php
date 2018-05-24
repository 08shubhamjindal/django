<?php
if(isset($_POST["limit"], $_POST["start"]))
{
 // $image="";
 $connect = mysqli_connect("localhost", "root", "", "xyz");
 $query = "SELECT * FROM qwe ORDER BY post_id DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."";
 $result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
 {    
   echo '<b>Book Name-</b><p>'.$row["book_name"].'</p>
         <b>Book-Author</b><p>'.$row["book_author"].'</p>
         <b>Book-description</b><p>'.$row["book_des"].'</p>
         <b>Book-Price</b><p>'  .$row["book_price"].'</p>
         <hr />';

 }
}

?>