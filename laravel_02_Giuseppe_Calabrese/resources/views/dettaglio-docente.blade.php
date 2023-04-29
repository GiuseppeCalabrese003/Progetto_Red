<x-layout>

        <x-header>PAGINA DI DETTAGLIO DOCENTE</x-header>
  
     <div class="container my-5">
          <div class="row justify-content-center">
  
              <div class="col-12 col-md-3">
                  <div class="card">
                          <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">{{$teacher['name']}} {{$teacher['surname']}}</h5>
                          <p class="card-text">Età: {{$teacher['age']}}</p>
                          <p class='card-text small'>Materia: {{$teacher['subject']}}</p>
  
                          <a href="{{route('docenti')}}" 
                          
                          class="btn btn-info mt-3">Torna indietro</a>
                      </div>
                  </div>
              </div>
          
          </div>
     </div>

</x-layout>
    