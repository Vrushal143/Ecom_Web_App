<?php

include('functions/userfunctions.php');
include('includes/heder.php');

include('authenticate.php');

$cartItem = getCartItems();
if(mysqli_num_rows($cartItem) == 0)
{

    header('Location: index.php');
}
?>

<div class="py-3 bg-primary">
    <div class="container">
        <h6 class="text-white">
            <a href="index.php" class="text-white">
                Home /
            </a>
            <a href="checkout.php" class="text-white">
                Checkout
            </a>
        </h6>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body shadow">
                <form action="functions/placeorder.php" method="POST">
                <div class="row">
                    <div class="col-md-7">
                        <h5>Basic Details</h5>
                        <hr>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="fw-regular">Name</label>
                                    <input type="text" name="name" id="name" required placeholder="Enter your name" class="form-control">
                               <small class="text-danger name"></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="fw-regular">E-mail</label>
                                    <input type="email" name="email" id="email"  required  placeholder="Enter your email" class="form-control">
                                    <small class="text-danger email"></small>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="fw-regular">Phone</label>
                                    <input type="text" name="phone" id="phone" required  placeholder="Enter your phone number" class="form-control">
                                    <small class="text-danger phone"></small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <label class="fw-regular">Pin Code</label>
                                    <input type="text" name="pincode" id="pincode" required  placeholder="Enter your pin code" class="form-control">
                                    <small class="text-danger pincode"></small>
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="fw-regular">Address</label>
                            <textarea name="address" id="address" required   class="form-control" rows="5"></textarea>
                            <small class="text-danger address"></small>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <h5>Order Details</h5>

                        <hr>
                        <?php $items = getCartItems();
                        $totalPrice = 0;
                        foreach ($items as $citem) 
                        {
                        ?>
                            <div class="mb-1 p-2  border">
                                <div class="row align-items-center">
                                    <div class="col-md-2">
                                        <img src="./admin/uploads/<?= $citem['image']; ?>" alt="Image" width="60px">
                                    </div>
                                    <div class="col-md-5">
                                        <label><?= $citem['name']; ?></label>
                                    </div>
                                    <div class="col-md-3">
                                        <label><?= $citem['selling_price']; ?></label>
                                    </div>
                                    <div class="col-md-2">
                                        <label>x<?= $citem['prod_qty']; ?></label>
                                    </div>
                                </div>
                            </div>

                        <?php
                            $totalPrice += $citem['selling_price'] * $citem['prod_qty'];
                        }
                        ?>
                        <hr>
                        <h5>Total Price : <span class="float-end fw-bold"><?= $totalPrice ?></span></h5>
                        <div class="">
                            <input type="hidden" name="payment_mode" value="COD">
                            <button  type="submit" name="placeOrderBtn" class="btn btn-success  w-100">Confirm and place order | COD</button>
                            <div id="paypal-button-container" class="mt-3"></div>
                        </div>



                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('includes/footer.php'); ?>

 <!-- Replace "test" with your own sandbox Business account app client ID -->
 <script src="https://www.paypal.com/sdk/js?client-id=AZp9Stf9TSgqkznQrZF4suCxO7t0l041ZR6ojONbXze-U4FsAGB4STDdSCV6QN9-RXAZdkR2WZMeChjS"></script>


 <script>


    paypal.Buttons({
        onclick(){

var name   = $('#name').val();
var email   = $('#email').val();
var phone   = $('#phone').val();
var pincode   = $('#pincode').val();
var address   = $('#address').val();

          
                    if(name.length == 0)
                    {
                        $('.name').text("*This field required ");
                        
                    }
                    else
                    {
                        $('.name').text("");
                    }
                    if(email.length == 0)
                    {
                        $('.email').text("*This field required ");
                        
                    }
                    else
                    {
                        $('.email').text("");
                    }
                    if(phone.length == 0)
                    {
                        $('.phone').text("*This field required ");
                        
                    }
                    else
                    {
                        $('.phone').text("");
                    }
                    
                    if(pincode.length == 0)
                    {
                        $('.pincode').text("*This field required ");
                        
                    }
                    else
                    {
                        $('.pincode').text("");
                    }
                    if(address.length == 0)
                    {
                        $('.address').text("*This field required ");
                        
                    }
                    else
                    {
                        $('.address').text("");
                    }
                    if(name.length == 0 || email.length == 0 || phone.length == 0 || phone.length == 0 || pincode.length == 0 || address.length == 0 )
                    {
                        return false;
                    }
  
        },
      // Sets up the transaction when a payment button is clicked
      createOrder: (data, actions) => {
       
        return actions.order.create({
          purchase_units: [{
            amount: {
              value:  '0.1'//'<?= $totalPrice ?>' // Can also reference a variable or function
            }
          }]
        });
      },
      // Finalize the transaction after payer approval
      onApprove: (data, actions) => {
        return actions.order.capture().then(function(orderData) {
         
          const transaction = orderData.purchase_units[0].payments.captures[0];
          
          var name   = $('#name').val();
          var email   = $('#email').val();
          var phone   = $('#phone').val();
          var pincode   = $('#pincode').val();
          var address   = $('#address').val();
          

          var data = {
            'name':name,
            'email':email,
            'phone':phone,
            'pincode':pincode,
            'address':address,
            'payment_mode':"Paid by PayPal",
            'payment_id': transaction.id,
            'placeOrderBtn': true
          };
$.ajax({
    method: "POST",
    url: "functions/placeorder.php",
    data: data,
    success: function (response) {
        if(response == 201)
        {
            alertify.success("Order Placed Successfully");
           // actions.redirect('my-orders.php');
            window.location.href = "my-orders.php";
        }
        
    }
});

          // When ready to go live, remove the alert and show a success message within this page. For example:
          // const element = document.getElementById('paypal-button-container');
          // element.innerHTML = '<h3>Thank you for your payment!</h3>';
          // Or go to another URL:  actions.redirect('thank_you.html');
        });
      }
    }).render('#paypal-button-container');
  </script>