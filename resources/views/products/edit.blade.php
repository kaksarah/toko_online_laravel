<h1>Edit Product</h1>

<form action="/products/{{$products->id}}" method="post">
    @method('PUT')
    @csrf
    Nama : <input type="text" name="nama" value="{{$products->nama}}"> <br>
    Description : <input type="text" name="description" value="{{$products->description}}"> <br>
    Price : <input type="number" name="price" value="{{$products->price}}"> <br>
    Image URL : <input type="text" name="image_url" value="{{$products->image_url}}"> <br>

    <input type="submit" value="save">
</form>