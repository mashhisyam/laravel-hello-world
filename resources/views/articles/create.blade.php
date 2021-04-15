@extends('layouts.app')
@section('content')
<div class="container">
    <form action="/articles" method="POST" encytype="multipart/form-data">
        @csrf
        <div class="form-group">

            <label for="title">Title: </label>
            <input type="text" class="form-control" require="required" name="title">

            <label for="content">Content: </label>
            <textarea type="text" class="form-control" require="required" name="content" id="" cols="30" rows="10"></textarea>
            <br>

            <label for="image">Feature Image: </label>
            <input type="file" class="form-control" require="required" name="image">

            <button type="submit" name="submit" class="btn btn-primary float-right">Simpan</button>
        </div>
    </form>
</div>
@endsection