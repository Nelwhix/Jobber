<x-layout>
    <section>
        <div class="container mt-5">
            <header class="text-center">
                <h2 class="h2">
                    Login
                </h2>
                    <p class="mb-4 text-muted">Login to post jobs</p>
                        </header>

            <form method="POST" action="/users/authenticate">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label"
                    >Email</label
                    >
                    <input
                        type="email"
                        class="form-control"
                        name="email"
                        value="{{old('email')}}"
                    />
                    @error('email')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-3">
                    <label
                        for="password"
                        class="form-label"
                    >
                        Password
                    </label>
                    <input
                        type="password"
                        class="form-control"
                        name="password"
                        value="{{old('password')}}"
                    />

                    @error('password')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
                <div class="mb-3">
                    <button
                        type="submit"
                        class="btn custombtn"
                    >
                        Login
                    </button>
                </div>

                <div class="mt-8">
                    <p>
                        Don't have an account?
                        <a href="/signup" class=""
                        >Sign Up</a>
                    </p>
                </div>
            </form>
        </div>
    </section>
   
</x-layout>