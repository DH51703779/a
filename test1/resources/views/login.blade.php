@extends('Welcome')
@section('login')
<style>
    .btnx {
  background: #ff0000;
  -moz-user-select: none;
  text-transform: capitalize;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  font-size: 18px;
  font-weight: 400;
  letter-spacing: 1px;
  line-height: 0;
  margin-bottom: 0;
  padding: 27px 44px;
  border-radius: 25px;
  text-align: center;
  cursor: pointer;
  transition: color 0.4s linear;
  position: relative;
  z-index: 1;
  border: 0;
  overflow: hidden;
  margin: 0;
}
.btnx::before {
  content: "";
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  background: #ff6a6a;
  z-index: 1;
  border-radius: 5px;
  transition: transform 0.5s;
  transition-timing-function: ease;
  transform-origin: 0 0;
  transition-timing-function: cubic-bezier(0.5, 1.6, 0.4, 0.7);
  transform: scaleX(0);
}
.btnx:hover::before {
  transform: scaleX(1);
  color: #fff !important;
  z-index: -1;
}
</style>
<section class="login_part section_padding ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_text text-center">
                        <div class="login_part_text_iner">
                            <h2>New to our Shop?</h2>
                            <p>There are advances being made in science and technology
                                everyday, and a good example of this is the</p>
                            <a href="{{URL::to('/dangky')}}" class="btn_3">Create an Account</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="login_part_form">
                        <div class="login_part_form_iner">
                            <h3>Welcome Back ! <br>
                                Please Sign in now</h3>
                            <form class="row contact_form" action="{{URL::to('/user-dashboard')}}" method="post" novalidate="novalidate">
                                <div class="col-md-12 form-group p_star">
                                   
                                    <input type="text" class="form-control" name="email" value=""
                                        placeholder="Username">
                                </div>
                                <div class="col-md-12 form-group p_star">

                                    <input type="password" class="form-control" id="password" name="password" value=""
                                        placeholder="Password">
                                </div>
                                <div class="col-md-12 form-group">
                                    <div class="creat_account d-flex align-items-center">
                                        <input type="checkbox" id="f-option" name="selector">
                                        <label for="f-option">Remember me</label>
                                    </div>
                                    <button type="submit" value="submit" class="btn_3">
                                        log in
                                    </button>
                                    @csrf
                                    <a class="lost_pass" href="#">forget password?</a>
                                </div>
                                <a href="{{ url('auth/google') }}" class="google btnx btn-block">
                <span class="icon-google mr-3"></span> 
              </a>
              <a href="{{ url('auth/facebook') }}" class="facebook btn btn-block">
                <span class="icon-facebook mr-3"></span> 
              </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection