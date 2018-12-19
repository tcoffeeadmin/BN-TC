@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1>Call</h1>
<form method="post" action="{{ url('/call_action') }}">

	<input type="text" name="name">
	<input type="submit" name="save" value="submit">
	
</form>


</body>
</html>

@endsection