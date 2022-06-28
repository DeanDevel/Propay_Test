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


        <h4 style="text-align:center;">Create New Contact</h4>


        <div class="card-body">







<div class="container pt-5" style="max-width: 500px">

<!-- Alert User -->
@if(Session::has('success'))
    <div class="alert alert-success">
        {{Session::get('success')}}
    </div>
@endif

<form action="" method="post" action="{{ route('contact.save') }}">
    @csrf




<div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" name="name" id="name">

    <!-- Show error -->
    @if ($errors->has('name'))
        <div class="alert alert-danger">
            {{ $errors->first('name') }}
        </div>
    @endif
</div>





<div class="form-group">
    <label>Surname</label>
    <input type="text" class="form-control" name="surname" id="surname">

    <!-- Show error -->
    @if ($errors->has('surname'))
        <div class="alert alert-danger">
            {{ $errors->first('surname') }}
        </div>
    @endif
</div>




<div class="form-group">
    <label>South African ID Number</label>
    <input type="text" class="form-control" name="idno" id="idno">

    <!-- Show error -->
    @if ($errors->has('idno'))
        <div class="alert alert-danger">
            {{ $errors->first('idno') }}
        </div>
    @endif
</div>




<div class="form-group">
    <label>Phone</label>
    <input type="text" class="form-control" name="phone" id="phone">

    <!-- Show error -->
    @if ($errors->has('phone'))
        <div class="alert alert-danger">
            {{ $errors->first('phone') }}
        </div>
    @endif                                
</div>





<div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" id="email">

    <!-- Show error -->
    @if ($errors->has('email'))
        <div class="alert alert-danger">
            {{ $errors->first('email') }}
        </div>
    @endif                
</div>




<div class="form-group">
    <label>Date of Birth</label>
    <input type="text" class="form-control" name="dob" id="dob">

    <!-- Show error -->
    @if ($errors->has('dob'))
        <div class="alert alert-danger">
            {{ $errors->first('dob') }}
        </div>
    @endif
</div>



<div class="form-group">
    <label>Language (Single Selection)</label>
    <select class="form-control" name="language" id="language">
        <option>Afrikaans</option>
        <option>English</option>
        <option>German</option>  
        <option>Chinese</option>
        <option>Latin</option>
        <option>French</option>                        
    </select>


    <!-- Show error -->
    @if ($errors->has('language'))
        <div class="alert alert-danger">
            {{ $errors->first('language') }}
        </div>
    @endif
</div>




<div class="form-group">
    <label>Interests (Multiple Selection)</label>

    <div class="form-check">
    <input class="form-check-input" name="interests[]" type="checkbox" value="HTML" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
    HTML
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" name="interests[]" type="checkbox" value="PHP" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
    PHP
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" name="interests[]" type="checkbox" value="JQUERY" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
    JQUERY
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" name="interests[]" type="checkbox" value="CSS" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
    CSS
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" name="interests[]" type="checkbox" value="PYTHON" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
    PYTHON
    </label>
    </div>
    <div class="form-check">
    <input class="form-check-input" name="interests[]" type="checkbox" value="LARAVEL" id="flexCheckDefault">
    <label class="form-check-label" for="flexCheckDefault">
    LARAVEL
    </label>
    </div>

   
    <!-- Show error -->
    @if ($errors->has('interests'))
        <div class="alert alert-danger">
            {{ $errors->first('interests') }}
        </div>
    @endif
</div>


    <input type="submit" name="send" value="Send" class="btn btn-dark btn-block">
</form>
</div>



 

</div>



</div>
</div>
</div>
</div>
@endsection