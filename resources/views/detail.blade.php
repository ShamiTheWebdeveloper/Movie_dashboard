<x-app-layout>
    <div class="container">
        <div style="text-align: right">
             @if($recommend->isNotEmpty())
                 @foreach($recommend as $recommend)
                <a href="{{ route("unrecommend",$recommend->id) }}"><button class="btn btn-secondary">Delete vote</button></a>
                @endforeach
            @else
                 <form action="{{ route('recommend') }}" method="post">
                     @csrf
                     <input type="hidden" value="{{ $movie->id }}" name="movie_id">
                     <label class="text-muted h5">Select date and vote:</label><br>
                     <select class="rounded" id="sel1" name="day">
                         <option>Friday evening</option>
                         <option>Saturday night</option>
                         <option>Sunday night</option>
                     </select>
{{--                     <br><br>--}}
                     <button class="btn btn-primary">Vote</button>
                 </form>
            @endif
        </div>
        <img src="{{ asset('storage/uploads/'.$movie->image) }}" class="rounded" style="width: 60%" alt="pic">

        <div class="h2">{{ $movie->name }}</div>
        <i>Type:{{ $movie->type }}</i>

        @if($user_recommend->isNotEmpty())
         <div>Recommend by:<b>
                 @foreach($user_recommend as $user_recommend)
                   {{ $user_recommend->usersname->name }},
                 @endforeach
             </b></div>&nbsp;
        @else
            <div class="text-muted">Not any user vote this yet</div>
        @endif
        <div style="display:inline-flex;">
         @foreach($uploader as $uploader)
             @if($uploader->getname->id==Auth::user()->id)
        <div>Uploaded by:<b>You</b></div
            @else
                <div>Uploaded by:<b>{{ $uploader->getname->name }}</b></div>
            @endif
        @endforeach
             <div>&nbsp; and &nbsp;Uploaded at:{{  date('d-m-Y', strtotime($movie->created_at)) }}</div>
        </div>
        <div class="h4">Description:</div>
        <p>{{ $movie->description }}</p>
    </div>
</x-app-layout>
