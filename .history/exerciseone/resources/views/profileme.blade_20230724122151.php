<!DOCTYPE html>
<html>
    <head>
        <title>Profile Page </title>

</head>
<body>

<?php $staff = "aung aung";
      $city = "bago";
?>

<li><a href="javascript:void(0);">Home</a><li>
<li><a href="{{URL::to('/sayar')}}">About</a><li>
<li><a href="{{route('myprofiles')}}">Profile</a><li>
<li><a href="{{route('companystaff',['sf'=>$staff,'ct'=>$city])}}">Company </a><li>


</body>


</html>