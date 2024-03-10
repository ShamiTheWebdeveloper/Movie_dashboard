<x-app-layout>
    @if($count->count > 1)
    <table class="container">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Release at</th>
            <th>Movie detail</th>
        </tr>
{{--        @foreach($count as $count)--}}
{{--        @if($count->count==$count_equal->count)--}}
{{--            <tr>--}}
{{--            <td>1</td>--}}
{{--            <td><img src="{{ asset('storage/uploads/'.$count_equal->getData->image) }}" class="rounded" style="width: 90px" alt="pic"></td>--}}
{{--            <td>{{ $count_equal->getData->name }}</td>--}}
{{--            <td>{{ $count_equal->day }}</td>--}}
{{--            <td><a href="{{ route("detail",$count_equal->getData->id) }}"><button class="btn btn-warning">Details</button></a></td>--}}
{{--            </tr>--}}
{{--            <tr>--}}
{{--                <td>2</td>--}}
{{--                <td><img src="{{ asset('storage/uploads/'.$count->getData->image) }}" class="rounded" style="width: 90px" alt="pic"></td>--}}
{{--                <td>{{ $count->getData->name }}</td>--}}
{{--                <td>{{ $count->day }}</td>--}}
{{--                <td><a href="{{ route("detail",$count->getData->id) }}"><button class="btn btn-warning">Details</button></a></td>--}}
{{--            </tr>--}}
{{--        @else--}}
        <tr>
            <td>1</td>
            <td><img src="{{ asset('storage/uploads/'.$count->getData->image) }}" class="rounded" style="width: 90px" alt="pic"></td>
            <td>{{ $count->getData->name }}</td>
            <td>
                @foreach($day as $day)
                    {{ $day->day }},
                @endforeach
            </td>
            <td><a href="{{ route("detail",$count->getData->id) }}"><button class="btn btn-warning">Details</button></a></td>
        </tr>
{{--        @endif--}}
{{--        @endforeach--}}
    </table>
    @else
        <div style="padding-top: 20%">
                <div class="text-center text-muted h3">Movie is not selected yet</div>
        </div>
    @endif
</x-app-layout>
