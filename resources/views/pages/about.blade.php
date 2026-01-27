@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header" style="border-bottom: 4px solid #28a745; margin-bottom: 30px; padding-bottom: 15px;">
                <h1 style="color: #343a40; font-weight: 700; margin: 0;">
                    <span class="glyphicon glyphicon-info-sign" style="color: #28a745;"></span> About Filtrex Chat
                </h1>
            </div>

            <div class="panel panel-default" style="box-shadow: 0 4px 12px rgba(0,0,0,0.08); border: none; border-radius: 8px;">
                <div class="panel-body" style="padding: 45px; font-size: 16px; line-height: 1.8;">
                    <p style="font-size: 18px; color: #6c757d; margin-bottom: 35px; font-weight: 300;">
                        Filtrex Chat is a workplace communication platform designed to help team members stay connected through daily updates and shared experiences.
                    </p>

                    <div style="background: linear-gradient(135deg, #e7f3ff 0%, #f0f8ff 100%); padding: 30px; border-radius: 8px; border-left: 5px solid #007bff; margin-bottom: 35px;">
                        <h3 style="color: #007bff; margin-top: 0; margin-bottom: 20px; font-weight: 600;">
                            <span class="glyphicon glyphicon-star"></span> What We Offer
                        </h3>
                        <p style="color: #343a40; margin: 0;">
                            Filtrex Chat provides a streamlined way for coworkers to share blog posts about their day-to-day activities, project updates, and workplace insights. Whether you're documenting a successful project milestone, sharing lessons learned, or simply keeping your team informed about your daily tasks, our platform makes it easy to stay connected and engaged with your colleagues.
                        </p>
                    </div>

                    <div style="background: linear-gradient(135deg, #e8f5e9 0%, #f1f8f4 100%); padding: 30px; border-radius: 8px; border-left: 5px solid #28a745;">
                        <h3 style="color: #28a745; margin-top: 0; margin-bottom: 20px; font-weight: 600;">
                            <span class="glyphicon glyphicon-heart"></span> Our Purpose
                        </h3>
                        <p style="color: #343a40; margin: 0;">
                            In today's fast-paced work environment, it's easy to lose touch with what your teammates are working on. Filtrex Chat bridges that gap by creating a space where everyone can share their experiences, celebrate wins, discuss challenges, and build stronger working relationships. We believe that better communication leads to better collaboration and a more connected workplace.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection