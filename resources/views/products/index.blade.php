<h1>List Products</h1>
<table>
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->nama}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="/products/{{$product->id}}/edit">Edit</a> 
                <form action="/products/{{$product->id}}" method="POST">
                @method('DELETE')
                @csrf
                <input type="submit" value="Delete">
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    <a href="/products/create">create</a>
</table>