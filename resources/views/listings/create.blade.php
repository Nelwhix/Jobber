<x-layout>
    <section>
        <div class="container mt-5">
            <header class="text-center">
                <h2 class="h2">
                    Create a Gig
                </h2>
                <p class="mb-4 text-muted">Post a gig to find a developer</p>
            </header>
        
            <form method="POST" action="/listings" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label
                        for="company"
                        class="form-label"
                    >Company Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="company"
                        value="{{old('company')}}"/>
                    @error('company')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                </div>
        
                <div class="mb-3">
                    <label for="title" class="form-label"
                    >Job Title</label>
                    <input
                        type="text"
                        class="form-control"
                        name="title"
                        placeholder="Example: Senior Laravel Developer"
                        value="{{old('title')}}"
                    />
                    @error('title')
                    <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
        
                    <div class="mb-3">
                        <label
                            for="location"
                            class="form-label"
                        >Job Location</label>
                        <input
                            type="text"
                            class="form-control"
                            name="location"
                            placeholder="Example: Remote, Boston MA, etc"
                            value="{{old('location')}}"
                        />
                        @error('location')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="email" class="form-label"
                        >Contact Email</label>
                        <input
                            type="text"
                            class="form-control"
                            name="email"
                            value="{{old('email')}}"/>
                            @error('email')
                            <p class="text-danger">{{$message}}</p>
                             @enderror
                    </div>
        
                    <div class="mb-3">
                        <label
                            for="website"
                            class="form-label"
                        >
                        Website/Application URL
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            name="website"
                            value="{{old('website')}}"
                        />
                        @error('website')
                        <p class="text-danger">{{$message}}</p>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="tags" class="form-label">
                        Tags (Comma Separated)
                        </label>
                        <input
                            type="text"
                            class="form-control"
                            name="tags"
                            placeholder="Example: Laravel, Backend, Postgres, etc"
                            value="{{old('tags')}}"
                        />
                        @error('tags')
                        <p class="text-danger">{{$message}}</p>
                    @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="logo" class="form-label">
                         Company Logo
                        </label>
                        <input
                            type="file"
                            class="form-control"
                            name="logo"
                         />
                         @error('logo')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                        </div>
        
                        <div class="mb-3">
                            <label
                                for="description"
                                class="form-label"
                            >
                         Job Description
                                    </label>
                                    <textarea
                                        class="form-control"
                                        name="description"
                                        rows="10"
                                        placeholder="Include tasks, requirements, salary, etc"
                                        value="{{old('description')}}"
                                    ></textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
        
                                <div class="mb-3">
                                    <button
                                        class="custombtn"
                                    >
                                        Create Gig
                                    </button>
        
                                    <a href="/" class="ms-3 text-black"> Back </a>
                                </div>
                            </form>
                        </div>
    </section>

</x-layout>