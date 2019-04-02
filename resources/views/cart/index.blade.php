@extends('layout')

@section('content')
    <div id="container">

        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul style="list-style-type: none;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="container">
            <ul class="breadcrumb">
                <li><a href=""><i
                                class="fa fa-home">
                            <dd>Home</dd>
                        </i></a></li>
                <li><a href="">Shopping
                        Cart</a></li>
            </ul>
            <div class="row">
                <div id="content" class="col-sm-12">
                    <h1>Shopping Cart</h1>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <td class="text-center">Image</td>
                                <td class="text-left">Product Name</td>
                                <td class="text-left">Quantity</td>
                                <td class="text-right">Unit Price</td>
                                <td class="text-right">Total</td>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach (Cart::content() as $item)
                                <tr>
                                    <td class="text-center"><a
                                                href="{{ route('products.show', [$item->model->id, $item->model->slug]) }}">
                                            <img style="max-width: 230px"
                                                 src="{{ asset($item->model->images[0]->image) }}"
                                                 alt="{{ $item->model->title }}" title="{{ $item->model->title }}"
                                                 class="img-thumbnail"></a>
                                    </td>

                                    <td class="text-left">
                                        <a href="{{ route('products.show', [$item->model->id, $item->model->slug]) }}">{{ $item->model->title }}</a>
                                    </td>

                                    <td class="text-left">
                                        <div class="input-group btn-block" style="max-width: 200px;">

                                            <select class="quantity form-control" data-id="{{ $item->rowId }}"
                                                    data-productQuantity="{{ $item->model->available_quantity }}">
                                                @for ($i = 1; $i < 10 + 1 ; $i++)
                                                    <option {{ $item->qty == $i ? 'selected' : '' }}>{{ $i }}</option>
                                                @endfor
                                            </select>
                                            <span class="input-group-btn">
                                                <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}

                                <button type="submit" title="" class="btn btn-danger"><i class="fa fa-times-circle"></i></button>
                                                </form>

                                                </span></div>
                                    </td>
                                    <td class="text-right">${{ $item->model->price }}</td>
                                    <td class="text-right">${{ $item->model->price * $item->qty }}</td>
                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-sm-4 col-sm-offset-8">
                            <table class="table table-bordered">
                                <tbody>
                                <tr>
                                    <td class="text-right"><strong>Sub-Total:</strong></td>
                                    <td class="text-right">${{ $cart_data['subtotal'] }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                                    <td class="text-right">${{ $cart_data['tax'] }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>VAT (20%):</strong></td>

                                    <td class="text-right">${{ $cart_data['vat'] }}</td>
                                </tr>
                                <tr>
                                    <td class="text-right"><strong>Total:</strong></td>
                                    <td class="text-right">
                                        ${{ $cart_data['total'] }}
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="buttons">
                        <div class="pull-left"><a
                                    href="{{ URL::previous() }}"
                                    class="btn btn-default">Continue Shopping</a></div>
                        <div class="pull-right"><a
                                    href="{{ route('checkout.index') }}"
                                    class="btn btn-primary">Checkout</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script>
        (function () {
            const classname = document.querySelectorAll('.quantity');
            Array.from(classname).forEach(function (element) {
                element.addEventListener('change', function () {
                    const id = element.getAttribute('data-id');
                    const productQuantity = element.getAttribute('data-productQuantity');
                    axios.patch(`/cart/${id}`, {
                        quantity: this.value,
                        productQuantity: productQuantity
                    })
                        .then(function (response) {
                            console.log(response);
                            window.location.href = '{{ route('cart.index') }}'
                        })
                        .catch(function (error) {
                            console.log(error);
                            window.location.href = '{{ route('cart.index') }}'
                        });
                })
            })
        })();
    </script>

@endsection