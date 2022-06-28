@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} - {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif   
                    
                    <h5>//INSTRUCTIONS</h5>
                    <ul>
                        <li>go to menu drop down - to add new create contact => <a href="{{ route('contact') }}">{{ __('Contact Form') }}</a></li>
                        <li>view all contacts here => <a href="{{ route('home') }}">{{ __('Home') }}</a></li>
                    </ul>                                       
                </div>


                <h4 style="text-align:center;">View all Contact</h4>
                <div class="card-body">


            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Surname</th>
                <th scope="col">IDno</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">DOB</th>
                <th scope="col">Language</th>
                <th scope="col">Interests</th>
                </tr>
            </thead>
            <tbody>

                    @foreach($showcontact as $data)
                    <tr>
                        <td>{{ $data->id}}</td>
                        <td>{{ $data->name}}</td>
                        <td>{{ $data->surname}}</td>
                        <td>{{ $data->idno}}</td>
                        <td>{{ $data->phone}}</td>
                        <td>{{ $data->email}}</td>
                        <td>{{ $data->dob}}</td>
                        <td>{{ $data->language}}</td>
                        <td>{{ $data->interests}}</td>
                    </tr>
                    @endforeach

            </tbody>
            </table>





                </div>



            </div>
        </div>
    </div>
</div>
@endsection
