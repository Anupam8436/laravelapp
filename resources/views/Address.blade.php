<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Address</title>
</head>
<body>
    <form action="{{route('place')}}" method="post">
        {{ csrf_field() }}
    <h1>My Address</h1>

        <div class="container">
            <div class="form-group">
                <label>Add Your Locatiojn</label><br>
                <textarea type="text", name="location", class="form-control"></textarea><br>
                    </div>
                    <div class="form-group">
                        <label>City</label><br>
                <input type="text", name="city", class="form-control"><br>
                    </div>
                    <div class="form-group">
                <label>State</label><br>
                <input type="text", name="state", class="form-control"><br>
                    </div>
                    <div class="form-group">
                <label>Country</label><br>
                <select name="country", class="form-control">
                    <option value="">Please Select</option>
                    @foreach ($country as $data)
                        <option>{{$data->name}}</option>

                    @endforeach
                </select>
                    </div><br>
                <button class="btn btn-primary">Submit</button>
        </div>
    </form>

    <table class="center">

        <tr>
            <th>Location</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Action</th>
            <th>Update</th>

        </tr>

        @foreach ($locate as $item)
        <tr>
            <th>{{$item->location}}</th>
            <th>{{$item->city}}</th>
            <th>{{$item->state}}</th>
            <th>{{$item->country}}</th>
            <th><a href="{{route('DeleteData',$item->id)}}">Delete</a></th>
            <th><a href="{{route('EditData',$item->id)}}">Edit</a></th>
        </tr>
        @endforeach
    </table>
</body>
</html>
