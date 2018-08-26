@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2 mx-auto">
        <div class="card border border-primary">
            <div class="card-header bg-primary text-white">
                Companies List
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach ($companies as $company)
                        <li class="list-group-item">
                            <a href="/companies/{{$company->id}}">{{ $company->name }}</a>
                        </li>    
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection
