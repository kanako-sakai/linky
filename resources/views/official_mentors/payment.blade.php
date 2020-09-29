@extends('layouts.app_2')

@section('content')
<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-8 heading-section text-center ftco-animate">
              <h2 class="mb-4">お支払い</h2>
              <h5>お申込みいただきありがとうございます。</h5>
              <h5>以下お支払いをお願いいたします。</h5>
              <h5>お支払いを完了されないとお申込みが完了しませんのでご注意ください。</h5>
              <br>
  

                    <!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
                    <button
                      style="background-color:#48d1cc;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                      id="checkout-button-price_1HMDtCJ8nw5c3j7mk9XNG9dC"
                      role="link"
                      type="button"
                    >
                      支払いに進む
                    </button>
                    
                    <div id="error-message"></div>
                    
                    <script>
                    (function() {
                      var stripe = Stripe('pk_live_51HMDZpJ8nw5c3j7m8r9FG9mtn2JBaRAD0dC9wKqukLbybU4BfahO0OaYQzI6rZbtMFDHZtFOcUpXfNgj0vbrEpws00QJrxXZXt');
                    
                      var checkoutButton = document.getElementById('checkout-button-price_1HMDtCJ8nw5c3j7mk9XNG9dC');
                      checkoutButton.addEventListener('click', function () {
                        // When the customer clicks on the button, redirect
                        // them to Checkout.
                        stripe.redirectToCheckout({
                          lineItems: [{price: 'price_1HMDtCJ8nw5c3j7mk9XNG9dC', quantity: 1}],
                          mode: 'payment',
                          // Do not rely on the redirect to the successUrl for fulfilling
                          // purchases, customers may not always reach the success_url after
                          // a successful payment.
                          // Instead use one of the strategies described in
                          // https://stripe.com/docs/payments/checkout/fulfillment
                          successUrl: '{{ config("stripe.success_url_1") }}',
                          cancelUrl: '{{ config("stripe.cancel_url") }}',
                        })
                        .then(function (result) {
                          if (result.error) {
                            // If `redirectToCheckout` fails due to a browser or network
                            // error, display the localized error message to your customer.
                            var displayError = document.getElementById('error-message');
                            displayError.textContent = result.error.message;
                          }
                        });
                      });
                    })();
                    </script>
            </div>
        </div>
      </div>
</section>     
@endsection



