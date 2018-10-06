

    <main role="main" style="padding-top: 80px;">
    <div class="container">
        <form action="/welcome/contactRecv" method="POST" class="was-validated">
            <div class="form-group">
                <label for="email">Email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter a valid email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password (At least 10 characters)</label>
                <input name="password" type="password" class="form-control" id="password" placeholder="Please make sure your password is at least 10 characters" value="<?php echo isset($_POST["password"]) ? $_POST["password"] : ''; ?>" required>
            </div>
            <div class="form-group">
                <label for="selectExample">Select</label>
                <select class="form-control" id="selectExample" name="selection">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="radios" class="form-check-input" type="radio" name="radioExample" id="radioExample1" value="Cool" <?php echo ($_POST["radios"]=='Cool')?'checked':'' ?>>
                    <label class="form-check-label" for="radioExample1">
                        Cool radio
                    </label>
                </div>
                <div class="form-check">
                    <input name="radios" class="form-check-input" type="radio" name="radioExample" id="radioExample2" value="Awesome" <?php echo ($_POST["radios"]=='Awesome')?'checked':'' ?>>
                    <label class="form-check-label" for="radioExample2">
                        Awesome radio
                    </label>
                </div> 
            </div>
            <div class="form-group">
                <label  for="textareaExample">Textarea</label>
                <textarea name="textarea" class="form-control" id="textareaExample" rows="3" required><?php echo isset($_POST["textarea"]) ? $_POST["textarea"] : ''; ?></textarea>
                <div class="invalid-feedback">
                    Do not leave empty
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="checkbox1" class="form-check-input" type="checkbox" value="yes" id="checkExample1" <?php echo isset($_POST["checkbox1"]) ? 'checked' : ''; ?>
required>
                    <label class="form-check-label" for="checkExample1">
                        I agree to be contacted by Website
                    </label>
                    <div class="invalid-feedback">
                        You must agree one before submitting
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


  <!-- FOOTER -->
  <footer class="container">
    <p>&copy; 2018 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
  </footer>
</main>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous">
</script>
<script src="../../assets/js/bootstrap.min.js"></script>
<script src="../../assets/js/main.js"></script>
<script>
    $("#ajaxsubmit").click(function(){
        $.ajax({
            method: "POST", 
            url: '/welcome/ajax',
            data: {email: $("#loginemail").val(), password: $("#loginpassword").val()},
            success: function( response ) {
                console.log(response);
                if (response=="welcome") {
                    alert("Login successful");
                    window.location.href = "/";
                } else {
                    alert("Login unsuccessful, please try again");
                }
            }
        });
    });
</script>
</body>

