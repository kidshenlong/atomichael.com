<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>

    <body> <!--style="background-color: #0A0A0A; color:white;"-->
        {{ Form::open(['route' => 'admin.sessions.store']) }}
            <div>
                {{ Form::label('email', 'Email:') }}
                {{ Form::email('email') }}
            </div>
            <div>
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password') }}
            </div>
            <div>
                {{ Form::submit('Login') }}
            </div>
        {{ Form::close() }}
    </body>

</html>