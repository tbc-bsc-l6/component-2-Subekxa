<x-layout>
    <img style="width:20rem; height:20rem;" class="container card-img-top p-1 d-flex align-items-center" src="/images/{{ $product->image }}" alt="Card image cap">
    
    <div class="container d-flex-column">
        <h1 class="text-center my-3">{{ $product->name }}</h1>

        <div>
            <h5 class="text-right"><strong>Seller:</strong>
                <a class="text-decoration-none text-white btn rounded bg-secondary" href="/sellers/{{ $product->seller->name }}">{{ $product->seller->name }}</a>
            </h5>
            <br>  
            <h5 class="text-right"><strong>Category:</strong>
                <a class="text-decoration-none text-white btn rounded bg-secondary" href="/categories/{{ $product->category->slug }}">{{ $product->category->name }}</a>
            </h5>
            <br>   
            <h5 class="text-right"><strong>Price:</strong>
                ${{ $product->price }}
            </h5>
            <br>   
            <h5 class="text-right"> <strong>Description:</strong>
                {!! $product->description !!}
            </h5>
        </div>
        <a class="btn btn-dark border-4 text-gray" href="/">Go back</a>
    </div>
</x-layout>
