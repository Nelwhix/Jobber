<x-layout>
@include('partials._hero')
@include('partials._search')
<div class="">

@unless(count($listings) == 0)
<div class="container-lg my-5">
    <div class="row">
@foreach($listings as $listing)
<x-listing-card :listing="$listing"/>
@endforeach
</div>
</div>
@else 
<p>No listings found</p>
@endunless
</div>
<div class="mt-5 p-4">
    {{$listings->links()}}
</div>
</x-layout>
