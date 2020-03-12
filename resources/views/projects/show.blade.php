@extends('layouts.app')

@section('content')
<main role="main pt-4">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="col-md-9 col-lg-9 pull-left">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">{{$projects->name}}</h1>
                <p>{{$projects->description}}</p>
                <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            
            <a href="/projects/create" class="btn btn-secondary btn-sm" style="margin-bottom: 20px;">Add Project</a>
            <div class="row" style="margin: 10px;">
                @foreach($projects as $project)
                <div class="col-md-4">
                    <h2>{{$project->name}}</h2>
                    <p class="text-danger"> {{$project->description}}</p>
                    <p><a class="btn btn-secondary" href="/projects/{{ $project->id}}" role="button">View Project</a></p>
                </div>
                @endforeach
            </div>

            <hr>

        </div> <!-- /container -->
    </div>
    <div class="col-md-3 col-lg-3 ml-auto pull-right">

        <aside class="sidebar">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Action</h4>
                    <ol class="list-unstyled">
                        <li><a href="/projects/{{ $projects->id }}/edit">Edit</a></li>
                        <li><a href="/projects/create">Add Project</a></li>
                        <li><a href="/projects">Project's List</a></li>
                        <li><a href="/projects/create">Create New Project</a></li>
                        
                        
                        <br/>
                        <li>
                            <a href="#" onclick=" var result = confirm('Are you sure you wish to delete this project?');
                      if( result ){
                        event.preventDefault();
                        document.getElementById('delete-form').submit();
                      }">Delete
                            </a>
                            <form id="delete-form" action="{{ route('projects.destroy',[$projects->id]) }}" method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <!-- <li><a href="#">Add New Member</a></li> -->
                    </ol>
                </div>
            </div><!-- /.card -->
        </aside>

        <!-- <aside class="sidebar sidebar-sticky">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Members</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">Member</a></li>
                    </ol>
                </div>
            </div> -->
        <!-- /.card -->
        </aside>

    </div>


</main>


@endsection