@extends('backend.master')
@section('contants')

<div class="row">
    <div><b>Add member</b></div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <form action="{{route('admin.user.post')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlInput1">Profile picture</label>
                <input name="profilepicture" type="file" class="form-control" placeholder="">
                @error('profilepicture') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Name <span style="color: red">*</span></label>
                <input required name="name" type="text" class="form-control" placeholder="Enter your name">
                @error('name') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Address <span style="color: red">*</span></label>
                <input required name="address" type="text" class="form-control" placeholder="Enter your address">
                @error('address') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Nid Number <span style="color: red">*</span></label>
                <input required name="nidnumber" type="number" class="form-control" placeholder="Enter you NID number">
                @error('nidnumber') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Nid Picture <span style="color: red">*</span></label>
                <input required name="nidpicture" type="file" class="form-control" placeholder="">
                @error('nidpicture') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
                <label for="exampleFormControlInput1">Contact Number <span style="color: red">*</span></label>
                <input required name="phonenumber" type="tel" class="form-control" placeholder="Enter you contact number">
                @error('phonenumber') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
              <label for="exampleFormControlInput1">Email <span style="color: red">*</span></label>
              <input required name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email address">
              @error('email') <span class="text-danger">{{$message}}</span> @enderror
            </div>
            
            <div class="form-group">
                <label for="exampleFormControlInput1">Password <span style="color: red">*</span></label>
                <input required name="password" type="password" class="form-control"  placeholder="Enter password">
                @error('password') <span class="text-danger">{{$message}}</span> @enderror
            </div>
        
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Details (<span style="color: red">optional</span>)</label>
              <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add member</button>
          </form>
    </div>
    <div class="col-1"></div>
</div>


  @endsection