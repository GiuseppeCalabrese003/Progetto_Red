<x-layout header="Inserisci un articolo">
     
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form action="{{route('article.store')}}" method="POST" class="p-5 shadow">
                    
                    @csrf
                    <label for="title" class="form-label">Titolo</label>
                    <input type="text" name="title" placeholder="Titolo" class="form-control" id=title>

                    <label for="subtitle" class="form-label">Sottotitolo</label>
                    <input type="text" name="subtitle" placeholder="Sottotitolo" class="form-control" id=subtitle>
                    
                    <!-- <label for="subtitle" class="form-label">Inserisci un file</label>
                    <input type="file" name="cover" placeholder="File" class="form-control" id=cover> -->

                    <label for="body" class="form-label">Descrizione</label>
                    <textarea class="form-control" name="body" id="" cols="30" rows="7"></textarea>
                    
                    <button type="submit" class="btn btn-primary">Inserisci articolo</button>
                    
                </form>
            </div>
        </div>
    </div>
</x-layout>