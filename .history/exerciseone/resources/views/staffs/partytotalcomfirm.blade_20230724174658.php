<!DOCTYPE html>
<html>
  <head>
      <title>Staffs Page  </title>
</head>   
<body>
    <h1>Welcome to Our Toal Comfirm  Site </h1>
    <p>This is Staff Partytotal is {{$total}} and Total comfirm are {{$status}}<p>

    <li><a href="{{URL::to('staffs.home')}}">Home</a></li>
    <li><a href="{{route('staffs.party')}}">Party </a></li>
    <li><a href="{{route('staffs.toal')}}">Party Total</a></li>
    <li><a href="{{route('staffs.comfirm')}}">Party Total</a></li>

</body> 
</html>