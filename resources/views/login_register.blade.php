 @extends('index')
@section('content')
<section class="breadcrumb-part">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-title">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
            <div class="breadcrumb-link">
                <ul class="flat-list">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!-- BreadCrumb Part End -->
            <div class="inner_content">
            <div class="container">
                <div class="inner_details_container">
                    <div class="inner_details_content ">
                        <div class="home_links_heading h3 well well-sm">
                            <h1 class="login_head">My Account</h1>
                        </div>
                        <div class="inner_content_page_div futura_bk_bt">
                            <!--Login Form Start-->
                            <div class="col-sm-6 float-right">
                                <div class="navbar-inverse btn-primary btn-lg ">
                                    LOGIN </div>
                                <br>
                                <form class="form-horizontal" action="" role="form" method="post">
                                    <input type="hidden" name="signInUserToken" value="5fad15b6cc4ab" />
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" name="email" id="inputEmail3" placeholder="Email" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" name="pass" id="inputPassword3" placeholder="Password" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <div class="checkbox-inline">
                                                <label>
                                                    <input type="checkbox" value="1" name="remember"> Remember me </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" name="submit" class="btn themeButton defaultSpecialButton">Sign in</button>
                                        </div>
                                    </div>
                                </form>
                                <br>
                                <a href="trouble.php" class="btn btn-danger">Forget Password? Click Here!</a>
                                <br><br>
                            </div>
                            <!--Login End-->
                            <div class="col-sm-6">
                                <div class="navbar-inverse btn-primary btn-lg ">
                                    REGISTER </div>
                                <br>
                                <form id="register_agency">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label for="user" class="col-sm-4 control-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-sm-4 control-label">Last Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="user" class="col-sm-4 control-label">Agency Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="agency_name" id="agency_name" placeholder="Agency Name" required>
                                            
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-4 control-label">Liscense No</label>
                                        <div class="col-sm-8">
                                            <input type="number" class="form-control" name="lisence_no" id="lisence_no" placeholder="Enter Liscense No" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-4 control-label">City Name</label>
                                        <div class="col-sm-8">
                                            <select name="city_id" id="city_id" class="form-control" required>
                                                <option value=""></option>
                                                @foreach($api_cities as $value)
                                                <option value="{{$value->id}}">{{$value->city_name}}</option>    
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-4 control-label">Logo</label>
                                        <div class="col-sm-8">
                                            <input type="file" name="logo" id="logo" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-4 control-label">Phone Number</label>
                                        <div class="col-sm-8">
                                            <input type="number" name="phone_number" id="phone_number" class="form-control" placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-4 control-label">Email</label>
                                        <div class="col-sm-8">
                                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email" required onchange="check_email(this.value)">
                                             <span id="validate_email" style="display: none;color: red;font-weight: bold;">Email Already Exists</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass" class="col-sm-4 control-label">Address</label>
                                        <div class="col-sm-8">
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Enter Address" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rpass" class="col-sm-4 control-label">Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required="" onkeyup="confirm_pasword()">
                                            <span id="pass_match" style="display: none;color: red;font-weight: bold;">Password Not Matched</span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rpass" class="col-sm-4 control-label">Retype Password</label>
                                        <div class="col-sm-8">
                                            <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Retype Password" required="" onkeyup="confirm_pasword()">
                                        </div>
                                    </div>
                                    
                                    <!--New field End-->
                                    <div class="form-group">
                                        <div class="col-sm-offset-3 col-sm-10">
                                            <button type="submit" name="submit" id="signup_btn" class="btn themeButton defaultSpecialButton">REGISTER </button>
                                        </div> 
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--Login Form End-->
                    </div>
                </div>
            </div><!-- standard close -->
        </div>
        <!-- index_content close -->
<script type="text/javascript">
    $("#register_agency").submit(function(e){
        e.preventDefault();  
        $.ajax({  
            type:'POST',
            url:'<?php echo url('/') ?>/register-agency', 
            data:new FormData(this),
            contentType:false,
            cache:false,
            processData:false,
            success:function(res){          
              if(res == 'done'){
                 $('#register_agency')[0].reset();
                 alert('Users Add Successfully');
              }
            }       
        });
    })


    function confirm_pasword(){
        var password = $("#password").val();
        var confirm_password = $("#confirm_password").val();
        if(password == confirm_password){
             $('#pass_match').hide();
             $('#signup_btn').prop('disabled', false);
        }
        else{
            
             $('#pass_match').show();
             $('#signup_btn').prop('disabled', true);
        }
    }

    function check_email(email){
        $.ajax({
            type:'GET',
            url:'<?php echo url('/') ?>/check-email',
            data:{email,email},
            success:function(res){
                if(res == 'already_exists'){
                    $("#email").val('');
                    $("#validate_email").show();
                }
                else{
                    $("#validate_email").hide();
                }
            }
        });
    }
</script>        
@endsection        