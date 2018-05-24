<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Insert</title>
</head>
<body>

</body>
</html>
<?php

// for book
         if(isset($_POST['bookadd'])) 
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
        
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $book_name = addslashes ($_POST['book_name']);
               $book_author = addslashes ($_POST['book_author']);
               $book_des = addslashes ($_POST['book_des']);
               $book_price = addslashes ($_POST['book_price']);
            }
            else 
            {
               $book_name= $_POST['book_name'];
               $book_author = $_POST['book_author'];
               $book_des = $_POST['book_des'];
               $book_price = $_POST['book_price'];

            }
            
            $sql = "INSERT INTO qwe ". "(book_name , book_author, book_des , book_price ) ". "VALUES('$book_name', '$book_author', '$book_des' , '$book_price')";
               
            mysql_select_db('xyz');
            $retval = mysql_query( $sql, $conn );
            
            if(!$retval ) 
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }

         //for college
        elseif (isset($_POST['educationadd'])) 
        {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
        
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $college_name = addslashes ($_POST['college_name']);
               $college_location= addslashes ($_POST['college_location']);
               $courses_offered = addslashes ($_POST['courses_offered']);
               $college_fees = addslashes ($_POST['college_fees']);
               $college_des = addslashes ($_POST['college_des']);
               
            }
            else 
            {
               $college_name= $_POST['college_name'];
               $college_location = $_POST['college_location'];
               $courses_offered = $_POST['courses_offered'];
               $college_fees = $_POST['college_fees'];
               $college_des = $_POST['college_des'];

            }
            
            $sql = "INSERT INTO education "."(college_name , college_location ,  courses_offered , college_fees , college_des) ". "VALUES('$college_name', '$college_location', '$courses_offered' , '$college_fees' , '$college_des')";
               
            mysql_select_db('xyz');
            $retval = mysql_query( $sql, $conn );
            
            if(!$retval ) 
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         } 

         //for company
         elseif (isset($_POST['companyadd'])) 
         {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
        
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc()) {
               $company_name = addslashes ($_POST['company_name']);
               $company_year = addslashes ($_POST['company_year']);
               $company_products = addslashes ($_POST['company_products']);
               $company_description = addslashes ($_POST['company_description']);
               $company_address = addslashes ($_POST['company_address']);
               $company_website = addslashes ($_POST['company_website']);
               $company_email = addslashes ($_POST['company_email']);
            }
            else 
            {
               $company_name = $_POST['company_name'];
               $company_year = $_POST['company_year'];
               $company_products = $_POST['company_products'];
               $company_description = $_POST['company_description'];
               $company_address = $_POST['company_address'];
               $company_website = $_POST['company_website'];
               $company_email = $_POST['company_email'];
      
            }
            
            $sql = "INSERT INTO co "."(company_name , company_year, company_products , company_description , company_address , company_website , company_email )". "VALUES('$company_name', '$company_year', '$company_products' , '$company_description' , '$company_address' , '$company_website' , '$company_email')";
               
            mysql_select_db('xyz');
            $retval = mysql_query( $sql, $conn );
            
            if(!$retval ) 
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
         }

//for coaching
         elseif (isset($_POST['coachingadd']))
      {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
        
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
            
            if(! get_magic_quotes_gpc() ) {
               $institute_name = addslashes ($_POST['institute_name']);
               $institute_courses = addslashes ($_POST['institute_courses']);
               $institute_admission = addslashes ($_POST['institute_admission']);
               $institute_scholarship = addslashes ($_POST['institute_scholarship']);
               $institute_address = addslashes ($_POST['institute_address']);
               $institute_email = addslashes ($_POST['institute_email']);
               $institute_website = addslashes ($_POST['institute_website']);
            }
            else 
            {
                 $institute_name = $_POST['institute_name'];
                 $institute_courses = $_POST['institute_courses'];
                 $institute_admission = $_POST['institute_admission'];
                 $institute_scholarship = $_POST['institute_scholarship'];
                 $institute_address = $_POST['institute_address'];
                 $institute_email = $_POST['institute_email'];
                 $institute_website = $_POST['institute_website'];

   
            }
            
            $sql = "INSERT INTO coaching "."(institute_name , institute_courses, institute_admission , institute_scholarship , institute_address , institute_email , institute_website ) ". "VALUES('$institute_name', '$institute_courses', '$institute_admission' , '$institute_scholarship' , '$institute_address' , '$institute_email' , '$institute_website')";
               
            mysql_select_db('xyz');
            $retval = mysql_query( $sql, $conn );
            
            if(!$retval ) 
            {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
            
            mysql_close($conn);
            }         
         
         ?>
