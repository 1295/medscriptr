@extends('layouts.assets')

@section('title')
  All Bookings
@endsection


@section('content')

<h1>Medscriptr &nbsp;&nbsp;&nbsp;&nbsp;<small class="pull-right">Abesin Olabode</small></h1>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
        <tr>
          <th>&nbsp;First Name</th>
          <th>Last Name</th>
          <th>Role</th>
          <th>Email</th>
          <th></th>
          <th></th>
          
      </tr>
  </thead>
  </table>
  </div>
   @foreach($users as $user)
      <section>
        <div class="tbl-content">
          <table cellpadding="0" cellspacing="0" border="0">
            <tbody>
              <tr>
                <td> {{ $user->fname }}</td>
                <td> {{ $user->lname }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->email}}</td>

                <td style="cursor: pointer;"><a style="background-color:green; color: white;" class="modal-trigger btn " href="{{ url('/profile') }}"> View profile</a></td>
                  <td style="cursor: pointer;"><a class="modal-trigger" href="#modal4" style="color: red;">Delete</td> 
              </tr>
              
            </tbody>
          </table>
        </div>
      </section>
    @endforeach  
@endsection



