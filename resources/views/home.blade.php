<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ToDo List</title>
    <!-- Font Bagus -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
</head>
<body class="bg-danger">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>Todo List Laravel</h3>
                <form action="{{ route('store') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Masukkan List Baru...">
                        <button type="submit" class="btn btn-dark btn-sm px-4">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </form>
                @if (count($todolist))
                <ul class="list-group list-group-flush mt-3">
                    @foreach ($todolist as $todo)
                        <li class="list-group-item">
                            <form action="{{ route('destroy', $todo->id)}}" method="POST">
                                {{$todo -> content}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link btn-sm float-end">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </li>
                        @endforeach
                </ul>
                @else
                <p class="text-center mt-3">Anda Belum Memasukan List!</p>
                @endif
            </div>
            @if (count($todolist))
                <div class="card-footer">
                    Anda Mempunyai {{ count($todolist) }} Pekerjaan!
                </div>
            @else

            @endif
        </div>
    </div>
</body>
</html>