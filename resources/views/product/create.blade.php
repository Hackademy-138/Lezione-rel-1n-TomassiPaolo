<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12 my-5 d-flex justify-content-center">
                <h1 class="display-1">Crea Prodotto</h1>
            </div>
        </div>
    </div> 
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 mt-5">
                <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Nome prodotto</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione Prodotto</label>
                        <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Prezzo prodotto</label>
                        <input type="text" class="form-control" name="price">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">img</label>
                        <input type="file" class="form-control" name="img">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>