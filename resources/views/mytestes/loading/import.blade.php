@extends('admin/uncod/layouts.master')
@section('content')

<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Laravel 6 Import Export Excel to database - Tuts Make
        </div>
        <div class="card-body">
            <form action="{{ route('import.test',app()->getLocale()) }}" method="POST" name="importform"
               enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <a class="btn btn-info" href="{{ route('export.test',app()->getLocale()) }}"> 
                 Export File</a>
                <button class="btn btn-success">Import File</button>
            </form>
        </div>
    </div>
</div>
@endsection