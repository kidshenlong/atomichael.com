<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Atomichael - Admin Login</title>
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); }}
    {{ HTML::style('//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'); }}
    <style>
        body{
            background-color: #F5F5F5;
        }
        .form-signin{
            max-width: 330px;
            padding: 15px;
            margin: 150px auto;
        }
    </style>
</head>
    <body>
        {{ Form::open(['route' => 'admin.sessions.store', 'class' => 'form-signin', 'role'=>'form']) }}

            <!--{{ Form::label('email', 'Email:') }}-->
            {{ Form::email('email', '', array('class'=>'form-control', 'placeholder'=>'Email address', 'required' => 'required', 'autofocus' => 'autofocus')) }}

            <!--{{ Form::label('password', 'Password:') }}-->
            {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password', 'required' => 'required')) }}

            {{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary btn-block')) }}

        {{ Form::close() }}
    </body>

    <!--<form class="form-signin" role="form">
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="email" class="form-control" placeholder="Email address" required autofocus>
        <input type="password" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>-->


</html>