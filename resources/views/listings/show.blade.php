<x-layout>
@include('partials._search')
<a href="/" class="lead ms-3" style="text-decoration: none;color:black"> <i class="bi bi-arrow-left-square" style="position: relative;top:-2px;"></i> Back
</a>
<div class="container my-5">
    <div class="card">
        <div class="card-body">
            <div>
                <img 
                class="img-fluid mb-3 text-center ms-5" 
                src="{{$listing->logo ? secure_asset('storage/' . $listing->logo) : secure_asset('/images/no-image.png')}}"
                alt="">
            </div>
           

            <h3 class="card-title text-center fw-bold">{{$listing->title}}</h3>
            <div class="card-subtitle text-center">{{$listing->company}}</div>
            <h6>Required skills</h6>
            <x-listing-tags :tagsCsv="$listing->tags"/>
            <div class="mb-3">
                <i class="bi bi-geo-alt-fill icon"></i> {{$listing->location}}
            </div>
            <div>
                <h3 class="">
                    Job Description
                </h3>
                <div class="">
                   {{$listing->description}}
                    <div class="d-grid gap-2 mt-5">
                        <a
                        href="mailto:{{$listing->email}}"
                        class="btn text-light"
                        style="background-color:#7bb062"
                        ><i class="bi bi-envelope" style="position: relative;top:-2px;"></i></i>
                        Contact Employer</a
                        >

                        <a
                        href="https://{{$listing->website}}"
                        target="_blank"
                        class="btn text-dark"
                        style="border-color:#7bb062"
                        ><i class="bi bi-globe" style="position: relative;top:-2px;"></i></i> Visit
                        Website</a
                    >
                    </div>
                    
                </div>
            </div>
        </div>
    </div
    </div>
</x-layout>