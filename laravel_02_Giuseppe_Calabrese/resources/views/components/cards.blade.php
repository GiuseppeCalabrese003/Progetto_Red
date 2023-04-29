    <div class="col-12 col-md-3">
        <div class="card">
                <img src="https://picsum.photos/300" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$name}} {{$surname}}</h5>
                <p class="card-text">Età: {{$age}}</p>

                
                <a href="{{route($route , ['id' => $id]) }}" class="btn btn-info mt-3">Scopri di più sul docente</a>
                
            </div>
        </div>
    </div>