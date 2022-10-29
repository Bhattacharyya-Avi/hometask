@extends('backend.master')
@section('contants')

<div class="row">
    <div class="col-6"><b>user List</b></div>

    
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">membership</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td><a href="">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->membership->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-1"></div>
</div>


@endsection