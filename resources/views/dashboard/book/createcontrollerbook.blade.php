<x-app-layout titles="Daftar Buku">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="/dashboard/book/store" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Id Buku</label>
            <input type="text" class="form-control" name="id_book" value="{{ old('id_book') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama Buku</label>
            <input type="text" class="form-control" name="name_book" value="{{ old('name_book') }}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penulis</label>
            <select class="form-select" aria-label="Default select example" name="author_book">
                @foreach ($author as $item)
                <option value="{{ $item->id }}">{{ $item->name_author }}</option>
                @endforeach

            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Penerbit</label>
            <select class="form-select" aria-label="Default select example" name="publisher_book">
                @foreach ($publisher as $item)
                <option value="{{ $item->id }}">{{ $item->name_publisher }}</option>
                @endforeach

            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app-layout>