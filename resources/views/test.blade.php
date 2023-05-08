<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blade components</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    {{-- @php
        $icon = "logo.svg"
    @endphp
    <x-icon :src="$icon" /> --}}
    {{-- <x-ui.button/> --}}
    
    <x-alert type="danger" id="my-alert" class="mt-4" role="flash" dismissible>
        <x-slot:title>
            Success
        </x-slot>
        {{ $component->icon() }}
        <strong>Yaay!</strong> Data has been removed! {{ $component->link("Undo") }}

    </x-alert>

    <x-form action="/image" method="PATCH" class="aproko">
        <input type="text" name="name" id="">
        <input type="submit" value="Submit">
    </x-form>
</body>
</html>

