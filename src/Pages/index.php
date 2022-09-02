<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vertical (basic) Form</h2>
  <form>
    <div class="form-group">
      <label for="email">Select DOB</label>
      <input type="date" class="form-control" id="date" max='<?php echo date("Y-m-d")-1; ?>'>
      <p id="ageis"></p>
    </div>
    <button type="button" id="calculateAge" class="btn btn-default">Submit</button>
  </form>
</div>
</body>
<script>
  $('#calculateAge').on('click', function(){
    $('#ageis').html('');
    var today = new Date();
    var dob = new Date($('#date').val());
    var age = today.getFullYear() - dob.getFullYear();
    var month_diff = Date.now() - dob.getTime();  
      
      //convert the calculated difference in date format  
      var age_dt = new Date(month_diff);   
        
      //extract year from date      
      var year = age_dt.getUTCFullYear();  
        
      //now calculate the age of the user  
      var age = Math.abs(year - 1970);  
    $('#ageis').html('Your age is: '+ age + "Year");
  });
</script> 
</html>
