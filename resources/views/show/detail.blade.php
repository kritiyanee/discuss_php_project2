@extends('layouts.app')
@section('show')

    <div class="container">
        <br>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <img src="/uploads/album_covers/{{$album->dis_img}}" class="card-img-top">
                </div>
            </div>
            <br>
            <div class="col-sm-12">
                <h2> {{$album->dis_name}} </h2>

                <a href="#!" class="blue-text">
                    <h6 class="font-weight-bold mb-3"><i class="fas fa-map pr-2"></i> {{$album->dis_type}} </h6>
                </a>
                <p>{{$album->dis_body}}</p>
                <p>{{$album->created_at}}</p>
            </div>

            <div class="button">
                <a href="/show/{{$album->id}}/edit" class="btn btn-outline-info mr-1"> <i class="fas fa-edit"></i> Edit</a>

            </div>

            <form method="POST" action="/show/{{$album->id}}">
                {{ csrf_field() }}
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-outline-danger"> <i class="fas fa-trash"></i> Delete</button>
            </form>
        </div>
    </div>
@endsection
