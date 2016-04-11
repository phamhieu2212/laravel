<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Vietpro Mobile Shop - Chi tiết sản phẩm</title>
    <link rel="stylesheet" type="text/css" href="{{asset('public/bootstrap/css/bootstrap.min.css')}}" />




    <script type="text/javascript" src="{{asset('public/bootstrap/js/jquery-1.12.3.min.js')}}"></script>


</head>
<body>
<div class="container">
<div id="signupbox" style=" margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
    <div class="panel panel-info">
        <div class="panel-heading">
            <div class="panel-title">Sign Up</div>
            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="{{URL::to('login')}}">Sign In</a></div>
        </div>
        <div class="panel-body" >
            <form id="signupform" class="form-horizontal" role="form" method="post" action="{{asset('register')}}">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                    <p>Error:</p>
                    <span></span>
                </div>


                <div class="form-group">
                    <label for="email" class="col-md-3 control-label">Username</label>
                    <div class="col-md-9">
                        <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                </div>


                <div class="form-group">
                    <label for="password" class="col-md-3 control-label">Password</label>
                    <div class="col-md-9">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>



                <div class="form-group">
                    <!-- Button -->
                    <div class="col-md-offset-3 col-md-9">
                        <input id="btn-signup" type="submit" class="btn btn-info" value="Sign up"></input>
                        <span style="margin-left:8px;">or</span>
                    </div>
                </div>





            </form>
        </div>
    </div>




</div>
</div>


<script type="text/javascript" src="{{asset('public/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>