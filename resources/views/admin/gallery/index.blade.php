@extends('admin.layouts.master')
@section('title')
    <title>Administration</title>
@endsection
@section('content')

    <div class="main-panel">
        <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Gallery</a>
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
                                <a style="float:right" href="{{ route('galleries.create') }}"
                                    class="btn btn-warning">Add</a>
                                <h4 class="card-title ">Images</h4>
                                <p class="card-category">Gallery Images</p>
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
                                                Picture
                                            </th>
                                            <th>
                                                Edit
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </thead>
                                        <tbody>
                                            @foreach ($galleries as $key => $gallery)
                                                <tr>
                                                    <td class="text-primary">{{ ++$key }}</td>
                                                    <td class="text-primary">{{ $gallery->name }}</td>
                                                    <td class="text-primary"><img
                                                            src="{{ asset(str_replace('public', 'storage', $gallery->picture)) }}"
                                                            width="60px" height="60x"></td>
                                                    <td class="text-primary"><a class="btn btn-warning"
                                                            href="{{ route('galleries.edit', $gallery->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                                    </td>
                                                    <td class="text-primary">
                                                        <a href="" class="btn btn-danger" onclick="var result = confirm('Are you sure you want to delete');
                                                        if(result){
                                                          event.preventDefault();
                                                          document.getElementById('index').submit();
                                                        }">
                                                          <i class="fa fa-trash"></i> Delete
                                                        </a>
                                                        <form id="index" action="{{ route('galleries.destroy',$gallery->id) }}" method="post">                                                            
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
