<div class="col">
    <div class="card shadow-sm">
      <h1>{{ $car->title }}</h1>
      <p>{{ $car->producer }}</p>
      <div class="card-body">
        
        <div class="d-flex justify-content-between align-items-center">
          <div class="btn-group">
            <a href="/cars/{{ $car->id }}" class="btn btn-sm btn-outline-secondary">View</a>
          </div>
         
        </div>
      </div>
    </div>
  </div>