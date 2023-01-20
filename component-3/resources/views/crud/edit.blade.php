@include('components.layout')

<form action="/dashboard/edit" method="POST">
    @csrf
    
    <img style="width:20rem; height:20rem;" class="container card-img-top p-1 mt-4 d-flex align-items-center" src="/images/{{ $product->image }}" alt="Card image cap">

    <div class="form-group p-3">
        <input name="id" type="hidden" class="form-control" value="{{ $product->id }}" >
    </div>

    <div class="form-group p-3">
        <input name="image" type="text" class="form-control" id="image" value="{{ $product->image }}" >
    </div>

    <div class="form-group p-3">
        <label for="name">Name</label>
        <input name="name" type="name" class="form-control" id="name" value="{{ $product->name }}" >
    </div>

    <div class="form-group p-3">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-select">
            <option value="1" {{ $product->category_id == '1'?'selected':null}}>Bread</option>
            <option value="2" {{ $product->category_id == '2'?'selected':null}}>Cake</option>
            <option value="3" {{ $product->category_id == '3'?'selected':null}}>Coffee</option>
            <option value="4" {{ $product->category_id == '4'?'selected':null}}>Snack</option>
        </select>
    </div>

    <div class="form-group p-3">
        <label for="slug">Slug</label>
        <input name="slug" type="slug" class="form-control" id="slug" value="{{ $product->slug }}" >
    </div>

    <div class="form-group p-3">
        <label for="description">Description</label>

        <textarea name="description" class="form-control" id="description"  rows="4" >{{$product->description}}</textarea>
    </div>

    <div class="form-group p-3">
        <label for="price">Price</label>
        <input name="price" type="price" class="form-control" id="price" value="{{ $product->price }}" >
    </div>

    <button class="mb-5 btn-secondary px-4 m-3 rounded-pill border-0" type="submit">Update product</button>
</form>