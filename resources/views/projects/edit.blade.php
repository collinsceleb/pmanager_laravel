@extends('layouts.app')

@section('content')
<main role="main pt-4">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="col-md-9 col-lg-9 pull-left">
        <h1>Update project </h1>
        <!--  <div class="row  col-md-12 col-lg-12 col-sm-12" style="background: white; margin: 10px; "> -->
        <form method="post" action="{{ route('projects.update', [$projects->id]) }}">
            {{ csrf_field() }}

            <input type="hidden" name="_method" value="put">
            <div class="form-group">
                <label for="project-name">Name<span class="required" style="color: red;">*</span></label>
                <input placeholder="Enter name" id="project-name" required name="name" spellcheck="false" , class="form-control" value="{{ $projects->name }}" />
            </div>
            <div class="form-group">
                <label for="project-content">Description</label>
                <textarea placeholder="Enter Description" style="resize: vertical;" id="project-content" name="description" rows="5" spellcheck="false" , class="form-control autosize-target text-left" value="{{ $projects->name }}">
                {{ $projects->description }}
                </textarea>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit" />
            </div>
        </form>
        <!--  </div> -->
    </div>
    <div class="col-md-3 col-lg-3 ml-auto pull-right">

        <aside class="sidebar">
            <div class="card mb-4">
                <div class="card-body">
                    <h4 class="card-title">Action</h4>
                    <ol class="list-unstyled">
                        <li><a href="/projects/{{ $projects->id }}">View project</a></li>
                        <li><a href="/projects/">All projects</a></li>
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