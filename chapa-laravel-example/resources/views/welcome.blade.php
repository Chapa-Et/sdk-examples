<h3>Buy Borsa for 100.00 ETB</h3>
<form method="POST" action="{{ route('pay') }}" id="paymentForm">
    {{ csrf_field() }}


    <input type="submit" value="Buy" />
</form>