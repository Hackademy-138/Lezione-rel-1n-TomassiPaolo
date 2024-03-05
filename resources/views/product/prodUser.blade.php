<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
            <h1 class="display-1">{{$user->name}}</h1>
            </div>
        </div>
    </div> 
    
    <div class="container-fluid mt-5">
   <div class="row bg-warning justify-content-center bg-custom">
            @foreach ($products as $product)
             <div class="col-12 col-md-4 mt-5 d-flex justify-content-center ">
                <div class="card" style="width: 18rem;">
                <img src="{{Storage::url($product->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$product->name}}</h5>
                        <p class="card-text">{{$product->price}}</p>
                        <p class="card-text">Caricato da :{{$product->user->name}}</p>
                        
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div> 
    
</x-layout>