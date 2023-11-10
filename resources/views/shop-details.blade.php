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

  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:px-0">
      <h1 class="text-center text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-10">Shopping Cart</h1>
          @if(session('cart'))
          <form class="mt-12" action="" method="post" enctype="multipart/form-data">
            @csrf
              <section aria-labelledby="cart-heading" class="d-flex" style="justify-content: center;align-items:center;flex-direction:column;">
                  <h2 id="cart-heading" class="sr-only" style="color: violet;border: 3px solid gray;">Items in your shopping cart</h2>
                  @foreach(session('cart') as $id => $details)
                  <ul role="list" class="divide-y divide-gray-200 border-b border-t border-gray-200" style="width:50%;">
                      <li class="flex py-6 d-flex justify-content-between">
                          <div class="flex-shrink-0">
                              <img width="120" height="120" src="{{asset('assets2/lms/img/'.$details['image'])}}" class="h-24 w-24 rounded-md object-cover object-center sm:h-32 sm:w-32" style="object-fit: cover">
                          </div>
  
                          <div class="ml-4 flex flex-1 flex-row sm:ml-6 d-flex justify-content-between" style="width:80%;">
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
                                    <svg class="h-0 w-0 flex-shrink-0 text-green-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" style="width: 20px;">
                                      <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
                                    </svg>
                                    <span>In stock</span>
                                  </p>
                                  <div class="ml-4">
                                    <a href="{{ route('remove_from_cart', $id) }}">
                                    <button type="button" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                      <span>Remove</span>
                                    </button></a>
                                  </div>
                                </div>
                          </div>
                      </li>
                  </ul>
                  @endforeach
              </section>
  
              <!-- Order summary -->
              <section aria-labelledby="summary-heading" class="mt-10 d-flex" style="justify-content: center;align-items:center;flex-direction:column;">
                <h2 id="summary-heading" class="sr-only">Order summary</h2>
  
                <div>
                  <dl class="space-y-4">
                    <div class="flex items-center justify-between">
                      <dt class="text-base font-medium text-gray-900">Subtotal</dt>
                      <dd class="ml-4 text-base font-medium text-gray-900">5000</dd>
                    </div>
                  </dl>
                  <p class="mt-1 text-sm text-gray-500">Shipping and taxes will be calculated at checkout.</p>
                </div>
                <input type="hidden" name="{{$details['titre']}}">
                <input type="hidden" name="{{$details['total_Prix']}}">
                <input type="hidden" name="{{$details['total_Prix']}}">
  
                <div class="mt-10">
                  <button type="submit" class="check w-full rounded-md border border-transparent bg-indigo-600 px-4 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50">Checkout</button>
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
              <script
                  src="https://cdn.fedapay.com/checkout.js?v=1.1.7"
                  data-public-key="pk_live_Atu37u2k2DcywiPEqC_JOsTd"
                  data-button-text="CheckOut"
                  data-button-class="check"
                  data-transaction-amount="{{$details['total_Prix']}}"
                  data-transaction-description="Payement de cours"
                  data-currency-iso="XOF">
              </script>
          </form>
          @else
           <h4 class="text-center">Aucun cours dans le panier </h4>
        @endif
    </div>
  </div>
  
  {{-- <script>
    $(".cart_remove").click(function (e) {
    e.preventDefault();
    var ele = $(this);
    var id = ele.data("id"); 
  
    if (confirm("Veux-tu vraiment l'enlever?")) {
        $.ajax({
            url: '{{ route('remove_from_cart') }}',
            method: "DELETE",
            data: {
                _token: '{{ csrf_token() }}', 
                id: id 
            },
            success: function (response) {
                window.location.reload();
            }
        });
    }
  });
  </script> --}}

@endsection








