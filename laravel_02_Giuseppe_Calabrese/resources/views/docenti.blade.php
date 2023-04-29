<x-layout>

        <x-header>DOCENTI</x-header>   
    
       <div class="container my-5">
            <div class="row justify-content-center">
    
            @foreach($teachers as $teacher)
            <x-cards 
                id="{{ $teacher['id'] }}"
                name="{{ $teacher['name'] }}"
                surname="{{ $teacher['surname'] }}"
                age="{{ $teacher['age'] }}"
                route="dettaglio-docente"

                />
            @endforeach
            
            </div>
       </div>

</x-layout>

    
   