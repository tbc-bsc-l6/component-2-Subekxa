<div class="row container-fluid header d-flex justify-content-between align-items-center ">
    <h1 class="col-4">
        @auth
            <a class="text-decoration-none text-black l" href="/dashboard" style="letter-spacing: 4px">
                BAKERYCAFE
            </a>
        @else
            <a class="text-decoration-none text-black l" href="/" style="letter-spacing: 4px">
                BAKERYCAFE
            </a>
        @endguest
    </h1>

    <div class="col-3"></div>

    <div class="col-5 d-flex d-flex align-items-center justify-content-around">

        @auth
            <span class="uppercase">
                Welcome to Bakery Cafe, <strong> {{ auth()->user()->name  }}</strong>
            </span>

            <form action="/logout" method="POST">
                @csrf
                <button class="btn-secondary rounded-pill border-0 px-4 py-2" type="submit">
                    Logout
                </button>
            </form>

        @else
            <h2>
                <a class="text-decoration-none text-black small" href="/register" style="letter-spacing: -1px">
                    <strong>REGISTER</strong>
                </a>
            </h2>
            <h2>
                <a class="text-decoration-none text-black small" href="/login" style="letter-spacing: -1px">
                    <strong>LOGIN</strong>
                </a>
            </h2>
        @endguest

    </div>
</div>