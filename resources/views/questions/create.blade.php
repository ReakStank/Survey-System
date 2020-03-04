@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Survey</div>

                <div class="card-body">
                    <form action="/Questions" methon="post">

                    @csrf

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" type="text" class="form-control" id="title" aria-describedby="titlehelp" placeholder="Input Title">
                        <small id="titlehelp" class="form=text text-muted">Give a description to Your Question.<small>
                    </div>

                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input name="purpose" type="text" class="form-control" id="title" aria-describedby="purposehelp" placeholder="Input Purpose">
                        <small id="purposehelp" class="form=text text-muted">What is your purpose for this question<small>
                    </div>

                    <button type="sumit" class="btn btn-primary">Creaet Question</button>

                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
