@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center" style="background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); color: white; padding: 100px 25px; margin-bottom: 60px; box-shadow: 0 8px 16px rgba(0,123,255,0.2); border-radius: 8px;">
        <h1 style="font-size: 58px; font-weight: 700; margin-bottom: 25px; text-shadow: 2px 2px 8px rgba(0,0,0,0.2);">
            Welcome to Filtrex Chat
        </h1>
        <p style="font-size: 22px; margin-bottom: 45px; text-shadow: 1px 1px 4px rgba(0,0,0,0.2); font-weight: 300;">
            Share your daily experiences and stay connected with your team
        </p>
        <p>
            <a class="btn btn-lg" href="/login" role="button" style="margin: 10px; padding: 15px 45px; font-size: 18px; background-color: #fff; color: #007bff; border: none; font-weight: 600; box-shadow: 0 4px 8px rgba(0,0,0,0.15);">
                <span class="glyphicon glyphicon-log-in"></span> Login
            </a> 
            <a class="btn btn-success btn-lg" href="/register" role="button" style="margin: 10px; padding: 15px 45px; font-size: 18px; font-weight: 600; box-shadow: 0 4px 8px rgba(0,0,0,0.15);">
                <span class="glyphicon glyphicon-user"></span> Register
            </a>
        </p>
    </div>

    <div class="row" style="margin-bottom: 60px;">
        <div class="col-md-4">
            <div class="panel panel-default text-center" style="box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-top: 5px solid #007bff; border-radius: 8px; height: 380px; display: flex; flex-direction: column;">
                <div class="panel-body" style="padding: 40px 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: linear-gradient(135deg, #007bff 0%, #0056b3 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(0,123,255,0.3);">
                            <span class="glyphicon glyphicon-book" style="font-size: 36px; color: #fff;"></span>
                        </div>
                        <h3 style="font-weight: 600; color: #343a40; margin-bottom: 15px;">Read Posts</h3>
                        <p style="color: #6c757d; margin-bottom: 25px; line-height: 1.6;">Explore daily updates and stories from your coworkers</p>
                    </div>
                    <a href="/posts" class="btn btn-primary" style="padding: 10px 30px;">View Posts</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default text-center" style="box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-top: 5px solid #28a745; border-radius: 8px; height: 380px; display: flex; flex-direction: column;">
                <div class="panel-body" style="padding: 40px 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: linear-gradient(135deg, #28a745 0%, #218838 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(40,167,69,0.3);">
                            <span class="glyphicon glyphicon-info-sign" style="font-size: 36px; color: #fff;"></span>
                        </div>
                        <h3 style="font-weight: 600; color: #343a40; margin-bottom: 15px;">About Filtrex Chat</h3>
                        <p style="color: #6c757d; margin-bottom: 25px; line-height: 1.6;">Learn more about our platform and how it works</p>
                    </div>
                    <a href="/about" class="btn btn-success" style="padding: 10px 30px;">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default text-center" style="box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-top: 5px solid #17a2b8; border-radius: 8px; height: 380px; display: flex; flex-direction: column;">
                <div class="panel-body" style="padding: 40px 30px; flex: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div style="width: 80px; height: 80px; margin: 0 auto 25px; background: linear-gradient(135deg, #17a2b8 0%, #138496 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 12px rgba(23,162,184,0.3);">
                            <span class="glyphicon glyphicon-cog" style="font-size: 36px; color: #fff;"></span>
                        </div>
                        <h3 style="font-weight: 600; color: #343a40; margin-bottom: 15px;">Our Services</h3>
                        <p style="color: #6c757d; margin-bottom: 25px; line-height: 1.6;">Discover what Filtrex Chat offers</p>
                    </div>
                    <a href="/services" class="btn btn-info" style="padding: 10px 30px;">View Services</a>
                </div>
            </div>
        </div>
    </div>
@endsection