<?php require APPROOT . '/views/lds/header.php';?>  
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
          <form action="<?php echo URLROOT;?>/pages/contact" method="POST">
            <h2>Contact us</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero, natus? 
            </p>
            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-user"></i>
                  </span>
              </div>
              <input 
                name="email" 
                type="text" 
                placeholder="email"
                class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" 
                >
              <span class="invalid-feedback"><?php echo $data['email_err']?></span>
            </div>
            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="fa fa-phone"></i>
                  </span>
              </div>
              <input 
                name="phone_number" 
                type="text" 
                placeholder="+358407575500"
                class="form-control <?php echo (!empty($data['phone_number_err'])) ? 'is-invalid' : ''; ?>" 
                >
              <span class="invalid-feedback"><?php echo $data['phone_number_err']?></span>
            </div>
            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-envelope-open-o"></i>
                  </span>
              </div>
              <input 
                name="name" 
                type="text" 
                placeholder="name"
                class="form-control <?php echo (!empty($data['name_err'])) ? 'is-invalid' : ''; ?>">
              <span class="invalid-feedback"><?php echo $data['name_err']?></span>
            </div>
            <div class="input-group input-group-lg mb-3">
              <div class="input-group-prepend">
                  <span class="input-group-text">
                      <i class="fa fa-pencil-alt"></i>
                  </span>
              </div>
              <textarea 
                name="message" 
                type="text" 
                placeholder="Message" 
                class="form-control <?php echo (!empty($data['message_err'])) ? 'is-invalid' : ''; ?>" 
                rows="5">
              </textarea>
                <span class="invalid-feedback"><?php echo $data['message_err']?></span>
            </div>
            <input type="submit" value="Submit" class="btn btn-success btn-block">
            
          </form>
        </div>
      </div>
    </div>
  </div>

<?php require APPROOT . '/views/lds/footer.php';?>