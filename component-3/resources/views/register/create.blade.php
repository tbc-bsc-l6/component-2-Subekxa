<x-layout>
    <section class="container d-flex justify-content-center">
        <div class="w-75 bg-white p-4 rounded">
            <h2 class="text-center bold"><b>REGISTER</b></h2>

            <form method="POST" action="/register" class="mt-5">
                @csrf

                <div class="form-group p-2">
                    <label for="name">Name:</label>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name"
                    value="{{ old('name') }}" required>

                    @error('name')
                        <p class="text-danger mt-1 small">{{ $message }}</p>
                    @enderror

                </div>

                <div class="form-group p-2">
                    <label for="email">Email:</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email"
                    value="{{ old('email') }}" required>

                    @error('email')
                        <p class="text-danger mt-1 small">{{ $message }}</p>
                    @enderror

                </div>

                <div class="form-group p-2">
                    <label for="password">Password:</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Enter your password" required>

                    @error('password')
                        <p class="text-danger mt-1 small">{{ $message }}</p>
                    @enderror
                </div>
             
                <br>
                <button type="submit" class="btn btn-secondary">Submit</button>
            </form>
        </div>
    </section>
</x-layout>