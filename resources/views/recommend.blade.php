<x-app-layout>
    <table class="container" style="border: 7px">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Movies</th>
        </tr>
        @foreach($users as $users)
        <tr >
            <td>{{ $num++ }}</td>
            <td>{{ $users->name }}</td>
            <td><a href="{{ route("user.detail",$users->id) }}"><button class="btn btn-warning">Details</button></a></td>
        </tr>
        @endforeach
    </table>
</x-app-layout>
{{----}}
