<!DOCTYPE html>
<html>
  <head>
      <title>Staffs Page  </title>
</head>   
<body>
    <h1>Welcome to Our Toal Comfirm  Site </h1>
    <p>Total price is {{$total}} and total comfirm is {{$status}} </p>


    <li><a href="{{URL::to('home')}}">Home</a></li>
    <li><a href="{{route('party')}}">Party </a></li>
    <li><a href="{{route('total')}}">Party Total</a></li>
    <li><a href="{{route('comfirm')}}">Party Total</a></li>

</body> 
</html>