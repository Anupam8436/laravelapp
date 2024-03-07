<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{route('RegistrationView')}}" method="post">
        {{ csrf_field() }}
    <h1>Registration</h1>
    <div class="container">
        <div class="form-group">
            <label>Name</label><br>
            <input type="text", name="name">
        </div>
    <div>
        <label>Email</label><br>
        <input type="email", name="email">
    </div>
    <label>Password</label><br>
    <input type="password", name="password"><br>
    <label>Conform Password</label><br>
    <input type="password", name="password_conformation"><br>
    <button >Submit</button>
    </div>

    </form>
    <table style="border: 1px solid black">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Registration Date</th>
            <th>Action</th>
            <th>Edit</th>
           </tr>

        @foreach ($user as $data)

        <tr>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->created_at}}</td>
            <td><a href="{{route('DeleteView', $data->id)}}">delete</a></td>
            <td><a href="{{route('EditUser', $data->id)}}">Edit</a></td>
        </tr>

        @endforeach
    </table>

</body>
</html>
