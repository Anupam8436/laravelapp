<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

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
    <form action="{{route('UpdateData', $edit->id)}}" method="post">
        {{ csrf_field() }}
    <h1>My Address</h1>

        <div class="container">
            <div class="form-group">
                <label>Add Location</label><br>
                <input type="text" name="location" value="{{$edit->location}}" class="form-control"><br>
                    </div>
                    <div class="form-group">
                        <label>City</label><br>
                <input value="{{$edit->city}}" type="text", name="city", class="form-control"><br>
                    </div>
                    <div class="form-group">
                <label>State</label><br>
                <input value="{{$edit->state}}" type="text", name="state", class="form-control"><br>
                    </div>
                    <div class="form-group">
                <label>Country</label><br>
                <select name="country", class="form-control">

                @foreach ($country as $data)
                @if ($edit->country == $data->name)
                <option selected>{{$data->name}}</option>
                @else
                <option>{{$data->name}}</option>

                @endif

            @endforeach
                    </div>
                </select><br>
                <button type="button" onclick="sweetalert()" class="btn btn-primary">Save Changes</button>

        </div>
    </form>
</body>
<script>
    function sweetalert()
    {
        Swal.fire({
  title: "Do you want to save the changes?",
  showDenyButton: true,
  showCancelButton: true,
  confirmButtonText: "Save",
  denyButtonText: `Don't save`
}).then((result) => {
  /* Read more about isConfirmed, isDenied below */
  if (result.isConfirmed) {
    Swal.fire("Saved!", "", "success");
  } else if (result.isDenied) {
    Swal.fire("Changes are not saved", "", "info");
  }
});
    }
</script>
</html>
