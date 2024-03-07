<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>
    <style>
        table, th, td {
  border:1px solid black;
}
        input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button[type=submit]:hover {
  background-color: #45a049;
}
        div2{
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
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



    <form action="{{route('FinalView')}}" method="post">
        {{ csrf_field() }}
        <h1 text-align="center">Jwellery Items</h1><br>

        <div class="container">
            <div class="form-group">
        <label>Product Title</label><br>
        <input type="text", name="product_title", class="form-control"><br>
            </div>
            <div class="form-group">
        <label>Price</label><br>
        <input type="number", name="price", class="form-control"><br>
            </div>
            <div class="form-group">
        <label>Product Type</label><br>
        <select name="product_type", class="form-control">
            <option value="">Select Type</option>
            <option value="diamond">Diamond</option>
            <option value="gold">Gold</option>
        </select>
            </div><br>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form>

    <table class="center">

        <tr>
            <th>Product Title</th>
            <th>Price</th>
            <th>Product Type</th>
            <th>Action</th>
            <th>Update</th>

        </tr>


        @foreach ($product as $item)
        <tr>
            <th>{{$item->product_title}}</th>
            <th>{{$item->price}}</th>
            <th>{{$item->product_type}}</th>
            <th><a href="{{route('DeleteData',$item->id)}}">Delete</a></th>
            <th><a href="{{route('EditView',$item->id)}}">Edit</a></th>
        </tr>
        @endforeach

    </table>


</body>
</html>

