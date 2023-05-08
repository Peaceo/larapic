<h1>All Files</h1>

<a href="{{ route('images.create' )}}">Upload Image</a>

@if ($message = session('message'))
<div class="">{{ $message }}</div>    
@endif
@foreach ($images as $image)

<div class="images">
    <a href="{{ route('images.show', $image->id ) }}">
        {{-- {{ dd($image->file) }} --}}
        <img src="storage/{{ $image->file }}" alt="{{ $image->title }}" width="300">
    </a>
</div>

    

    
@endforeach