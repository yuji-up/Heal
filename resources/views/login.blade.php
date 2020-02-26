@extends ('Layout.head') 
<link rel="stylesheet" href="{{('/assets/login.css')}}"> 
<body>
    <!-- form login -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="login">
        <h2>Sing In</h2>
        <form action="/logins" method="post">
            @csrf
            <div class="input-group">
                <input type="text" name="email" required>
                <span>Email</span>
            </div>
            <div class="input-group">
                <input type="password" name="password" required>
                <span>Password</span>
            </div>
            <div class="input-group">
                <input type="submit" value="Submit">
            </div>
        </form>
        <a href="#"class="a">Forgot Password <span>Click Here</span></a>
    </div>
</body>
