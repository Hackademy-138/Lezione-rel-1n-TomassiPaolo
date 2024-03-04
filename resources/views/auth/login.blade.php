<x-layout>
    <div class="container-fluid bg-primary">
        <div class="row justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h1 class="display-1">Accedi</h1>
            </div>
        </div>
    </div> 
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-8">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label  class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>