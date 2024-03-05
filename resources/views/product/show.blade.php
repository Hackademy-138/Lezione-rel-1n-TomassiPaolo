<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="display-1">Relazioni</h1>
            </div>
        </div>
    </div> 
    
    <div class="container mt-5 bg-warning">
        <div class="row justify-content-center">

                    <div class="col-6">
                           <img src="{{Storage::url($product->img)}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-6">
                        <h1> 
                            {{$product->name}}
                        </h1>

                        <p>
                            {{$product->body}}
                        </p>
                        <p>
                            Prezzo: {{$product->price}}$.
                        </p>
                    <a href="{{route('home')}}" class="btn btn-primary"></a>
                    </div>
                </div>
            </div>  
</x-layout>