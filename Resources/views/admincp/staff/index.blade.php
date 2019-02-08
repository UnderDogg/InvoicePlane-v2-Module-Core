@extends('core::admincp.admincp')

@section('content')
    <div class="flex-container">
      <div class="columns m-t-10">
        <div class="column">
          <h1 class="title">Manage Staff</h1>
        </div>
        <div class="column">
          <a href="{{route('staff.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i> Create New Staffmember</a>
        </div>
      </div>
      <hr class="m-t-0">

      <div class="card">
        <div class="card-content">
          <table class="table is-narrow">
            <thead>
              <tr>
                <th>id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date Created</th>
                <th></th>
              </tr>
            </thead>

            <tbody>
              @foreach ($staffmembers as $staffmember)
                <tr>
                  <th>{{$staffmember->id}}</th>
                  <td>{{$staffmember->name}}</td>
                  <td>{{$staffmember->email}}</td>
                  <td>{{$staffmember->created_at->toFormattedDateString()}}</td>
                  <td class="has-text-right"><a class="button is-outlined m-r-5" href="{{route('staff.show', $staffmember->id)}}">View</a><a class="button is-light" href="{{route('staff.edit', $staffmember->id)}}">Edit</a></td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div> <!-- end of .card -->

      {{$staffmembers->links()}}
    </div>
@endsection
