<!DOCTYPE html>
<html>
  <head>
      <title>Data One Page </title>
      <p>This is Staff Home</p>
</head>   
<body>
    <h1>Welcome to Our site </h1>
     <p>This is Employee Data One</p>

     <h3>Hi there!! {{greet}} </h3>

   @php
     foreach($students as $value){
        echo $value;
     }

   @endphp 
</body> 
</html>