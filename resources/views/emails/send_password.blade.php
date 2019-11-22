<!DOCTYPE html>
<html>
<head>
    <title>Welcome Email</title>
</head>

<body>
<h2>Welcome to the site {{$user['firstname']}} {{$user['lastname']}}</h2>
<br/>
    Your registered email-id is <b>{{$user['email']}}</b> and password is <b>{{$user['normal_password']}}</b>
</body>

</html>