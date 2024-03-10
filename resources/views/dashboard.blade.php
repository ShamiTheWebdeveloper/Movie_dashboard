<x-app-layout>
    <div style="text-align: right" class="text-muted">
        Upload new movie here:
        <a href="{{ route('uploadmovie') }}">
            <button type="button" class="btn btn-outline-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"></path>
                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"></path>
                </svg>
            </button>
        </a>
    </div>
    <div class="container mt-5">
        <div class="row">
            @foreach($movies as $movie)
            <div class="col-sm-4 p-2" >
                <div class="mdc-layout-grid__cell--span-4 mdc-layout-grid__cell--span-6-desktop stretch-card">
                    <div class="mdc-card">
                       <img src="{{ asset('storage/uploads/'.$movie->image) }}" class="rounded" style="width: 300px" alt="pic">
                       <div class="h4">{{ $movie->name }}</div>
                       <p>Type:{{ $movie->type }}</p>
                            <a href="{{ route("detail",$movie->id) }}" ><button class="container btn btn-warning">Details</button></a>
                    </div>
                </div>
            </div>
            @endforeach
                <span>
        {{ $movies->links() }}
    </span>
        </div>
    </div>

</x-app-layout>
