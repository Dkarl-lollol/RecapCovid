@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Training Index') }}
                
                <div class="float-right">
                    <form class="form-inline" method="GET"
                    action="{{ route('training:index') }}">
                        <input type="text" name="keyword"
                         class="form-control">
                        <button type="submit"
                        class="btn btn-primary"
                        title="Search Title">
                        <i class="fa fa-search"></i>
                    </button>
                    </form>
                </div>
                
                </div>

                <div class="card-body">
                    
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                    
                    <table class="table table-striped">
                        <thead><tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Action</th>
                        </tr></thead>

                        <tbody>
                        @foreach($trainings as $training)
                        <tr>
                            <td>{{ $training->id }}</td>
                            <td>{{ $training->title }}</td>
                            <td>
                                <!-- button show -->
                                <a href="{{ route('training:show', $training)}}" class="btn btn-primary">
                                    <i class="fa fa-file"></i>
                                </a>
 
                                <!-- button edit -->
                                <a href="{{ route('training:edit', $training) }}" class="btn btn-warning">
                                    <i class="fa fa-edit"></i>
                                </a>

                                <!-- button delete -->
                                <a href="{{ route('training:delete', $training) }}" class="btn btn-danger">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                            
                        </tr>  
                        @endforeach
                       </tbody>

                    </table>
                {{ $trainings->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
