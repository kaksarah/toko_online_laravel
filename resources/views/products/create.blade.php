<h1>Create Product</h1>

<form action="/products" method="post">
    @csrf
    Nama : <input type="text" name="nama"> <br>
    Description : <input type="text" name="description"> <br>
    Price : <input type="number" name="price"> <br>
    Image URL : <input type="text" name="image_url"> <br>

    <input type="submit" value="save">
</form>