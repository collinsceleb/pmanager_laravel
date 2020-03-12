@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header text-white bg-primary mb-3">
                    Create New
                </div>
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            @foreach($projects as $project)
                            <li class="list-group-item"><a href="/projects/{{$project->id}}"> {{ $project->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <p><a class="btn btn-secondary btn-sm" style="margin-left: 20px;" href="/projects/create">Create New Project</a></p>
            </div>
        </div>
    </div>
</div>

@endsection