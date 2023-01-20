@include('components.layout')

<div class="container">
    <div class="row">
        <h3>
            <a class="px-3 text-decoration-none btn btn-secondary rounded-pill mt-5 text-white border" href="/dashboard/add">
                Add Product
        </a>
        </h3>
    </div>

    <div class="row">
        <table class="table mt-3">
            <thead>
                <tr class='text-center'>
                    <th colspan='1' scope='col'>Image</th>
                    <th colspan='1' scope='col'>Name</th>
                    <th colspan='1' scope='col'>Price</th>
                    <th colspan='1' scope='col'>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class='text-center border border-groove p-3'><img src='/images/{{ $product->image }} ' style='width:5vw' ></td>
                        <td class='text-center border border-groove align-middle'>{{ $product->name }}</td>
                        <td class='text-center border border-groove align-middle'>{{ $product->price}}</td>
                        <td class='text-center border border-groove align-middle'>

                            <form action="/dashboard/edit/{{ $product->slug }}" method="GET">
                                @csrf
                                <button type="submit" class="btn">Edit</button>
                            </form>
                            <form action="/dashboard/delete" method="GET">
                                @csrf
                                <input name="id" type="hidden" value="{{ $product->id }}">
                                <button type="submit" class="btn" onclick="return confirm('Delete Product ?')">Delete</button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>

        </table>
    </div>
</div>