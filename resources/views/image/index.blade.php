<x-layout title="Discover free images">
    <div class="container-fluid mt-4">

        @if ($message = session('message'))

            <x-alert type="success" dismissible>
                {{ $component->icon()}}
                {{ $message }}
            </x-alert>

        @endif

        <div class="row" data-masonry='{"percentPosition": true }'>
            @foreach ($images as $image)
            <div class="col-sm-6 col-lg-4 mb-4">
                <div class="card"> 
                    <a href="{{ route('images.show', $image->id ) }}" class="card-img-top">
                        {{-- {{ dd($image->file) }} --}}
                         <img src="storage/{{ $image->file }}" alt="{{ $image->title }}">
                    </a>
                    <div class="photo-buttons">
                        <div>
                            <a class="btn btn-sm btn-info me-2" href="{{ route('images.edit', $image->id) }}">EDIT</a> |
                            <x-form action="{{ route('images.destroy', $image->id) }}" method="DELETE">
                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Are you sure?')">DELETE</button>
                            </x-form>
                        </div>                       
                    </div>
                </div>
            </div>

            @endforeach

        </div>
        {{ $images->links() }}
    </div>       
 
</x-layout>