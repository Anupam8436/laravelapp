<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('UpdateUser',$edit->id)}}" method="post">
        {{ csrf_field() }}
    <h1>Registration</h1>
    <div class="container">
        <div class="form-group">
            <label>Name</label><br>
            <input value="{{$edit->name}}" type="text", name="name">
        </div>
    <div>
        <label>Email</label><br>
        <input  value="{{$edit->email}}" type="email", name="email">
    </div>
    <label>Password</label><br>
    <input type="password", name="password"><br>
    {{-- <label>Conform Password</label><br>
    <input type="password", name="password_conformation"><br> --}}
    <br>

    <button >Submit</button>
    </div>

    </form>






</body>
</html>
