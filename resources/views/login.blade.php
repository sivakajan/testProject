@extends('home')

@section('content')


<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="card border border-primary" style="width: 50%">
            <div class="card-header bg-primary  ">

                <h1 class="text-center">Login</h1>
            </div>
            <div class="card-body">
                <form action="logins" method="POST">
                    @csrf




                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email"  name="email" class="form-control" name="email">
                        @error('email')
                             <small class=" text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" name="password">
                        @error('password')
                            <small class=" text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection
