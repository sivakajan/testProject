<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1>{{ $details['title'] }}</h1>
    <p>USER NAME :{{ $details['body'] }}</p>
    <p>NIC NO :{{ $details['nicno'] }}</p>
    <p>TELEPHONE NUMBER :{{ $details['telephone'] }}</p>
    {{-- <p>{{ $details['order'] }}</p> --}}
    <h3>Order Details</h3>
    @foreach ( $details['order'] as $item)
        <div>
            {{ $item->name }}  -  {{ $item->count }}  -

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
    @endforeach

    <p>Thank you for coming</p>
</body>
</html>
