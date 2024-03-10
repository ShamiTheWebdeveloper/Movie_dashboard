<x-app-layout>
    @if($users->isNotEmpty())
    <div class="text-right text-muted h5">Total movies uploaded by you={{ $totals }}</div>
    <table class="container">
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Name</th>
            <th>Type</th>
            <th>Uploaded at</th>
            <th>Action</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{ $num++ }}</td>
            <td><img src="{{ asset('storage/uploads/'.$user->image) }}" class="rounded" style="width: 90px" alt="logo"></td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->type }}</td>
            <td>{{  date('d-m-Y', strtotime($user->created_at)) }}</td>
            <td><a href="{{ route('delete',$user->id) }}"><button class="btn btn-danger">Remove</button></a></td>
        </tr>
        @endforeach
    </table>
    @else
        <div style="padding-top: 20%">
            <div class="text-center text-muted h3">You have not uploaded any movie yet</div>
        </div>
    @endif
</x-app-layout>
