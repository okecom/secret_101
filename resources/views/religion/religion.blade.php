<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <title>Document</title>
</head>
<body>
    <div class ="container mt-5">
        <div class ="row">
            <div class ="col-md-12">
                <div class ="card">
                    <div class ="card-header">
                        <h4>Religions
                            <a href="" class="btn btn-primary float-end"> Add New Religion</a>
                        </h4>
                    </div>
                    <div class= "card-body">
                        <table class="table" style="table-layout: fixed; width: 100%;">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Action </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $data as $item )
                                    
                               
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm"> VIEW</a>
                                        <a href="" class="btn btn-warning  btn-sm"> EDIT</a>
                                        <a href="" class="btn btn-danger  btn-sm"> DELETE</a>
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>

                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-500 text-white p-4">
        Tailwind is working!
    </div>
    
    
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
</body>
</html>