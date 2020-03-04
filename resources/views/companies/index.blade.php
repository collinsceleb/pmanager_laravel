@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-6">
            <div class="card">
                <div class="card-header text-white bg-primary mb-3">
                    Companies
                </div>
                <div class="card-body">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            @foreach($companies as $company)
                            <li class="list-group-item"><a href="/companies/{{$company->id}}"> {{ $company->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection