@include('components.layout')

<form action="/dashboard/store" method="GET">
    @csrf

    <div class="form-group p-3">
        <input name="id" type="hidden" class="form-control" value="{{ $user = Auth::user()->id;}}">
    </div>

    <div class="form-group p-3">
        <label for="name">Name</label>
        <input name="name" type="name" class="form-control" id="name" placeholder="Product name...">
    </div>

    <div class="form-group p-3">
        <label for="category_id">Category</label>
        <select name="category_id" class="form-select">
            <option value="1">Bread</option>
            <option value="2">Cake</option>
            <option value="3">Coffee</option>
            <option value="4">Snacks</option>
        </select>
    </div>

    <div class="form-group p-3">
        <label for="image">Image name</label>
        <input name="image" type="name" class="form-control" id="image" placeholder="Image name...">
    </div>

    <div class="form-group p-3">
        <label for="slug">Slug</label>
        <input name="slug" type="slug" class="form-control" id="slug" placeholder="Slug name...">
    </div>

    <div class="form-group p-3">
        <label for="description">Description</label>

        <textarea name="description" class="form-control" id="description"  rows="4"  placeholder="Description..."></textarea>
    </div>

    <div class="form-group p-3">
        <label for="price">Price</label>
        <input name="price" type="number" class="form-control" id="price" placeholder="Price...">
    </div>

    <button class="mb-5 btn-secondary px-5 m-3 rounded-pill border-0" type="submit">Add</button>
</form>