@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default" style="box-shadow: 0 2px 8px rgba(0,0,0,0.1); border: none;">
            <div class="panel-heading" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border: none; color: #fff; padding: 20px;">
                <h3 style="margin: 0; font-weight: 600;">
                    <span class="glyphicon glyphicon-dashboard"></span> Dashboard
                </h3>
            </div>

            <div class="panel-body" style="padding: 30px;">
                @if (session('status'))
                    <div class="alert alert-success" role="alert" style="border-left: 4px solid #28a745;">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="alert" style="background-color: #e7f3ff; border-left: 4px solid #007bff; color: #004085;">
                    <span class="glyphicon glyphicon-ok-circle"></span> <strong>Welcome back, {{ Auth::user()->name }}!</strong> You are logged in.
                </div>

                <div style="margin: 30px 0;">
                    <a href="/posts/create" class="btn btn-primary btn-lg" style="padding: 12px 30px; font-size: 16px;">
                        <span class="glyphicon glyphicon-plus"></span> Create New Post
                    </a>
                </div>

                <h3 style="margin-top: 40px; margin-bottom: 20px; padding-bottom: 15px; border-bottom: 3px solid #007bff; color: #343a40; font-weight: 600;">
                    <span class="glyphicon glyphicon-list-alt"></span> Your Blog Posts
                </h3>

                @if(count($posts) > 0)
                    <div class="table-responsive">
                        <table class="table table-hover" style="background-color: white;">
                            <thead style="background-color: #007bff; color: #fff;">
                                <tr>
                                    <th style="width: 60%; padding: 15px;">
                                        <span class="glyphicon glyphicon-file"></span> Title
                                    </th>
                                    <th class="text-center" style="width: 20%; padding: 15px;">
                                        <span class="glyphicon glyphicon-edit"></span> Edit
                                    </th>
                                    <th class="text-center" style="width: 20%; padding: 15px;">
                                        <span class="glyphicon glyphicon-trash"></span> Delete
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr style="border-left: 3px solid transparent; transition: all 0.3s;">
                                        <td style="vertical-align: middle; padding: 15px;">
                                            <a href="/posts/{{$post->id}}" style="font-size: 16px; font-weight: 500; color: #007bff; text-decoration: none;">
                                                {{$post->title}}
                                            </a>
                                            <br>
                                            <small style="color: #6c757d;">
                                                <span class="glyphicon glyphicon-calendar"></span> {{ $post->created_at->format('M j, Y') }}
                                            </small>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle; padding: 15px;">
                                            <a href="/posts/{{$post->id}}/edit" class="btn btn-default" style="border-color: #007bff; color: #007bff;">
                                                <span class="glyphicon glyphicon-edit"></span> Edit
                                            </a>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle; padding: 15px;">
                                            {!! Form::open(['action' => ['PostController@destroy', $post->id], 'method' => 'POST']) !!}
                                                {{ Form::hidden('_method', 'DELETE') }}
                                                {{ Form::submit('Delete', ['class' => 'btn btn-danger delete-confirm']) }}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <div class="text-center" style="padding: 60px 40px; background-color: #f8f9fa; border-radius: 8px;">
                        <span class="glyphicon glyphicon-inbox" style="font-size: 64px; color: #dee2e6; display: block; margin-bottom: 20px;"></span>
                        <h4 style="color: #6c757d; font-weight: 600;">You haven't created any posts yet</h4>
                        <p style="color: #6c757d; margin-bottom: 20px;">Click the button above to create your first post!</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection