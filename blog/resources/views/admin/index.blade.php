@extends('admin.layouts.master')
@section('title','Dashboard')
@section('page-title','Welcome To Dashboard')

@section('content')
  @if(count($errors) > 0)
      <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    @endif
    @if(Session::has('err'))
      {{Session::get('err')}}
    @endif
    @if(Session::has('success'))
      {{Session::get('success')}}
    @endif
  <div class="row">
    <div class="col-md-6">
       <h2>Page Settings</h2>
      

      
    
       <form action="#" method="post">
         <div class="form-group">
           <label for="#">Email</label>
           <input type="text" name="email" placeholder="Enter Email Address" class="form-control" value="">
         </div>
         <div class="form-group">
           <label for="#">Facebook</label>
           <input type="text" name="facebook" placeholder="Enter Facebook Link" class="form-control">
         </div>
         <div class="form-group">
           <label for="#">Twitter</label>
           <input type="text" name="twitter" placeholder="Enter Twitter Link" class="form-control">
         </div>
         <div class="form-group">
           <label for="#">Pinterest</label>
           <input type="text" name="pinterest" placeholder="Enter Pinterest Link" class="form-control">
         </div>
         <div class="form-group">
           <label for="#">Blogger</label>
           <input type="text" name="blogger" placeholder="Enter Blogger Link" class="form-control">
         </div>
         <div class="form-group">
           <label for="#">Dribbble</label>
           <input type="text" name="dribbble" placeholder="Enter Dribbble Link" class="form-control">
         </div>
         <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Add">
         </div>
       </form>
    </div>
    <div class="col-md-6">
      <h2>User Settings</h2>
      <form action="{{route('pass_change')}}" method="post">
      {{csrf_field()}}
         <div class="form-group">
           <label for="#">Email</label>
           <input type="text" readonly name="uemail" placeholder="Enter Email Address" class="form-control" value="{{Auth::User()->email}}">
         </div>
         <div class="form-group">
           <label for="#">Old Password</label>
           <input type="password" name="opassword" placeholder="Enter Old Password" class="form-control">
         </div>
         <div class="form-group">
           <label for="#">Password</label>
           <input type="password" name="upassword" placeholder="Enter Password" class="form-control">
         </div>
         <div class="form-group">
           <label for="#">Confirm Password</label>
           <input type="password" name="password_confirmation" placeholder="Re-Enter Password" class="form-control">
         </div>
         
         <div class="form-group">
           <input type="submit" class="btn btn-primary" value="Update">
         </div>
       </form>
    </div>
  </div>

@endsection