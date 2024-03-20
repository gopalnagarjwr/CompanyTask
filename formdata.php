  <?php
        
        include_once 'conn.php';

if (isset($_POST['btnSave'])) {
    $first_name    = $_POST['txt_first_name'];
    $last_name = $_POST['txt_last_name'];
    $user_name    = $_POST['txt_user_name'];
    $city   = $_POST['txt_city'];
    $state    = $_POST['txt_state'];
    $zip    = $_POST['txt_zip'];


    //insert into table tbl_contact_info
    $q = "INSERT INTO `tbl_contact_info`
            (`first_name`,`last_name`,`user_name`,`city`,`state`,`zip`)
            VALUES(
                '$first_name',
                '$last_name',
                '$user_name',
                '$city', 
                '$state',
                '$zip'
            )";

    $query = mysqli_query($con, $q);
}
  
        include_once 'header.php';
        include_once 'main.php';
        include_once 'card.php';
        include_once 'content.php';
        include_once 'project.php';
?>
  <div class='Container-fluid bg-dark py-5'>
      <div class='container'>
          <div class='row'>
              <div class='col'>
                  <div class='text-white'>
                      <h6>CONTACTS</h6>
                      <small>How to Find Us</small>
                      <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
                      <h4>9116-665513</h4>
                      <h5>Co-work Town - 52/210, Padmani VT Rd, Ward 27, Mansarovar Sector 5, Mansarovar, Jaipur,
                          Rajasthan 302020</h5>
                      <h5>hello@antiai.ltd</h5>
                  </div>
                  <div>
                      <logo><i class="fa fa-instagram text-white h3 m-2" aria-hidden="true"></i></logo>
                      <logo><i class="fa fa-linkedin text-white h3 m-2 rounded" aria-hidden="true"></i></logo>
                  </div>
              </div>
              <div class='col'>
                  <form METHOD="POST" action="">
                      <div class=" form-row text-white">
                          <div class="col-md-6 mb-3">
                              <label htmlFor="firstName">First name</label>
                              <input type="text" class="form-control" id="firstName" name="txt_first_name"
                                  placeholder="First name" required />
                          </div>
                          <div class="col-md-6 mb-3">
                              <label htmlFor="lastName">Last name</label>
                              <input type="text" class="form-control" id="lastName" name="txt_last_name"
                                  placeholder="Last name" required />
                          </div>
                      </div>
                      <div class="form-row text-white">
                          <div class="col-md-6 mb-3">
                              <label htmlFor="username">Username</label>
                              <input type="text" class="form-control" id="username" name="txt_user_name"
                                  placeholder="Username" required />
                          </div>
                          <div class="col-md-6 mb-3">
                              <label htmlFor="city">City</label>
                              <input type="text" class="form-control" id="city" name="txt_city" placeholder="City"
                                  required />
                          </div>
                      </div>
                      <div class="form-row text-white">
                          <div class="col-md-4 mb-3">
                              <label htmlFor="state">State</label>
                              <input type="text" class="form-control" id="state" name="txt_state" placeholder="State"
                                  required />
                          </div>
                          <div class="col-md-4 mb-3">
                              <label htmlFor="zip">Zip</label>
                              <input type="text" class="form-control" id="zip" name="txt_zip" placeholder="Zip"
                                  required />
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="termsCheckbox" required />
                              <label class="form-check-label" htmlFor="termsCheckbox">
                                  Agree to terms and conditions
                              </label>
                          </div>
                      </div>
                      <div class="row100">
                          <div class="inputBox">
                              <input type="submit" name="btnSave" value="Send">
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>