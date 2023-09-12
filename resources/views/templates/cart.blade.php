 <!-- Cart view section -->
 <section id="cart-view">
     <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <div class="cart-view-area">
                     <div class="cart-view-table">

                         <div class="table-responsive">
                             <table class="table">
                                 <thead>
                                     <tr>
                                         <th></th>
                                         <th></th>
                                         <th>Product</th>
                                         <th>Price</th>
                                         <th>Quantity</th>
                                         <th>Total</th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                     <tr>
                                         <form action="{{ route('cart.clear') }}" method="post" id="clearCartForm">
                                             @csrf
                                             <button type="submit" id='clearCartButton'
                                                 class="aa-cartbox-checkout aa-primary-btn">Clear
                                                 Cart</button>
                                         </form>
                                     </tr>
                                     <tr>
                                     </tr>
                                     <form action="{{ route('cart.updateAllQuantities') }}" id='cartForm'
                                         method="post">
                                         @csrf
                                         @method('PUT')
                                         @foreach ($cartItems as $cartItem)
                                             <tr>
                                                 <td>
                                                     {{-- <form
                                                        action="{{ route('cart.remove', ['product' => $cartItem->product->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="remove">
                                                            <fa class="fa fa-close"></fa>
                                                        </button>
                                                    </form> --}}
                                                 </td>
                                                 <td><a href="#"><img
                                                             src="{{ $cartItem->product->img }}"alt="img"></a>
                                                 </td>
                                                 <td><a class="aa-cart-title"
                                                         href="#">{{ $cartItem->product->name }}</a></td>
                                                 <td>${{ $cartItem->product->price }}</td>
                                                 <td><input type="number" name="quantity[{{ $cartItem->id }}]"
                                                         id="quantity_{{ $cartItem->id }}" class="aa-cart-quantity"
                                                         value="{{ $cartItem->quantity }}" min="1"
                                                         style="padding: 10px;
                                                           border: 2px solid #000000;
                                                           border-radius: 5px;
                                                           width: 70px;
                                                           text-align: center;
                                                           font-size: 16px;
                                                           font-weight: bold;
                                                           color: #333;
                                                           background-color: #f2f2f2;
                                                           box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);">
                                                 </td>
                                                 <td>${{ $cartItem->product->price }} x {{ $cartItem->quantity }} =
                                                     ${{ $cartItem->product->price * $cartItem->quantity }}</td>
                                             </tr>
                                         @endforeach
                                         <button type="submit" class="aa-cart-view-btn">Update</button>
                                     </form>

                                 </tbody>
                             </table>
                         </div>

                         <!-- Cart Total view -->
                         <div class="cart-view-total">
                             <h4>Cart Totals</h4>
                             <table class="aa-totals-table">
                                 <tbody>
                                     <tr>
                                         <th>Total</th>
                                         <td>${{ $cartTotal }}</td>
                                     </tr>
                                 </tbody>
                             </table>
                             <a href="checkout" class="aa-cart-view-btn">Proced to Checkout</a>

                             <div class="row"></div>

                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!-- / Cart view section -->
