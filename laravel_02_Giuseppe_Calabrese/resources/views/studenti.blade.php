<x-layout>

    <x-header>STUDENTI</x-header>
    
       <div class="container my-5">
            <div class="row justify-content-center">
    
            @foreach($students as $student)
                <x-cards 
                id="{{ $student['id'] }}"
                name="{{ $student['name'] }}"
                surname="{{ $student['surname'] }}"
                age="{{ $student['age'] }}"
                route="dettaglio-studente"

                />
                    
            @endforeach
            
            </div>
       </div>

</x-layout>

    
    