@foreach ( $users as $user )
    <div class="card" style="width: 20rem;">
        <div class="card-body">
          <h6 class="card-subtitle mb-2 text-muted">{{ $user->name }}</h6>
        </div>
      </div>
      @endforeach
