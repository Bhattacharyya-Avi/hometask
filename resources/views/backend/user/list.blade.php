@extends('backend.master')
@section('contants')

<div class="row">
    <div class="col-6"><b>{{__('user.Member List')}}</b></div>

    <div class="col-6">
        <a style="float: right" href="{{route('admin.user.add')}}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M14 14.252V22H4a8 8 0 0 1 10-7.748zM12 13c-3.315 0-6-2.685-6-6s2.685-6 6-6 6 2.685 6 6-2.685 6-6 6zm6 4v-3h2v3h3v2h-3v3h-2v-3h-3v-2h3z"/></svg>
        </a>
        <a style="float: right" href="{{route('admin.user.export')}}" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M3 19h18v2H3v-2zm10-5.828L19.071 7.1l1.414 1.414L12 17 3.515 8.515 4.929 7.1 11 13.17V2h2v11.172z"/></svg>
        </a>
    </div>
</div>
<div class="row">
    <div class="col-1"></div>
    <div class="col-10">
        <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Profile</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Address</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($users as $key=>$user)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>
                        <img width="150px" src="{{url('/uploads/user/profile/'.$user->profile_picture)}}" alt="profile">
                    </td>
                    <td><a href="">{{$user->name}}</a></td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->phone_number}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        @if ($user->deleted_at == null)
                            <a href="{{route('admin.user.delete',$user->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"/><path d="M17 6h5v2h-2v13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V8H2V6h5V3a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v3zm1 2H6v12h12V8zm-4.586 6l1.768 1.768-1.414 1.414L12 15.414l-1.768 1.768-1.414-1.414L10.586 14l-1.768-1.768 1.414-1.414L12 12.586l1.768-1.768 1.414 1.414L13.414 14zM9 4v2h6V4H9z"/></svg>
                            </a>
                        @else
                            <a href="{{route('admin.user.restore',$user->id)}}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0H24V24H0z"/><path d="M19.562 12.098l1.531 2.652c.967 1.674.393 3.815-1.28 4.781-.533.307-1.136.469-1.75.469H16v2l-5-3.5 5-3.5v2h2.062c.088 0 .174-.023.25-.067.213-.123.301-.378.221-.601l-.038-.082-1.531-2.652 2.598-1.5zM7.737 9.384l.53 6.08-1.73-1-1.032 1.786c-.044.076-.067.162-.067.25 0 .245.177.45.41.492l.09.008H9v3H5.938c-1.933 0-3.5-1.567-3.5-3.5 0-.614.162-1.218.469-1.75l1.031-1.786-1.732-1 5.53-2.58zm6.013-6.415c.532.307.974.749 1.281 1.281l1.03 1.786 1.733-1-.53 6.08-5.532-2.58 1.732-1-1.031-1.786c-.044-.076-.107-.14-.183-.183-.213-.123-.478-.072-.631.11l-.052.073-1.53 2.652-2.599-1.5 1.53-2.652c.967-1.674 3.108-2.248 4.782-1.281z"/></svg>
                            </a>
                        @endif
                    </td>
                  </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="col-1"></div>
</div>


@endsection