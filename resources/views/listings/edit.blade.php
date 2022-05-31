<x-layout>
    <section>
        <div class="container mt-5">
            <header class="text-center">
                <h2 class="h2">
                    Edit Gig
                </h2>
                <p class="mb-4 text-muted">Edit: {{$listing->title}}</p>
            </header>
        
            <form method="POST" action="/listings/{{$listing->id}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label
                        for="company"
                        class="form-label"
                    >Company Name</label>
                    <input
                        type="text"
                        class="form-control"
                        name="company"
                        value="{{$listing->company}}"/>
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
                        value="{{$listing->title}}"
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
                            value="{{$listing->location}}"
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
                            value="{{$listing->email}}"/>
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
                            value="{{$listing->email}}"
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
                            value="{{$listing->tags}}"
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
                         <div>
                            <img 
                            class="img-fluid mb-3 text-center ms-5" 
                            src="{{$listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png')}}"
                            alt="">
                        </div>
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
                                        value="{{$listing->description}}"
                                    ></textarea>
                                    @error('description')
                                    <p class="text-danger">{{$message}}</p>
                                @enderror
                                </div>
        
                                <div class="mb-3">
                                    <button
                                        class="custombtn"
                                    >
                                        Edit Gig
                                    </button>
        
                                    <a href="/" class="ms-3 text-black"> Back </a>
                                </div>
                            </form>
                        </div>
    </section>

</x-layout>