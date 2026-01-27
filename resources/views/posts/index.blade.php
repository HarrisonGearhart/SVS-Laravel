@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header" style="border-bottom: 4px solid #007bff; margin-bottom: 40px; padding-bottom: 15px;">
                <h1 style="color: #343a40; font-weight: 700; margin: 0;">
                    <span class="glyphicon glyphicon-book" style="color: #007bff;"></span> Blog Posts
                    @if(Auth::check())
                        <a href="/posts/create" class="btn btn-primary pull-right" style="margin-top: 10px; padding: 10px 25px;">
                            <span class="glyphicon glyphicon-plus"></span> Create Post
                        </a>
                    @endif
                </h1>
            </div>

            @if(count($posts) > 0)
                @foreach($posts as $post)
                    <div class="panel panel-default" style="margin-bottom: 30px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-radius: 8px; overflow: hidden; transition: transform 0.3s, box-shadow 0.3s;">
                        <div class="panel-body" style="padding: 0;">
                            <div class="row">
                                <div class="col-md-3 col-sm-4" style="padding: 0;">
                                    <!-- Collapsible Image Toggle -->
                                    <div style="position: relative;">
                                        <a href="#collapseImg{{$post->id}}" 
                                           data-toggle="collapse" 
                                           aria-expanded="false" 
                                           aria-controls="collapseImg{{$post->id}}"
                                           style="display: block; position: relative;">
                                            <img style="width: 100%; height: 220px; object-fit: cover; cursor: pointer;" 
                                                 src="/storage/cover_images/{{ $post->cover_image }}"
                                                 alt="{{ $post->title }}">
                                            <div style="position: absolute; top: 10px; right: 10px; background-color: rgba(0,123,255,0.9); color: white; padding: 5px 10px; border-radius: 4px; font-size: 12px;">
                                                <span class="glyphicon glyphicon-eye-open"></span> Click to expand
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 col-sm-8" style="padding: 25px 30px;">
                                    <h3 style="margin-top: 0; margin-bottom: 15px; font-weight: 600;">
                                        <a href="/posts/{{$post->id}}" style="color: #343a40; text-decoration: none; transition: color 0.3s;">
                                            {{$post->title}}
                                        </a>
                                    </h3>
                                    <div style="margin-bottom: 20px; color: #6c757d;">
                                        <small>
                                            <span class="glyphicon glyphicon-calendar"></span> {{$post->created_at->format('F j, Y')}} 
                                            <span style="margin: 0 10px;">•</span>
                                            <span class="glyphicon glyphicon-user"></span> {{ $post->user->name }}
                                        </small>
                                    </div>
                                    <a href="/posts/{{$post->id}}" class="btn btn-primary" style="padding: 8px 20px;">
                                        Read More <span class="glyphicon glyphicon-chevron-right"></span>
                                    </a>
                                </div>    
                            </div>
                            
                            <!-- Collapsible Full Image -->
                            <div id="collapseImg{{$post->id}}" class="collapse">
                                <div style="padding: 20px; background-color: #f8f9fa; border-top: 2px solid #e9ecef;">
                                    <img src="/storage/cover_images/{{ $post->cover_image }}" 
                                         alt="{{ $post->title }}"
                                         class="img-responsive"
                                         style="margin: 0 auto; display: block; max-width: 100%; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                
                <div class="text-center" style="margin-top: 40px; margin-bottom: 40px;">
                    {{$posts->links()}}
                </div>
            @else
                <div class="text-center" style="padding: 80px 40px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <span class="glyphicon glyphicon-inbox" style="font-size: 72px; color: #dee2e6; display: block; margin-bottom: 25px;"></span>
                    <h3 style="color: #343a40; font-weight: 600; margin-bottom: 10px;">No posts found</h3>
                    <p style="color: #6c757d; font-size: 16px; margin-bottom: 30px;">Be the first to create a post!</p>
                    @if(Auth::check())
                        <a href="/posts/create" class="btn btn-primary btn-lg" style="padding: 12px 40px;">
                            <span class="glyphicon glyphicon-plus"></span> Create Your First Post
                        </a>
                    @endif
                </div>
            @endif
        </div>
    </div>
@endsection