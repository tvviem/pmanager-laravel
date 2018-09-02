@extends('layouts.app')

@section('content')
    <div class="col-md-9 col-lg-9 col-sm-9 float-left bg-white">
        <h1>Add a project</h1>
        <!-- Example row of columns -->
        <div class="col-lg-12 col-md-12 col-sm-12 no-gutters">
            <form action="{{ route('projects.store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">Name <span class="required">*</span></label>
                    <input placeholder="Enter project name" id="name" required
                            class="form-control" name="name" spellcheck="false">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea placeholder="Enter description" id="description"
                            class="form-control" name="description" rows="5" spellcheck="false"></textarea>
                    <input type="hidden" name="company_id" value="{{ $company_id }}">
                </div>
                <div class="form-group"><input type="submit" class="btn btn-primary" value="Submit"></div>
            </form>
        </div>
    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 float-right">
        {{-- <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div> --}}
        <div class="sidebar-module">
            <h4>Other...</h4>
            <ol class="list-unstyled">
                <li><a href="/projects">All projects</a></li>
            </ol>
        </div>
        {{-- <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            </ol>
        </div> --}}
    </div>
@endsection