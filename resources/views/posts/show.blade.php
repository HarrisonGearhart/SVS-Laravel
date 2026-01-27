@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <!-- Back Button -->
            <a href="/posts" class="btn btn-default" style="margin-bottom: 25px; border-color: #007bff; color: #007bff;">
                <span class="glyphicon glyphicon-arrow-left"></span> Back to Posts
            </a>

            <!-- Post Content Card -->
            <div class="panel panel-default" style="box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-radius: 8px; overflow: hidden;">
                <div class="panel-body" style="padding: 40px;">
                    <!-- Post Title -->
                    <h1 class="text-center" style="margin-top: 0; margin-bottom: 25px; color: #343a40; font-weight: 700;">{{$post->title}}</h1>
                    
                    <!-- Post Meta -->
                    <div class="text-center" style="margin-bottom: 35px; padding-bottom: 25px; border-bottom: 2px solid #f8f9fa;">
                        <small style="color: #6c757d; font-size: 14px;">
                            <span class="glyphicon glyphicon-calendar"></span> {{$post->created_at->format('F j, Y')}} 
                            <span style="margin: 0 15px; color: #dee2e6;">•</span>
                            <span class="glyphicon glyphicon-user"></span> {{ $post->user->name }}
                        </small>
                    </div>

                    <!-- Collapsible Cover Image -->
                    <div class="panel panel-default" style="margin-bottom: 35px; border: 1px solid #dee2e6; border-radius: 8px;">
                        <div class="panel-heading" style="background-color: #007bff; color: #fff; border-bottom: none; padding: 12px 15px; cursor: pointer;" 
                             data-toggle="collapse" 
                             data-target="#collapseImage" 
                             aria-expanded="true" 
                             aria-controls="collapseImage">
                            <div class="text-center">
                                <span class="glyphicon glyphicon-picture" style="font-size: 18px;"></span>
                                <span class="glyphicon glyphicon-chevron-down" style="margin-left: 10px; transition: transform 0.3s; font-size: 14px;"></span>
                            </div>
                        </div>
                        <div id="collapseImage" class="collapse in" aria-labelledby="headingImage">
                            <div class="panel-body text-center" style="padding: 30px; background-color: #f8f9fa;">
                                <img src="/storage/cover_images/{{ $post->cover_image }}" 
                                     alt="{{ $post->title }}"
                                     class="img-responsive" 
                                     style="max-height: 450px; width: auto; margin: 0 auto; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
                            </div>
                        </div>
                    </div>

                    <!-- Post Body -->
                    <div style="font-size: 16px; line-height: 1.8; color: #343a40;">
                        {!!$post->body!!}
                    </div>
                </div>

                <!-- Action Buttons Footer -->
                @if(!Auth::guest())
                    @if(Auth::user()->id == $post->user_id)
                        <div class="panel-footer text-center" style="background-color: #f8f9fa; padding: 20px; border-top: 2px solid #e9ecef;">
                            <a href="/posts/{{$post->id}}/edit" class="btn btn-primary" style="padding: 10px 30px; margin-right: 10px;">
                                <span class="glyphicon glyphicon-edit"></span> Edit Post
                            </a>
                            
                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST', 'style' => 'display: inline-block;']) !!}
                                {{ Form::hidden('_method', 'DELETE') }}
                                {{ Form::submit('Delete Post', ['class' => 'btn btn-danger delete-confirm', 'style' => 'padding: 10px 30px;']) }}
                            {!! Form::close() !!}
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Rotate chevron icon when collapsing/expanding
    $('#collapseImage').on('show.bs.collapse', function () {
        $(this).prev('.panel-heading').find('.glyphicon-chevron-down').css('transform', 'rotate(180deg)');
    });
    
    $('#collapseImage').on('hide.bs.collapse', function () {
        $(this).prev('.panel-heading').find('.glyphicon-chevron-down').css('transform', 'rotate(0deg)');
    });
</script>
@endpush