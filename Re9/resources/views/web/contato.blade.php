<!-- Order Online -->
<section id="order-form" class="order_section">
  <div class="container order_form padding">
    <div class="row">
      <div class="col-md-12 appointment_form">
        <h2 class="heading">Online Order</h2>
        <hr class="heading_space">
      <div class="row">
       <div class="col-md-8">
       <form onSubmit="return false" id="order_form" class="callus">
            <div class="row">
            <div class="form-group col-md-12">
            <div id="result" class="text-center"></div></div></div>
             <div class="row">
             <div class="form-group col-md-12">
            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat.</p>
            </div></div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name"  name="name" id="name"  required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <input type="email" class="form-control" placeholder="Email address" name="email" id="email" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Phone No" name="phone" id="phone" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">

                    <select class="form-control" id="deal" name="deal">
                       <option> Select Deal </option>
                       <option> Deal One ($200) </option>
                       <option> Deal Two ($500) </option>
                       <option> Deal Three ($900) </option>
                       <option> Deal Four ($1300) </option>
                    </select>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea placeholder="Order Details"  id="message" name="message" required></textarea>
                  </div>
                  <div class="form-group">
                     <div class="btn-submit btn-common-white">
                    <input type="submit" value="Place &nbsp; Order" id="btn_order_submit" />
                    </div>
                  </div>
                </div>
              </div>
            </form>
           </div>
           </div>
      </div>
      <div class="col-md-3">
      </div>
    </div>
    <div class="col-md-3"></div>
  </div>
</section>

