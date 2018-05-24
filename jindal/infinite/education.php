<html lang="en">
<head>
  <title>XYZ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  .btn-info{
    background-color: black;
  }
</style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">XYZ.COM</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="#">Page 1</a></li>
      <li><a href="#">Page 2</a></li>
    </ul>
      <form class="navbar-form navbar-left" action="/action_page.php">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button  type="submit" class="btn btn-default">Submit</button>
    </form>
     <ul class="nav navbar-nav navbar-right">

      <li><button type="button" class="btn btn-info glyphicon glyphicon-upload " data-toggle="modal" data-target="#myModal">Upload-Education-details</button>
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Upload Education details</h4>
       </div>
      <div class="mdoal-body">
<form action="insert.php" method="post">
<div class="form-group">
    <label for="exampleFormControlInput2">College Name</label>
    <input type="text" class="form-control" name="college_name"  placeholder="College Name" required=""> <br/>
     <label for="exampleFormControlInput2">College Location</label>
    <input type="text" class="form-control" name="college_location" placeholder="Location-Jaipur (Raj.)" required="">   <br/>
    <label for="exampleFormControlInput2">Courses Offered</label>
    <input type="text" class="form-control" name="courses_offered" placeholder="Bsc,B.tech,Phd" required="">  <br/>
    <label for="exampleFormControlInput2">Course Fees</label>
    <input type="text" class="form-control" name="college_fees" placeholder="Rs.700000 per annum" required="">  <br/>
    <label for="exampleFormControlTextarea2">College Description</label>
    <textarea class="form-control" name="college_des" rows="3" required=""></textarea>  <br/>
  </div>
   <input type="submit"  name= "educationadd" value="Submit">  <br/>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
</li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
<div class="container">
   <br />
   <div id="load_data"></div>
   <div id="load_data_message"></div>
   <br />
   <br />
   <br />
   <br />
   <br />
   <br />
  </div>
 </body>
</html>
<script>
$(document).ready(function(){
 var limit = 7;
 var start = 0;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"educationfetch.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No Data Found</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning'>Please Wait....</button>");
     action = "inactive";
    }
   }
  });
 }
if(action == 'inactive')
 {
  action = 'active';
  load_country_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }
 });
 
});
</script>
<script type="text/javascript">

</script>