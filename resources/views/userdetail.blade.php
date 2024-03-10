<x-app-layout>
    @if($movies->isNotEmpty())
        @if($user_name->id==Auth::user()->id)
            <div class="h4">You give vote to these movies</div>
        @else
            <div class="h4">{{ $user_name->name }} gives vote to these movies</div>
        @endif
    <table class="container">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Suggest to watch at</th>
            <th>Movie details</th>
        </tr>
        @php
         $num=1;
        @endphp
        @foreach($movies as $movies)
        <tr>
            <td>{{ $num++ }}</td>
            <td><img src="{{ asset('storage/uploads/'.$movies->getData->image) }}" class="rounded" style="width: 90px" alt="pic"></td>
            <td>{{ $movies->getData->name }}</td>
            <td>{{ $movies->day }}</td>
            <td><a href="{{ route("detail",$movies->getData->id) }}"><button class="btn btn-warning">Detail</button></a></td>
        </tr>
        @endforeach
    </table>
    @else
        <div style="padding-top: 20%">
            @if($user_name->id==Auth::user()->id)
                <div class="text-center text-muted h3">You have not given vote to any movie</div>
            @else
            <div class="text-center text-muted h3">{{$user_name->name}} has not given vote to any movie</div>
            @endif
        </div>
    @endif
        @if($user_name->id==Auth::user()->id)
    <div style="padding-top: 29%">Note:If any movie that you gave vote to it,so it is not here that means the movie has been deleted by the uploader of movie</div>
        @endif
</x-app-layout>
