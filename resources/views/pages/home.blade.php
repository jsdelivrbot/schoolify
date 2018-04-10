@extends('app')

@section('content')
    <nav class="navbar navbar-default navbar_color">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand"><img class="logo" src="logo.png"></a>
         </div>
         <!-- Collection of nav links and other content for toggling -->
         <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right element_right">
      
            </ul>
         </div>
      </nav>
      <div class="container">
         <div id="loginbox" style="margin-top:120px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <h2 class="welcome_text">Admin Login!</h2>
            <div class="panel panel-info" >
               <div style="padding-top:30px" class="panel-body" >
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  <form id="loginform" class="form-horizontal" role="form">
                     <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="icon-user icon-large sea_green"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Email">                                        
                     </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="icon-lock icon-large sea_green"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                     </div>
                     <div class="input-group">
                        <div class="checkbox">
                           <label>
                           <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                           </label>
                        </div>
                     </div>
                     <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                           <a id="btn-login" href="manage_student.html" class="btn btn-success login_button  button_styling">Login  </a>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div id="signupbox" style="display:none; border-color: none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
               <div class="panel-body" >
                  <form id="signupform" class="form-horizontal" role="form">
                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                           <input type="password" class="form-control" name="passwd" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="icode" placeholder="">
                        </div>
                     </div>
                     <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                           <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                           <span style="margin-left:8px;">or</span>  
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
@stop