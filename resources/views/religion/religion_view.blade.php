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
                        <h4>RELIGION VIEW
                            <a href="" class="btn btn-primary float-end"> Add New Religion</a>
                        </h4>
                    </div>
                    <div class= "card-body">
               

                        <p><strong>ID:</strong> {{ $data->id }}</p>
                        <p><strong>Name:</strong> {{ $data->name }}</p>
                        <p><strong>Description:</strong> {{ $data->description }}</p>
                        <!-- Add other fields you want to display -->
                    
                            
                            <br>

                                        <a href="" class="btn btn-success btn-sm"> VIEW</a>
                                        <a href="" class="btn btn-warning  btn-sm"> EDIT</a>
                                        <a href="" class="btn btn-danger  btn-sm"> DELETE</a>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-blue-500 text-white p-4">
       ADMINISTRATOR AREA - RESTRICTED
    </div>
    
    
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous">
    </script>
</body>
</html>