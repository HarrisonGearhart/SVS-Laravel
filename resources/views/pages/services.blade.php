@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header" style="border-bottom: 4px solid #17a2b8; margin-bottom: 40px; padding-bottom: 15px;">
                <h1 style="color: #343a40; font-weight: 700; margin: 0;">
                    <span class="glyphicon glyphicon-cog" style="color: #17a2b8;"></span> {{$title}}
                </h1>
            </div>

            @if(count($services) > 0)
                <div class="row">
                    @foreach($services as $index => $service)
                        <div class="col-md-4" style="margin-bottom: 30px;">
                            <div class="panel panel-default text-center" style="height: 100%; box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-top: 5px solid 
                                @if($index == 0) #007bff
                                @elseif($index == 1) #6f42c1
                                @else #17a2b8
                                @endif; border-radius: 8px; transition: transform 0.3s, box-shadow 0.3s;">
                                <div class="panel-body" style="padding: 40px 30px;">
                                    <div style="width: 90px; height: 90px; margin: 0 auto 25px; background: linear-gradient(135deg, 
                                        @if($index == 0) #007bff 0%, #0056b3 100%
                                        @elseif($index == 1) #6f42c1 0%, #5a32a3 100%
                                        @else #17a2b8 0%, #138496 100%
                                        @endif); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px 
                                        @if($index == 0) rgba(0,123,255,0.3)
                                        @elseif($index == 1) rgba(111,66,193,0.3)
                                        @else rgba(23,162,184,0.3)
                                        @endif;">
                                        @if($index == 0)
                                            <span class="glyphicon glyphicon-pencil" style="font-size: 40px; color: #fff;"></span>
                                        @elseif($index == 1)
                                            <span class="glyphicon glyphicon-console" style="font-size: 40px; color: #fff;"></span>
                                        @else
                                            <span class="glyphicon glyphicon-search" style="font-size: 40px; color: #fff;"></span>
                                        @endif
                                    </div>
                                    <h4 style="font-weight: 600; margin-bottom: 20px; color: #343a40; font-size: 20px;">{{$service}}</h4>
                                    <p style="color: #6c757d; line-height: 1.6; margin-bottom: 0;">
                                        @if($index == 0)
                                            Creating beautiful, responsive websites tailored to your needs
                                        @elseif($index == 1)
                                            Custom software solutions to power your business
                                        @else
                                            Optimizing your online presence for better visibility
                                        @endif
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="panel panel-default" style="margin-top: 40px; box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-radius: 8px; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
                    <div class="panel-body" style="padding: 45px; text-align: center;">
                        <h3 style="margin-top: 0; margin-bottom: 15px; color: #343a40; font-weight: 600;">Want to know more?</h3>
                        <p style="color: #6c757d; font-size: 17px; margin-bottom: 30px; font-weight: 300;">
                            Discover more about Filtrex Chat and how it can help your team stay connected.
                        </p>
                        <a href="/about" class="btn btn-info btn-lg" style="padding: 12px 45px; font-weight: 600;">
                            Learn More
                        </a>
                    </div>
                </div>
            @else
                <div class="text-center" style="padding: 80px 40px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.08);">
                    <span class="glyphicon glyphicon-wrench" style="font-size: 72px; color: #dee2e6; display: block; margin-bottom: 25px;"></span>
                    <h3 style="color: #343a40; font-weight: 600;">No services available at the moment</h3>
                </div>
            @endif
        </div>
    </div>
@endsection