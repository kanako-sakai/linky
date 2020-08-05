@extends('layouts.app_2')

@section('content')
<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
          <div class="col-md-8 heading-section text-center ftco-animate">
              <h2 class="mb-4">プランの購入</h2>
              <h5>リクエストをご検討いただき、ありがとうございます。</h5>
              <h5>ご自身のニーズに合わせ、お好きなプランをお選びください。</h5>
          </div>
        </div>
      </div>
</section>      

<section class="ftco-section bg-light" id="blog-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">1回チケット</span>
              		</div>
              		<div class="two">
              			<span class="yr">45分×1回</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">まずはお気軽に1回から始めたい方へ</a></h3>
                <p>簡単な相談やメンターのキャリアについてのお話しのみ聞きたい方にオススメです。</p>
                <p>45分×1回分</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0">
  	                <!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->            
                    <button
                      style="background-color:#48d1cc;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                      id="checkout-button-price_1H8XnpC0vG3sgto1YACdNYrL"
                      role="link"
                      type="button"
                    >
                      1回チケットを購入
                    </button>
                    
                    <div id="error-message"></div>
                    
                    <script>
                    (function() {
                      var stripe = Stripe('pk_test_51H5MQRC0vG3sgto1Gfmfhst2i6rQzPiQAbbWge4TbCsiorjZk3bKaf0okp4ecgaByenVv3PkoLNWsTUatBEEMNlq00e0HWsYiC');
                    
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
                          successUrl: 'https://343a918939f1470fa7c4fcd914ec3979.vfs.cloud9.ap-northeast-1.amazonaws.com/payment/success',
                          cancelUrl: 'https://343a918939f1470fa7c4fcd914ec3979.vfs.cloud9.ap-northeast-1.amazonaws.com/payment/canceled',
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
                  </p>  
                </div>
              </div>
            </div>
          </div>
    
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">3回チケット</span>
              		</div>
              		<div class="two">
              			<span class="yr">45分×3回</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">継続して相談されたい方へ</a></h3>
                <p>1-2か月に1回のペースで継続的にメンターとお話しすることで、より具体的なフィードバックを得ることができます。</p>
                <p>45分×3回分</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0">
	                <!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
                    <button
                      style="background-color:#48d1cc;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                      id="checkout-button-price_1H8XpqC0vG3sgto1Mdurmn5n"
                      role="link"
                      type="button"
                    >
                      3回チケットを購入
                    </button>
                    
                    <div id="error-message"></div>
                    
                    <script>
                    (function() {
                      var stripe = Stripe('pk_test_51H5MQRC0vG3sgto1Gfmfhst2i6rQzPiQAbbWge4TbCsiorjZk3bKaf0okp4ecgaByenVv3PkoLNWsTUatBEEMNlq00e0HWsYiC');
                    
                      var checkoutButton = document.getElementById('checkout-button-price_1H8XpqC0vG3sgto1Mdurmn5n');
                      checkoutButton.addEventListener('click', function () {
                        // When the customer clicks on the button, redirect
                        // them to Checkout.
                        stripe.redirectToCheckout({
                          lineItems: [{price: 'price_1H8XpqC0vG3sgto1Mdurmn5n', quantity: 1}],
                          mode: 'payment',
                          // Do not rely on the redirect to the successUrl for fulfilling
                          // purchases, customers may not always reach the success_url after
                          // a successful payment.
                          // Instead use one of the strategies described in
                          // https://stripe.com/docs/payments/checkout/fulfillment
                          successUrl: window.location.protocol + '//www.linkedin.com/in/kanako-sakai-4252b8b6/success',
                          cancelUrl: window.location.protocol + '//www.linkedin.com/in/kanako-sakai-4252b8b6/canceled',
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
                  </p>  
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text float-right d-block">
              	<div class="d-flex align-items-center pt-2 mb-4 topp">
              		<div class="one mr-2">
              			<span class="day">5回チケット</span>
              		</div>
              		<div class="two">
              			<span class="yr">45分×5回</span>
              		</div>
              	</div>
                <h3 class="heading"><a href="single.html">より中長期的にサポートを得たい方へ</a></a></h3>
                <p>より長期的にサポートをもらうことで、具体的なゴールの達成に近づくことができます。</p>
                <p>45分×5回分</p>
                <div class="d-flex align-items-center mt-4 meta">
	                <p class="mb-0">
	                  <!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
                    <button
                      style="background-color:#48d1cc;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
                      id="checkout-button-price_1H8XrFC0vG3sgto1H1hGIq97"
                      role="link"
                      type="button"
                    >
                      5回チケットを購入
                    </button>
                    
                    <div id="error-message"></div>
                    
                    <script>
                    (function() {
                      var stripe = Stripe('pk_test_51H5MQRC0vG3sgto1Gfmfhst2i6rQzPiQAbbWge4TbCsiorjZk3bKaf0okp4ecgaByenVv3PkoLNWsTUatBEEMNlq00e0HWsYiC');
                    
                      var checkoutButton = document.getElementById('checkout-button-price_1H8XrFC0vG3sgto1H1hGIq97');
                      checkoutButton.addEventListener('click', function () {
                        // When the customer clicks on the button, redirect
                        // them to Checkout.
                        stripe.redirectToCheckout({
                          lineItems: [{price: 'price_1H8XrFC0vG3sgto1H1hGIq97', quantity: 1}],
                          mode: 'payment',
                          // Do not rely on the redirect to the successUrl for fulfilling
                          // purchases, customers may not always reach the success_url after
                          // a successful payment.
                          // Instead use one of the strategies described in
                          // https://stripe.com/docs/payments/checkout/fulfillment
                          successUrl: window.location.protocol + '//www.linkedin.com/in/kanako-sakai-4252b8b6/success',
                          cancelUrl: window.location.protocol + '//www.linkedin.com/in/kanako-sakai-4252b8b6/canceled',
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
	                </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection



