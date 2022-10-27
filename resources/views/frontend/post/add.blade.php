@extends('frontend.master')
@section('contents')
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <form>
                    <div class="form-group">
                      <label>Title</label>
                      <input required name="title" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter post title">
                      @error('title')
                        <span style="color: red">{{$message}}</span>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Post Details</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection
        