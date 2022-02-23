<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        th {
            width: 20%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-3">Library</h1>
        <table class="table table-bordered">
            <tr>
                <th>Action</th>
                <th>No</th>
                <th>Title</th>
                <th>Type</th>
            </tr>

            @php
                $no_urut=1;
            @endphp
            @foreach ($data as $dt)
            <tr>
                <td>
                    <a href="#" class="btn btn-warning">Edit</a>
                    <a href="{{ route('deleteData', $dt->id) }}" class="btn btn-danger">Delete</a>
                </td>
                <td>{{$no_urut}}</td>
                <td>{{$dt->titile}}</td>
                <td>{{$dt->type}}</td>
            </tr>
            @php
                $no_urut+=1;
            @endphp
            @endforeach
        </table>

        <a href="{{ route('move_insert_page') }}" class="btn btn-primary">Add Data</a>
    </div>
</body>
</html>