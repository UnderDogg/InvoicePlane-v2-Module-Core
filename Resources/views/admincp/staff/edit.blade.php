

<div class="flex-container">
  <div class="columns m-t-10">
    <div class="column">
      <h1 class="title">Edit staff</h1>
    </div>
  </div>
  <hr class="m-t-0">

  <form action="{{route('staff.update', $staffmember->id)}}" method="POST">
    {{method_field('PUT')}}
    {{csrf_field()}}
    <div class="columns">
      <div class="column">
        <div class="field">
          <label for="name" class="label">Name:</label>
          <p class="control">
            <input type="text" class="input" name="name" id="name" value="{{ $staffmember->name }}">
          </p>
        </div>

        <div class="field">
          <label for="email" class="label">Email:</label>
          <p class="control">
            <input type="text" class="input" name="email" id="email" value="{{ $staffmember->email }}">
          </p>
        </div>

        <div class="field">
          <label for="password" class="label">Password</label>
          <b-radio-group v-model="password_options">
            <div class="field">
              <b-radio name="password_options" value="keep">Do Not Change Password</b-radio>
            </div>
            <div class="field">
              <b-radio name="password_options" value="auto">Auto-Generate New Password</b-radio>
            </div>
            <div class="field">
              <b-radio name="password_options" value="manual">Manually Set New Password</b-radio>
              <p class="control">
                <input type="text" class="input" name="password" id="password" v-if="password_options == 'manual'"
                  placeholder="Manually give a password to this staffmember">
              </p>
            </div>
          </b-radio-group>
        </div>
      </div> <!-- end of .column -->

      <div class="column">
        <label for="roles" class="label">Roles:</label>
        <input type="hidden" name="roles" :value="rolesSelected" />

        @foreach ($roles as $role)
        <div class="field">
          <b-checkbox v-model="rolesSelected" :native-value="{{$role->id}}">{{$role->display_name}}</b-checkbox>
        </div>
        @endforeach
      </div>
    </div>
    <div class="columns">
      <div class="column">
        <hr />
        <button class="button is-primary is-pulled-right" style="width: 250px;">Edit staffmember</button>
      </div>
    </div>
  </form>

</div> <!-- end of .flex-container -->
