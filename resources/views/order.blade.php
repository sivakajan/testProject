@extends('home')

@section('content')


@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif



        <div class="container mt-5">
            <div class="card">
                <div class="card-header">
                    <h1> Order</h1>
                </div>

                <div class="card-body">
                    <form action="save"  method="POST">
                    <div class="row">

                        @csrf

                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">First Name</label>
                                <div class="col-sm-8">
                                  <input type="text" class="form-control" value="{{ old('Fname') }}" name="Fname">
                                </div>

                              </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Last Name</label>
                                <div class="col-sm-8">
                                  <input type="text" name="Lname" value="{{ old('Lname') }}" class="form-control" >
                                </div>
                              </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">User Name</label>
                                <div class="col-sm-8">
                                  <input type="text" name="username" value="{{ old('username') }}" class="form-control " id="inputEmail3">
                                  @error('username')
                                  <small class=" text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              </div>

                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Email</label>
                                <div class="col-sm-8">
                                  <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail3">
                                    @error('email')
                                             <small class=" text-danger">{{ $message }}</small>
                                        @enderror

                                </div>
                              </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                          <input type="text" name="address" value="{{ old('address') }}" class="form-control" id="inputEmail3">
                          @error('address')
                                        <small class=" text-danger">{{ $message }}</small>
                          @enderror
                        </div>
                      </div>


                      <div class="row">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Password</label>
                                <div class="col-sm-8">
                                  <input type="password"  name="password" class="form-control" id="inputEmail3">
                                  @error('password')
                                    <small class=" text-danger">{{ $message }}</small>
                                 @enderror
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Conform Password</label>
                                <div class="col-sm-8">
                                  <input type="password" name="password_confirm" class="form-control" id="inputEmail3">
                                    @error('password_confirm')
                                        <small class=" text-danger">{{ $message }}</small>
                                     @enderror
                                </div>
                              </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">NIC NO</label>
                                <div class="col-sm-8">
                                  <input type="text" name="nicno"  value="{{ old('nicno') }}" class="form-control" id="inputEmail3">
                                     @error('nicno')
                                    <small class=" text-danger">{{ $message }}</small>
                                    @enderror
                                </div>
                              </div>
                        </div>
                        <div class="col">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-4 col-form-label">Telephone</label>
                                <div class="col-sm-8">
                                  <input type="tel" name="telephone" value="{{ old('telephone') }}" class="form-control" id="inputEmail3">
                                  @error('telephone')
                                  <small class=" text-danger">{{ $message }}</small>
                                  @enderror
                                </div>
                              </div>
                        </div>
                      </div>


                      <div class="mb-3 form-check">
                        <input type="checkbox" name="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Terms and Conditions</label><br>
                        @error('checkbox')
                        <small class=" text-danger">{{ $message }}</small>
                        @enderror
                      </div>

                      <div>
                        <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th scope="col"></th>
                                <th scope="col">Package</th>
                                <th scope="col">Amount</th>
                                <th scope="col" style="width: 20%">Count</th>
                                <th scope="col" style="width: 20%">SUb Total</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th > <input type="checkbox" name="pack[]" value="package1" class="form-check-input" ></th>
                                <td>Package 1</td>
                                <td>LKR      250</td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">QTY   :</span>
                                        <input type="text" name="pack1" id="pack1"   class="form-control">

                                      </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">SUB TOTAL  :</span>
                                        <input type="text" id="packsub1" value="0"   class="form-control">

                                      </div>
                                </td>
                              </tr>

                              <tr>
                                <th > <input type="checkbox" name="pack[]" value="package2" class="form-check-input" ></th>
                                <td>Package 2</td>
                                <td>LKR      350</td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">QTY  :</span>
                                        <input type="text" id="pack2" name="pack2"   class="form-control">

                                      </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">SUB TOTAL  :</span>
                                        <input type="text"  id="packsub2" value="0"  class="form-control">

                                      </div>
                                </td>
                              </tr>

                              <tr>
                                <th > <input type="checkbox" name="pack[]" value="package3" class="form-check-input" ></th>
                                <td>Package 3</td>
                                <td>LKR      500</td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">QTY  :</span>
                                        <input type="number"id="pack3" name="pack3"  class="form-control">

                                      </div>
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">SUB TOTAL  :</span>
                                        <input type="number"  id="packsub3" value="0" class="form-control">

                                      </div>
                                </td>
                              </tr>

                              <tr class="mt-4">

                                <td colspan="4"></td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text">TOTAL  :</span>
                                        <input type="number" id="total"  class="form-control">

                                      </div>
                                </td>

                              </tr>

                            </tbody>
                          </table>
                      </div>

                      <div>
                          <div>
                              <button class="btn btn-primary">SUBMIT</button>
                          </div>
                      </div>

                    </form>
                </div>
            </div>
        </div>
@endsection
