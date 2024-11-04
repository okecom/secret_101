@extends('layouts .layout_admin')
@section('content')

    <div class ="container mt-5 mb-5">
        <div class ="row">
            <div class ="col-md-12">


                

                <div class ="card">
                    <div class ="card-header">
                        <h4 class= "display-4">RELIGION'S DETAIL
                           
                        </h4>
                    </div>
                    <div class= "card-body">
                      
                       

                        <dl class="row  mt-5 ">
                            <dt class="col-sm-3"># </dt>
                            <dd class="col-sm-9">{{ $data->id }}</dd>
                          
                            <dt class="col-sm-3">NAME</dt>
                            <dd class="col-sm-9">{{ $data->name }}</dd>
                            
                          
                            <dt class="col-sm-3">DESCRIPTION</dt>
                            <dd class="col-sm-9">{{ $data->description }}</dd>
                          
                            
                          </dl>
                                    <br>
                                
                                    <a href="{{ route('religions.index') }}" class="btn btn-success btn-lg mt-5 float-end"> BACK</a>               
                             
                </div>
            </div>
        </div>
    </div>

@endsection