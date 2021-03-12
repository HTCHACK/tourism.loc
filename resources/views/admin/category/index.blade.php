@extends('admin.layouts.master')
@section('title')
    <title>Administration</title>
@endsection
@section('content')

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Category</a>
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
                                <a style="float:right" href="{{ route('categories.create') }}"
                                    class="btn btn-warning">Add</a>
                                <h4 class="card-title ">Category</h4>
                                <p class="card-category">Tour Category</p>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class=" text-primary">
                                            <th>
                                                ID
                                            </th>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Edit
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($categories as $key => $category)
                                            <tr>
                                                <td class="text-primary">{{ ++$key }}</td>
                                                <td class="text-primary">{{ $category->name }}</td>
                                                <td class="text-primary"><a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a></td>
                                                <td class="text-primary">
                                                    <a href="" class="btn btn-danger" onclick="var result = confirm('Are you sure you want to delete');
                                                        if(result){
                                                          event.preventDefault();
                                                          document.getElementById('index').submit();
                                                        }">
                                                          <i class="fa fa-trash"></i> Delete
                                                        </a>
                                                        <form id="index" action="{{ route('categories.destroy',$category->id) }}" method="post" style="display:none;background-color:#007bff;">
                                                          <input type="hidden" name="_method" value='delete'>
                                                          {{csrf_field()}}
                                                        </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
