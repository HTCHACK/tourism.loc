@extends('admin.layouts.master')
@section('title')
    <title>Administration</title>
@endsection
@section('content')

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Table List</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                    <span class="navbar-toggler-icon icon-bar"></span>
                </button>
            </div>
        </nav>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header card-header-primary">
                                <a href="{{ route('tours.index') }}" class="btn btn-warning">Back</a>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">

                                    <form method="POST" action="{{ route('tours.store') }}" class="form-group"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter title"
                                                name="title">
                                        </div>
                                        <div class="form-group">
                                            <textarea  class="form-control" placeholder="Description"
                                                name="description"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="number" class="form-control" placeholder="Price" name="price">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" id="location" class="form-control" placeholder="Location" name="location">
                                        </div>
                                        <div class="form-group">
                                            <label for="category_id" >Category</label>
                                            <select class="form-control" id="category_id" name="category_id" required>
                                                @foreach($categories as $key=>$category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Language</label>
                                            <select name="lang" class="form-control" id="exampleFormControlSelect2">
                                                <option value="uz" selected>O'zbek</option>                                           
                                                <option value="en" selected>English</option>
                                                <option value="ru" >русский</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect2">Location</label>
                                            <select name="is_popular" class="form-control" id="exampleFormControlSelect2">
                                                <option value="0">Uzbekistan</option>
                                                <option value="1" selected>World</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1"
                                                style="border: 2px solid #9C27B0;border-radius:3px;padding:0.4rem 1rem">Choose
                                                Image</label>
                                            <input id="exampleFormControlFile1" type="file" name="picture"
                                                class="form-control-file">
                                        </div>
                                        
                                        
                                        <button type="submit" class="btn btn-primary">Create</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
