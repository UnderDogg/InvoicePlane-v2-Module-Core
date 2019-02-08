@extends('core::admincp.admincp')

@section('content')
  <div class="flex-container">
    <div class="columns m-t-10">
      <div class="column">
        <h1 class="title">View Staffmember Details</h1>
      </div> <!-- end of column -->

      <div class="column">
        <a href="{{route('staff.edit', $staffmember->id)}}" class="button is-primary is-pulled-right"><i class="fa fa-user m-r-10"></i> Edit Staffmember</a>
      </div>
    </div>
    <hr class="m-t-0">

    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">Name</label>
          <pre>{{$staffmember->name}}</pre>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Email</label>
            <pre>{{$staffmember->email}}</pre>
          </div>
        </div>

        <div class="field">
          <div class="field">
            <label for="email" class="label">Roles</label>
            <ul>
              @forelse ($staffmember->roles as $role)
                <li>{{$role->display_name}} ({{$role->description}})</li>
              @empty
                <p>This Staffmember has not been assigned any roles yet</p>
              @endforelse
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
