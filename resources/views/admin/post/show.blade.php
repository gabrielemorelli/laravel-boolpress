@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1>Visualizza post</h1>
                <div><strong>Titolo: </strong> {{$post->title}}</div>
                <div><strong>Contenuto: </strong> {!! $post->content !!}</div>
                <div><strong>Slug: </strong> {{$post->slug}}</div>

                <div>
                    @foreach ($post->tags as $tag)
                        <span class="badge badge-primary">{{$tag->name}}</span>
                    @endforeach
                </div>

                                
                <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Torna alla lista</a>
            </div>
        </div>
    </div>
@endsection
