@extends('layouts .layout_admin')
@section('content')

    <div class ="container mt-5 mb-5">
        <div class ="row">
            <div class ="col-md-12">


              
                    
                
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
             

                <div class ="card">
                    <div class ="card-header">
                        <h4 class= "display-4">RELIGIONS LIST
                            <a href="{{ route('religions.create') }}" class="btn btn-primary float-end"> Add New Religion</a>
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
                                       <a href="{{ route('religions.show', $item->id) }}" class ="btn btn-success btn-sm"> VIEW</a>
                                        <a href="{{ route('religions.edit', $item->id) }}" class="btn btn-warning  btn-sm"> EDIT</a>
                                       
                                        <form action="{{ route('religions.destroy', $item->id) }}" method="POST" class ="d-inline">
                                            @csrf
                                            @method('DELETE')
                                        <button type="submit"  class="btn btn-danger  btn-sm"> DELETE</button>
                                        </form>
                                         
                                    </td>
                                </tr>
                                 @endforeach
                            </tbody>

                        </table>
                        {{ $data->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection