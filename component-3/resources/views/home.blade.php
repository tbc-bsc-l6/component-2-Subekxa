<x-layout>
    @include('_header')

    @foreach ($products as $product)
        <div class="d-flex-column card border-0 mt-5 mb-3 p-3 text-black"  style="background-color:lightgrey;  width: 14rem;">

            <a class="text-decoration-none text-white" href="/products/{{ $product->slug }}">
                <img style="width: 12rem; height: 12rem;" class="card-img-top shadow p-1"
                    src="/images/{{ $product->image }}" alt="Card image cap">
            </a>

            <div class="card-body text-center">
                <h5 class="card-title"><strong>{{ $product->name }}</strong></h5>
                <h5 class="card-title">${{ $product->price }}</h5>
            </div>

            <a class="text-center text-decoration-none btn text-black" style="background-color:	blanchedalmond;"  href="/categories/{{ $product->category->slug }}">
                {{ $product->category->name }}
            </a>
        </div>
    @endforeach
    
    <div class="container d-flex justify-content-center">
        {{-- {{ $products->links() }} --}}
    </div>
</x-layout>