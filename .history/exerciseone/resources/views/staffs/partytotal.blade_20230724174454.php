<!DOCTYPE html>
<html>
  <head>
      <title>Staffs Page  </title>
</head>   
<body>
    <h1>Welcome to Our Home Site </h1>
    <p>This is Staff Partytotal is {{$total}}<p>

    <li><a href="{{URL::to('staffs.home')}}">Home</a></li>
    <li><a href="{{route('staffs.party')}}">Party </a></li>
    <li><a href="{{route('staffs.party')}}">Party </a></li>

</body> 
</html>