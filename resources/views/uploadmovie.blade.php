<x-app-layout>
         <div class="h4">Upload movie</div>
            <form action="{{ route('submitmovie') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label>Name:</label>
                <input type="text" class="form-control rounded" name="name"><br>
                <label>Type:</label>
                <select class="form-select" id="sel1" name="type">
                    <option>Action,Thriller</option>
                    <option>History,Action</option>
                    <option>Horror,thriller</option>
                    <option>Funny</option>
                    <option>Science fiction</option>
                    <option>Other</option>
                </select><br>
                <label>Image:</label><br>
                <input type="file" class="form-control form-control-sm bg-light" name="image"><br>
                <label>Description</label>
                <textarea cols="20" rows="10" class="form-control" name="description"></textarea><br>
                <button class="btn btn-outline-primary">Upload</button>
            </form>
</x-app-layout>
