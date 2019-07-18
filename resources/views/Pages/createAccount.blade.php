@extends('layout.app')

@section('content')

<div style="position: absolute;top: 20%;margin-left: 30%;width: 400px; background: #000;border-radius: 15px; margin-bottom: 20px;">
  <img style="height: 150px; margin-top: -55px; margin-left: 140px;" src="LoginIcon.png">
  <div style="margin-left: 30px">
  <P>First Name</P>
  <input style="margin-bottom: 20px; border: none;border-bottom: 1px solid #fff;  background: transparent;outline: none; height: 40px;color: #fff;font-size: 16px;"  type="text" name="" placeholder="...">
  <p>Last Name</p>
  <input style="margin-bottom: 20px;border: none;border-bottom: 1px solid #fff;  background: transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="text" name="" placeholder="...">
  <p>Username</p>
  <input style="margin-bottom: 20px;border: none;border-bottom: 1px solid #fff;  background: transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="text" name="" placeholder="...">
  <p>Email</p>
  <input style="margin-bottom: 20px; border: none;border-bottom: 1px solid #fff;  background:transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="Email" name="" placeholder="...">
  <P>Password</P>
  <input style="margin-bottom: 20px;border: none;border-bottom: 1px solid #fff;  background: transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="text" name="" placeholder="...">
  <p>Rewrite password</p>
  <input style="margin-bottom: 20px; border: none;border-bottom: 1px solid #fff;  background: transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="text" name="" placeholder="...">
  <p>country</p>
  <input style="margin-bottom: 20px;border: none;border-bottom: 1px solid #fff;  background: transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="text" name="" placeholder="...">
  <P>Phone Number</P>
  <input style="margin-bottom: 20px; border: none;border-bottom: 1px solid #fff;  background:transparent;outline: none; height: 40px;color: #fff;font-size: 16px;" type="number" name="" placeholder="...">
 <p>male <input type="checkbox" name="">female<input type="checkbox" name=""></p>
</div>

  <p style="margin-left: 90px;"><a class="btn btn-info" href="">Submit </a>     <a style="margin-left: 20px;" href="/Login" class="btn btn-info"> Have an account?</a></p>

</div>

@endsection