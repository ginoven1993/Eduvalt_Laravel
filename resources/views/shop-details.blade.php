@extends('layouts.template')

@section('title')
Shop Details
@endsection

@section('content')
 <!-- breadcrumb-area -->
 <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('assets/img/bg/breadcrumb_bg.jpg')}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h3 class="title">Shop Details</h3>
                    <nav class="breadcrumb">
                        <span property="itemListElement" typeof="ListItem">
                            <a href="index-2.html">Home</a>
                        </span>
                        <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                        <span property="itemListElement" typeof="ListItem">SEO Tricks & Tips</span>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
      <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Shopping Cart</h1>
      @php $total = 0 @endphp
      @if(session('cart'))
          @foreach(session('cart') as $id => $details)
              @php $total += $details['prix'] @endphp
      <form class="mt-12" action="" method="post" enctype="multipart/form-data">
        @csrf
        <section aria-labelledby="cart-heading">
          <h2 id="cart-heading" class="sr-only">Items in your shopping cart</h2>
  
          <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200">
            <li class="flex py-6">
                <div class="flex-shrink-0">
                    <img src="" class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32">
                </div>
  
                <div class="ml-4 flex flex-1 flex-col sm:ml-6">
                  <div>
                    <div class="flex justify-between">
                      <h4 class="text-sm">
                        <a href="#" class="font-medium text-gray-700 hover:text-gray-800">{{$details['titre']}}</a>
                      </h4>
                      <p class="ml-4 text-sm font-medium text-gray-900">{{$details['prix']}}</p>
                    </div>
                    <p class="mt-1 text-sm text-gray-500"></p>
                    <p class="mt-1 text-sm text-gray-500">{{$details['Nom_formateur']}}</p>
                  </div>
    
                  <div class="mt-4 flex flex-1 items-end justify-between">
                    <p class="flex items-center space-x-2 text-sm text-gray-700">
                      <svg class="h-5 w-5 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                      </svg>
                      <span>In stock</span>
                    </p>
                    <div class="ml-4">
                      <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500 cart_remove" data-th="">
                        <span>Remove</span>
                      </button>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
        </section>
  
        <!-- Order summary -->
        <section aria-labelledby="summary-heading" class="mt-10">
          <h2 id="summary-heading" class="sr-only">Order summary</h2>
  
          <div>
            <dl class="space-y-4">
              <div class="flex items-center justify-between">
                <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                <dd class="ml-4 text-base font-medium text-gray-900">{{$details['total_prix']}}</dd>
              </div>
            </dl>
            <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
        </div>

        <div class="mt-10">
          <button type="submit" class="w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
        </div>

        <div class="mt-6 text-center text-sm">
          <p>
            or
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">
              Continue Shopping
              <span aria-hidden="true"> &rarr;</span>
            </a>
          </p>
        </div>
      </section>
    </form>
  </div>
</div>

<script>
     $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
