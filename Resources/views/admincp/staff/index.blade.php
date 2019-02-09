@extends('core::admincp.admincp')

@section('content')
<!-- Modal -->
<div class="modal fade docs-example-modal-lg" id="modal-staffmember-edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Staff Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    	<div class="temp modal-content-staffmember"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade docs-example-modal-xl" id="modal-staffmember-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Staff Member</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    	<div class="temp modal-content-staffmember"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default collapse" id="collapseContentSearch">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-1"> <label>Item</label> </div>
          <div class="col-md-3"> Item </div>
          <div class="col-md-1"> <label>Item</label> </div>
          <div class="col-md-3"> Item </div>
        </div>
      </div>
      <div class="panel-footer"><button align="right" class="btn btn-primary bg-blue">Search</button></div>
    </div>
  </div>
</div>

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Manage Staff</h1>
    </div>
    <div class="pull-right">
    <!-- Button trigger modal -->
    {{-- data-target="#modal-staffmember-create --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" id="btn-modal-staffmember">
      Create Staff Member
    </button>
  </div>
    <div class="column">
      <a href="{{route('staff.create')}}" class="button is-primary is-pulled-right"><i class="fa fa-user-plus m-r-10"></i>
        Create New Staffmember</a>
    </div>
  </div>
  <hr class="m-t-0">

  <div class="card">
    <div class="card-content">
      <div class="table-responsive">
        <table class="table table-staff table-striped">
          <thead>
            <tr>
              <th width="20px"><input type="checkbox" name="action" /></th>
              <th>Name</th>
              <th>Email</th>
              <th>Date Created</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @forelse ($staffmembers as $staffmember)
            <tr class="row-{{ $staffmember->id }} btn-modal-staff-edit">
              <input type="hidden" value="{{ $staffmember->id }}" />
              <td><input type="checkbox" name="action" /> </td>
              <td>{{$staffmember->name}}</td>
              <td>{{$staffmember->email}}</td>
              <td>{{$staffmember->created_at->toFormattedDateString()}}</td>
              <td class="has-text-right">Edit / View</td>
            </tr>
            @empty
            <tr class="row-0 btn-modal-staff-create">
              <td colspan="5">Create</td>
            </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div> <!-- end of .card -->

    {{$staffmembers->links()}}
  </div>
  @endsection

  @section('scripts')
  <script src="{{ asset('js/staff.js') }}"></script>
  @endsection