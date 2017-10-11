@extends('frontEnd.master')

@section('title')
	IPCP-2017
@endsection

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Contest Register</title>
  
  
  
      <link rel="stylesheet" href="{{asset('ContestRegister/')}}/css/style.css">

  
</head>

<body>
    


  
<form  action="{{url('/registered')}}" method="post">
{{csrf_field()}}
  <h2>Register</h2>
    <p>
      <label for="team" class="floatLabel">Team Name</label>
      <input  name="team_name" type="text">
    </p>

     <p>
      <label for="con1" class="floatLabel">Contestant-1</label>
      <input  name="contestant1" type="text">
    </p>

     <p>
      <label for="email1" class="floatLabel">Email</label>
      <input name="email1" type="text">
    </p>

     <p>
      <label for="con2" class="floatLabel">Contestant-2</label>
      <input  name="contestant2" type="text">
    </p>

     <p>
      <label for="email2" class="floatLabel">Email</label>
      <input  name="email2" type="text">
    </p>

     <p>
      <label for="con3" class="floatLabel">Contestant-3</label>
      <input  name="contestant3" type="text">
    </p>

     <p>
      <label for="email3" class="floatLabel">Email</label>
      <input  name="email3" type="text">
    </p>
    

     <p>
      <label for="coach" class="floatLabel">Coach</label>
      <input  name="coach" type="text">
    </p>


    <p>
      <input type="submit" name="submit" value="Register" id="submit">
    </p>
  </form>
  

    <script  src="{{asset('ContestRegister/')}}/js/index.js"></script>

</body>
</html>
