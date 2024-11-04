
@extends('layouts .layout_admin')
    
@section('content')
<div class ="container mt-5 mb-5">
    <div class ="row">
        <div class ="col-md-12">
            <div class ="card">
                <div class ="card-header">
                    <div >EDIT RELIGION FORM
                        
                    </div>
                </div>
                <div class= "card-body">

                    <form action ="{{ route('religions.update', $religion ->id ) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class = "col-2">NAME        :</label>
                            <input type = "text" name = "name" value =" {{ $religion->name }}"> 
                        </div>
                   
                        <div class="mb-3">
                            <label class = "col-2">DESCRIPTION :</label>
                            <input type = "text" name = "description" value =" {{ $religion->description }}"> 
                        </div>
                       
                    
                        <br>
                        <div class= "gap-2">
                            <button type = "submit" name = "submit" class="btn btn-primary btn-lg"> UPDATE</button>
                     
                         <a href="{{ route('religions.index') }}" class="btn btn-success btn-lg float-end"> BACK</a>
                             
                   
                        </div>
                                       
                                 
                    </form>
                    
                 
                
                </div>
            </div>
        </div>
    </div>
</div>

@endsection