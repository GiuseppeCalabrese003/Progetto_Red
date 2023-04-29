<x-layout>

        <x-header>PAGINA DI DETTAGLIO STUDENTE</x-header>
  
     <div class="container my-5">
          <div class="row justify-content-center">
  
              <div class="col-12 col-md-3">
                  <div class="card">
                          <img src="https://picsum.photos/300" class="card-img-top" alt="...">
                      <div class="card-body">
                          <h5 class="card-title">{{$student['name']}} {{$student['surname']}}</h5>
                          <p class="card-text">Età: {{$student['age']}}</p>
                          <p class='card-text small'>Materia preferita: {{$student['subject']}}</p>
  
                          <a href="{{route('studenti')}}" 
                          
                          class="btn btn-info mt-3">Torna indietro</a>
                      </div>
                  </div>
              </div>
          
          </div>
     </div>

</x-layout>
    