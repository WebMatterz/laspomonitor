<?php $__env->startSection('content'); ?>

   	 	

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Payments</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                      
                                            <li class="breadcrumb-item active">Make</li><li class="breadcrumb-item active">Payments</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->




  <div class="row">
  <div class="col-lg-12">
      <div class="card">
          <div class="card-header py-3 shadow" style="background: teal;">
            <h3 class="text-white"> Make Payment </h3>    
          </div>

              <div class="card-body bg-light">

              <section id="content">
    <div class="content-wrap">
        <div class="container clearfix">
            <div class="tabs mx-auto mb-0 clearfix" id="tab-login-register" style="max-width: 500px;">
                <div class="tab-container">

                    <div class="tab-content" id="tab-login">
                        <div class="card my-3">
                            <div class="card-body bg-white shadow">
                                <form id="paymentForm"  class="mb-0" method="POST" action="<?php echo e(route('payment.store')); ?>">
                                <?php echo e(csrf_field()); ?>

                                    <h3>Select a plan</h3>

                                    <div class="row">
                                        <div class="col-12 form-group">
                                            <label for="email">Email:</label>
                                            <input type="email" class="form-control" name="pEmail" id="email-address" value="<?php echo e(auth()->user()->email); ?>" readonly/>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="first-name">First name:</label>
                                            <input type="text" class="form-control" name="pFname" id="first-name" value="<?php echo e(auth()->user()->firstname); ?>" />
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="last-name">Last name:</label>
                                            <input type="text" class="form-control" id="last-name" name="pLname" value="<?php echo e(auth()->user()->lastname); ?>"/>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="member-form-plan">Plan:</label>
                                            <select name="member-form-plan" id="amount" name="plan" class="form-control">
                                                <option value=2000>Bronze (2000)</option>
                                                <option value=4500>Silver (4500)</option>
                                                <option value=10000>Gold (10000)</option>
                                                <option value=15000>Diamond (15000)</option>
                                                <option value=25000>Platinum (25000)</option>
                                            </select>
                                        </div>
                                        

                                        <div class="col-12 form-group form-submit">
                                            <button class="button button-3d button-black m-0 btn btn-md text-white" style="background-color:teal;" type="submit" onclick="payWithPaystack()">Proceed to pay</button>
                                            
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
</section><!-- #content end -->

   

              </div>
               <!-- end card -->
                            </div>
                        </div>
</div>
                        <!-- end row -->




















                    </div> <!-- container-fluid -->


                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                </div>
                <!-- End Page-content -->
           
            </div>
            <!-- end main content-->

     <script src="https://js.paystack.co/v1/inline.js"></script> 
<script>
    const paymentForm = document.getElementById('paymentForm');
    paymentForm.addEventListener("submit", payWithPaystack, false);
    function payWithPaystack(e) {
    e.preventDefault();
    let handler = PaystackPop.setup({
        key: 'pk_live_7a88575a2b4b4f0a7f4a2f7d8af3ac57f88507b8', // Replace with your public key
        email: document.getElementById("email-address").value,
        first_name: document.getElementById("first-name").value,
        last_name: document.getElementById("last-name").value,
        amount: document.getElementById("amount").value * 100,
        // amount: 200 * 100,
        ref: 'FIRATSRG'+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
        // label: "Optional string that replaces customer email"
        onClose: function(){
            window.location = "<?php echo e(route('user.member')); ?>";
        alert('Transaction cancelled.');
        },
        callback: function(response){
        let message = 'Payment complete! Reference: ' + response.reference;
        alert(message);
        window.location = "<?php echo e(route('user.success')); ?>=" + response.reference;
        }
    });
    handler.openIframe();
    }
</script>
<!-- end of payment scripts -->

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

 <script src="<?php echo e(asset('js/jquery-3.3.1.min.js')); ?>"></script>
    







<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\laspomonitor\resources\views/UserPages/payment.blade.php ENDPATH**/ ?>