<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="mt-5">
        <h2 class="mb-4">Edit Blog : {{ $blog->title }}</h2>
        @if ($errors->any())
                <div class="alert alert-danger col-md-6">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        <form action="{{ url('/blog/'.$blog->id.'/update') }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="col-md-6">
                <label for="title" class="form-label">Title :</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $blog->title }}">
            </div>
            <div class="col-md-6 mt-2">
                <label for="title" class="form-label">Description :</label>
                <textarea class="form-control" name="description" id="desc-textarea" rows="4">{{ $blog->description }}</textarea>
            </div>
            <div class="col-md-6 mt-2">
                <button class="btn btn-success form-control">Save </button>
            </div>
    </div>
    </form>
        </div>
    </div>

</body>

</html>
