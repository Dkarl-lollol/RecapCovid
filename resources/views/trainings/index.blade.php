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
                        class="btn btn-primary">Search</button>
                    </form>
                </div>
                
                </div>

                <div class="card-body">
                    
                    <table class="table table-striped">
                        <thead><tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Trainer</th>
                        </tr></thead>

                        <tbody>
                        @foreach($trainings as $training)
                        <tr>
                            <td>{{ $training->id }}</td>
                            <td>{{ $training->title }}</td>
                            <td>
                                <a href="{{ route('training:show', $training)}}" class="btn btn-primary">Show</a>
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
