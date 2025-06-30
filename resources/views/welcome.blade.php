<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- vite --}}
    @vite(['resources/sass/app.scss', "resources/js/app.js"])

    <title>Document</title>
</head>
<body>
    <header class="bg-primary mb-5">
        <div class="container text-white py-4 ">
            <h1>I miei film su Laravel</h1>
        </div>
    </header>
    <div class=" container ">
        <div class="d-flex row justify-content-start">
            @foreach ($movies as $movie)
                <x-card :movie='$movie'></x-card>
            @endforeach
        </div>
    </div>

</body>
</html>
