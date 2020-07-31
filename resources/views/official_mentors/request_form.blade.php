@extends('layouts.app_2')

@section('content')
<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>

<!-- Create a button that your customers click to complete their purchase. Customize the styling to suit your branding. -->
<button
  style="background-color:#6772E5;color:#FFF;padding:8px 12px;border:0;border-radius:4px;font-size:1em"
  id="checkout-button-price_1H8XnpC0vG3sgto1YACdNYrL"
  role="link"
  type="button"
>
  支払う
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

<section class="ftco-section" id="coaches-section">
    	<div class="container">
    		<div class="row justify-content-center pb-5">
                <div class="col-md-8 heading-section text-center ftco-animate">
                    <h2 class="mb-4">オフィシャルメンターとの相談リクエスト</h2>
                </div>
            </div>

                    {{--エラーメッセージ--}}
                    @include('commons.error_messages')   
                    
                    {!! Form::open(['route' => ['official.confirm', $user->id]]) !!}
              
                   
                    <div class="form-group">
                        {!! Form::label('name', 'お名前') !!}
                        {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('email', 'ご連絡先(メールアドレス)') !!}
                        {!! Form::email('email', $user->email, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('plan', 'ご希望のプラン') !!}
                        {!! Form::text('plan', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('mentor_pref', 'ご希望のメンター') !!}
                        {!! Form::text('mentor_pref', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('goal', 'メンタリングの目的') !!}
                        {!! Form::text('goal', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('questions', 'お話しされたい内容') !!}
                        {!! Form::text('questions', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('dates', 'ご希望時間') !!}
                        {!! Form::text('dates', null, ['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::checkbox('precaution', 1, null, ['class' => 'field']) !!}
                        {!! link_to_route('privacy_policy', 'プライバシーポリシー') !!}に同意する。
                    </div>
                  
                    {!! Form::submit('送信', ['class' => 'btn py-3 px-4 btn-primary']) !!}
                    {!! Form::close() !!}
                  </div>
                </section>
  @endsection              
        