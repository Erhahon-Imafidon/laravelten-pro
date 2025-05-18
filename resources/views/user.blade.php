<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
   >
   <meta
      http-equiv="X-UA-Compatible"
      content="ie=edge"
   >
   <title>User</title>
</head>
<body>
<x-header name="Erhahon Imafidon" />
<div>
   <h1>User View</h1>
   <h2>User Name {{ $name }}</h2>
   <p>Name: {{ $users['fullname'] }}</p>
   <p>Email: {{ $users['email'] }}</p>
   <p>Phone: {{ $users['phone'] }}</p>
</div>
</body>
</html>
