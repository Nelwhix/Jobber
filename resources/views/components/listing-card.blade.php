@props(['listing'])
<div class="col-sm-6 col-lg-4">
    <div class="card mb-3 p-3">
        <div class="card-body">
            <img class="img-fluid mb-3" src="{{$listing->logo ? asset('storage/app/public'. $listing->logo) : 
        asset('/images/no-image.png')}}" alt="">
            <div>
                <h3 class="card-title mb-2">
                    <a href="/listings/{{$listing->id}}" class="text-black">{{$listing->title}} </a>
                </h3>
                <h4 class="card-subtitle mb-1">{{$listing->company}}</h4>
                <x-listing-tags :tagsCsv="$listing->tags"/>
                <div class=""><i class="bi bi-geo-alt-fill icon"></i>  {{$listing->location}}
                </div>
            </div>
        </div>
    </div>
</div>