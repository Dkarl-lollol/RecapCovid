@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Insert New Record') }}</div>

                <div class="card-body">
                   
                    <!-- form start -->
                    <form>
                        ID 
                        <input name="title" type="text"
                        class="form-control"
                        value="{{ $training->id }}">

                        Title 
                        <input name="title" type="text"
                        class="form-control"
                        value="{{ $training->title }}">

                        Description 
                        <input name="description" type="text"
                        class="form-control" 
                        value="{{ $training->description }}">
                        
                        Trainer 
                        <input name="trainer" type="text"
                        class="form-control"
                        value="{{ $training->trainer }}">
                        <button type="button" class="btn btn-primary">
                            <a href="{{ route('training:index', $training)}}" class="btn btn-primary">Back</a>
                        </button>



                    </form>
                
                    <!-- form ends -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
