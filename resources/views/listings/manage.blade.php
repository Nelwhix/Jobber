<x-layout>
    <section>
        <div class="container">
            <div class="table-responsive">
                <header>
                    <h1
                        class="h1 text-center mt-3"
                    >
                        Manage Gigs
                    </h1>
                </header>
        
                <table class="table table-hover mt-5">
                    <tbody>
                        @unless($listings->isEmpty())
                        @foreach ($listings as $listing)
                        <tr class="">
                            <td
                                class=""
                            >
                                <a href="show.html">
                                    {{$listing->title}}
                                </a>
                            </td>
                            <td class="">
                                <a href="/listings/{{$listing->id}}/edit" class="btn custombtn">
                                    <i class="bi bi-pencil-square icon"></i>  Edit</a>
                            <td
                                class=""
                            >
                                <form action="/listings/{{$listing->id}}">
                                    <button class="btn" style="border-color: #7bb062">
                                        <i class="bi bi-trash icon"></i> 
                                       Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        @else
                            <tr>
                                <td>
                                    <p class="text-center">No Listings Found</p>
                                </td>
                            </tr>
                        @endunless
                    </tbody>
                </table>
            </div>
        </div>
    </section>
   
</x-layout>