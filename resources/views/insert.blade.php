<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Books</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        .container {
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .form {
            width: 500px;
        }

        .btn {
            flex-basis: 50%;
            margin: 5px;
        }

        .btn-container {
            display: flex;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add Books</h1>

        <form class="form" action="{{ route('insertData') }}" method="post">
            @csrf
            <div class="form-group">
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title" id="title">
            </div>
            <div class="form-group">
                <label class="form-label" for="type">Type</label>
                <input class="form-control" type="text" name="type" id="type">
            </div>
            <div class="btn-container mt-3">
                <input class="btn btn-primary" type="submit" value="Add">
                <a class="btn btn-warning" href="{{ route('back') }}">Back</a>
            </div>
        </form>
    </div>
</body>
</html>