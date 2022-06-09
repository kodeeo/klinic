<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
body{
    margin: 0;
    padding: 0;
    background:linear-gradient(#373B44,#4286f4);
    height: 100vh;
    background-size:cover;
  }
  #login .container #login-row #login-column #login-box {
    margin-top: 100px;
    max-width: 500px;
    height: 320px;
    /* border: 1px solid #9C9C9C; */
    background:linear-gradient(#141E30,#243B55);
    border-radius: 20px;
    
  }
  #login .container #login-row #login-column #login-box #login-form {
    padding: 20px;
  }
  #login .container #login-row #login-column #login-box #login-form #register-link {
    margin-top: -85px;
  }
</style>
<body>
    <div id="login">
        
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        @if (session()->has('msg'))
                        <p class="alert alert-success">{{session()->get('msg')}}</p>
                   @endif
                        <form id="login-form" class="form" action="{{route('master.dologin')}}" method="POST">
                         @csrf
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="email" class="text-info">Email</label><br>
                                <input type="email" name="email" value="admin@gmail.com" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" value="1234" id="password" class="form-control">
                            </div>
                            <div>
                                <a href="{{route('forget.password')}}" style="padding-left: 18rem;" class="txt3">
                                    Forgot Password?
                                </a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>