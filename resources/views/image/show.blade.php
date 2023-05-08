<x-layout>
        <h1>{{ $image->title }}</h1>
        
        {{-- {{ dd($image->file)}} --}}
        <img src="/storage/{{ $image->file }}" alt="{{ $image->title }}">
</x-layout>