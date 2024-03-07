<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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
    <form action="{{route('TableUpdate', $edit->id)}}" method="post">
        {{ csrf_field() }}
        <h1 text-align="center">Jwellery Items</h1><br>

        <div class="container">
            <div class="form-group">
        <label>Product Title</label><br>
        <input value="{{$edit->product_title}}" type="text", name="product_title", class="form-control"><br>
            </div>
            <div class="form-group">
        <label>Price</label><br>
        <input value="{{$edit->price}}" type="number", name="price", class="form-control"><br>
            </div>
            <div class="form-group">
        <label>Product Type</label><br>
        <select name="product_type", class="form-control">
           @if ($edit->product_type == 'diamond')
                <option value="">Select Type</option>
                <option selected value="diamond">Diamond</option>
                <option value="gold">Gold</option>
           @elseif ($edit->product_type == 'gold')
                <option value="">Select Type</option>
                <option  value="diamond">Diamond</option>
                <option selected value="gold">Gold</option>
            @else
               <option value="">Select Type</option>
                <option  value="diamond">Diamond</option>
                <option  value="gold">Gold</option>
           @endif

        </select>
            </div><br>
        <button class="btn btn-primary">Submit</button>
    </div>
    </form>

</body>
</html>
