<h1>Update Image Information</h1>

<x-form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data" >
    @method("PUT")
    <div>
        <img src="/storage/{{ $image->file }}" alt="{{ $image->title }}" width="400">
    </div>

    <div>
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="{{ old('title', $image->title) }}">
        @error('title')
            <div>{{ $message }}</div>
        @enderror
    </div>
   
    <button type="submit">Update</button>
</x-form>