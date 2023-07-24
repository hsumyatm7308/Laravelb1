<!DOCTYPE html>
<html>
  <head>
    <title>Employee Page </title>
    <p> This is Employee Home  </p>

</head>
<body>

  <h1>Welcom to Our blade site </h1>

  @foreach($employeesdata as $empdata)

  <li> {!!$empdata!!} </li>

  @endforeach 


</body>
</html>