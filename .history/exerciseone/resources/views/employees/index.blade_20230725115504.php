<!DOCTYPE html>
<html>
  <head>
    <title>Employee Page </title>
    <p> This is Employee Home  </p>

</head>
<body>

  <h1>Welcom to Our blade site </h1>

  <!-- <?php 
       foreach($employeesdata as $value){
            echo $value;
       }

   ?> -->


  @php 

   foreach($employeesdata as $employdata){
     echo $employdata;
   }
  @endphp


<!-- 
  @foreach($employeesdata as $empdata)

  <li> {!!$empdata!!} </li>

  @endforeach  
-->

<br>

{{$siteName}}


<br>

@foreach($employeesdata as $empdata)

  <li> {!!$empdata!!} </li>

  @endforeach  



</body>
</html>




