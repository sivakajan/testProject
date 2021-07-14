@extends('home')

@section('content')

<div class="container mt-4">


    <h1>Order Details</h1>
    <div >
        <div class="row" style="width:50%">
                <div class="col">
                    <p>User Name</p>
                </div>
                <div class="col">
                    <p>{{ $user->username}}</p>
                </div>
        </div>

            <div class="row" style="width:50%">
                <div class="col">
                    <p>Email</p>
                </div>
                <div class="col">
                    <p>{{ $user->email}}</p>
                </div>
            </div>

            <div class="row" style="width:50%">
                <div class="col">
                    <p>Telephone Number</p>
                </div>
                <div class="col">
                    <p>{{ $user->username}}</p>
                </div>
            </div>

            <div class="row" style="width:50%">
                <div class="col">
                    <p>Nic Number</p>
                </div>
                <div class="col">
                    <p>{{ $user->nicno}}</p>
                </div>
            </div>

        <div class="row"  style="width:75%" >
            <div class="col">
                <p>Order details</p>
            </div>
            <div class="col">
               <div>
                <div class="row">
                    <div class="col">
                     <h3>package</h3>
                    </div>
                    <div class="col">
                        <h3>count</h3>
                    </div>
                        <div class="col">
                        <h3>SubCount</h3>
                    </div>
                </div>

                   @foreach ($value as $item)
                       <div class="row">
                           <div class="col">
                            {{ $item->name }}
                           </div>
                           <div class="col">
                                {{ $item->count }}
                           </div>
                           <div class="col">

                                @switch($item->name)
                                @case('package1')

                                {{ 250*$item->count }}
                                    @break

                                @case('package2')
                                {{ 350*$item->count }}
                                    @break
                                @case('package3')
                                {{ 500*$item->count }}
                                    @break

                            @endswitch
                           </div>
                       </div>
                   @endforeach
               </div>
            </div>
    </div>
    </div>
</div>
@endsection
