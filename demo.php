<html>


<div class="" style="text-align: center;padding: 200px;">
    <h1>Please Click to Pay Online</h1>
<button id="rzp-button1" style="padding: 20px;width: 300px;cursor: pointer;background-color: blue;color: white;">Pay</button><br><br>
<a href="cart.php" style="font-size: 20px;"> Back To Cart</a>
</div>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_iWzcLlj4xWpLWB", // Enter the Key ID generated from the Dashboard
    "amount": "1", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "INR",
    "name": "Acme Corp",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "order_id": "order_HQs6AyChLbnq9X", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        alert(response.razorpay_payment_id);
        alert(response.razorpay_order_id);
        alert(response.razorpay_signature)
    },
    "prefill": {
        "name": "Gaurav Kumar",
        "email": "gaurav.kumar@example.com",
        "contact": "9999999999"
    },
    "notes": {
        "address": "Razorpay Corporate Office"
    },
    "theme": {
        "color": "#3399cc"
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}

//pay_HM9Ba3lgPjuZEG
//order_HM978hnC2lSU06
//52d6af9cfe88954a06ede8536a1e916994944121401442b91b9d97fc95b20f91
</script>
</html>