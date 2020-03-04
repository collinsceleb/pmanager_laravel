@extends('layouts.app')

@section('content')
<main role="main pt-4">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="col-md-9 col-lg-9 pull-left">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">{{$companies->name}}</h1>
                <p>{{$companies->description}}</p>
                <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p> -->
            </div>
        </div>

        <div class="container">
            <!-- Example row of columns -->
            <div class="row" style="margin: 10px;">
                @foreach($companies->projects as $project)
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
                        <li><a href="/companies/{{ $companies->id }}/edit">Edit</a></li>
                        <li><a href="#">Delete</a></li>
                        <li><a href="#">Add New Member</a></li>
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
            </div> --><!-- /.card --> 
        </aside>

    </div>


</main>


@endsection