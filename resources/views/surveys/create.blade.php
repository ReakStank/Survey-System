@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Survey</div>

                <div class="card-body">
                <form  role="form" method="POST" action="{{ url('/insert') }}">
                        {{ csrf_field() }}
                    <!-- <form action="/insert" methon="POST">
                    @csrf -->
                    <div class="form-group">
                        <label for="name">Title</label>
                        <input name="name" type="text" class="form-control" id="name" aria-describedby="namehelp" placeholder="Input Title">
                        <!-- <small id="namehelp" class="form=text text-muted">Give a description to Your Question.<small> -->
                    </div>

                    <div class="form-group">
                        <label for="description">Purpose</label>
                        <input name="description" type="text" class="form-control" id="description" aria-describedby="descriptionhelp" placeholder="Input Purpose">
                        <!-- <small id="descriptionhelp" class="form=text text-muted">What is your description for this question<small> -->
                    </div>
                    <!-- <button type="submit"></button> -->
                    <button type="submit" class="btn btn-primary">Creat Survey</button>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
