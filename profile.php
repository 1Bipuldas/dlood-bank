 <?php include "header.php"; ?>

  <!-- Container -->
  
         <div class="row">
           <div class="col">
              <div class="contner_box" style="width: 100%; height: 650px; margin-top: 20px;">

          <h3 style="font-weight: bold;">My profile</h3>
          <div class="box1" style="width: 30%; float: left;">
            

            <div class="card" style="width: 22rem;">
               
                <img class="card-img-top" src="assets/img/img2.png">
                <div class="card-body">
                  <h5 class="card-title" style="text-align: center;">MD. Sobuj (A+)</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><h6>From :</h6>Bangladesh</li>
                  <li class="list-group-item"><h6>Member since :</h6> 06/12/20</li>
                  <li class="list-group-item"><h6>Phone NO :</h6> 01792223669</li>
                </ul>
                <div class="card-body">
                  <a href="#" class="contact">contact link</a>
                </div>
              </div>
          </div>




          <div class="box2" style="width: 70%; height: 600px; float: right;">
            <div class="input-group mt-4"> 
                <h5>  Full Name : </h5>
                <input type="text" aria-label="First name" placeholder="Fast Name" class="form-control ms-2">
                <input type="text" aria-label="Last name" placeholder="Last Name" class="form-control">
            </div>
            <hr>
            
            <div class="input-group mt-4"> 
                <h5>Gender :</h5>
                      <input type="radio" name="male" class=" mb-2 ms-4 "> Male
                     <input type="radio" name="male" class=" mb-2 ms-4"> Female
                     <input type="radio" name="male" class=" mb-2 ms-4"> Other

            <h4 class="ms-4">Gender : </h4>
            <select class="col-6 ms-2">
                <option value="">Select your blood</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
            </select>
            </div>
            <hr>

             <div class="input-group mt-4"> 

                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email</label>
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputPassword4">Password</label>
                  <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                </div>
            </div>
            <hr>

            <div class="input-group mt-4"> 
                <h5>Devison :</h5>
               <select class="ms-2 col-4">
                  <option value="">Select your divison</option>
                  <option value="Barisal">Barisal</option>
                  <option value="Chittagong">Chittagong</option>
                  <option value="Dhaka">Dhaka</option>
                  <option value="Khulna">Khulna</option>
                  <option value="Mymensingh">Mymensingh</option>
                  <option value="Rajshahi">Rajshahi</option>
                  <option value="Rangpur">Rangpur</option>
                  <option value="Sylhet">Sylhet</option>
                </select>
                <h5 class="ms-4">Zilla :</h5>
                <input type="text" name="uszila" placeholder="Enter Your Zilla" class="col-4 ms-2">
            </div>
            <hr>

            <div class="input-group mt-4"> 
                <h5>About Me : </h5>
                <div class="form-floating ms-2">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">Comments</label>
                  </div>               
            </div>

            <div style="margin-left: 350px; margin-top: 50px;">
              <button type="button" class="btn btn-success mt-4 col-6">SAVE PROFILE INFORMATION</button>
            </div>
            

        </div>
        </div>

           </div>
         </div>


<?php include "footer.php"; ?>