<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
</head>
<body>
    @if(count($products) > 0 )
        <ol>
            @foreach($products as $product)
                @php
                $discounted = $product['price'] - $product['discount']
                @endphp
                <li>{{ $product['name'] }} @if($product['discount'] > 0) {{ $discounted }} @endif</li>
            @endforeach
        </ol>
    @else
        <p>Products not found</p>
    @endif

    <form action="{{ route('product.add') }}" method="post">
        @csrf()
        @method('put')
        <input type="text" name="name" id="name">
        <input type="text" name="price" id="price">
        <button>Submit</button>
    </form>

    <button id="btnGet">Get</button>
</body>

    <script>
        $('#btnGet').click(function(){
            $.post( "{{ url('product/1') }}", {'_token': '{{ csrf_token() }}' }, function( data ) {
               console.log(data);
            });
        });
    </script>
</html>