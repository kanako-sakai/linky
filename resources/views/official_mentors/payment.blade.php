@extends('layouts.app_2')

@section('content')
<section class="ftco-section" id="coaches-section">
        	<div class="container">
        		<div class="row justify-content-center pb-5">
                	<div class="col-md-8 heading-section text-center">
                    	<h2 class="mb-4">マイページ</h2>
              		</div>
            </div>
            	
<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
  id="checkout-button-price_1H8XnpC0vG3sgto1YACdNYrL"
  role="link"
  type="button"
>
  お支払いに進む
</button>

<div id="error-message"></div>

<script>
(function() {
  var stripe = /*global Stripe*/Stripe('pk_test_51H5MQRC0vG3sgto1Gfmfhst2i6rQzPiQAbbWge4TbCsiorjZk3bKaf0okp4ecgaByenVv3PkoLNWsTUatBEEMNlq00e0HWsYiC');

  var checkoutButton = document.getElementById('checkout-button-price_1H8XnpC0vG3sgto1YACdNYrL');
  checkoutButton.addEventListener('click', function () {
    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
      lineItems: [{price: 'price_1H8XnpC0vG3sgto1YACdNYrL', quantity: 1}],
      mode: 'payment',
      // Do not rely on the redirect to the successUrl for fulfilling
      // purchases, customers may not always reach the success_url after
      // a successful payment.
      // Instead use one of the strategies described in
      // https://stripe.com/docs/payments/checkout/fulfillment
      successUrl: window.location.protocol + '///success',
      cancelUrl: window.location.protocol + '///canceled',
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
</section>
@endsection