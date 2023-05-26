<div id="form-block">

<div>
    <a href="index.php?page=users&subpage=users" id="cancel"></a>
</div>

<?php
 if($user->get_user_access($user_id) != "Manager" && $id != $user_id){
    header("location: index.php?page=users");
 }
?>
    <h3>Provide the Required Information</h3>

    <form name="Userpage" method="POST" action="processes/process.user.php?action=new">
      
        <div id="form-block-left">
            <label for="fname">First Name</label>
            <input type="text" id="fname" class="input" name="firstname" placeholder="Your name.." required>

            <label for="lname">Last Name</label>
            <input type="text" id="lname" class="input" name="lastname" placeholder="Your last name.." required>

            <label for="access">Access Level</label>
            <select id="access" name="access" required>
                <option value="staff">Staff</option>
                <option value="supervisor">Supervisor</option>
                <option value="Manager">Manager</option>
            </select>
        </div>

        <div id="form-block-right">
            <label for="email">Email</label>
            <input type="email" id="email" class="input" name="email" placeholder="Your email.." required>

            <label for="password">Password</label>
            <input type="password" id="password" class="input" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" placeholder="Enter password.." required>

            <div id="message">
                <p>Password must contain:</p>
                <p id="letter" class="invalid">A<b> letter </b></p>
                <p id="capital" class="invalid">A<b> capital letter</b></p>
                <p id="number" class="invalid">A<b> number</b></p>
                <p id="length" class="invalid">A<b> minimum of 8 characters</b></p>
            </div>

            <script>
                var myInput = document.getElementById("password");
                var letter = document.getElementById("letter");
                var capital = document.getElementById("capital");
                var number = document.getElementById("number");
                var length = document.getElementById("length");

                // When the user clicks on the password field, show the message box
                myInput.onfocus = function() {
                    document.getElementById("message").style.display = "block";
                }

              // When the user clicks outside of the password field, hide the message box
              myInput.onblur = function() {
                document.getElementById("message").style.display = "none";
              }

              // When the user starts to type something inside the password field
              myInput.onkeyup = function() {
                // Validate lowercase letters
                var lowerCaseLetters = /[a-z]/g;
                if(myInput.value.match(lowerCaseLetters)) {
                  letter.classList.remove("invalid");
                  letter.classList.add("valid");
                } else {
                  letter.classList.remove("valid");
                  letter.classList.add("invalid");
              }

                // Validate capital letters
                var upperCaseLetters = /[A-Z]/g;
                if(myInput.value.match(upperCaseLetters)) {
                  capital.classList.remove("invalid");
                  capital.classList.add("valid");
                } else {
                  capital.classList.remove("valid");
                  capital.classList.add("invalid");
                }

                // Validate numbers
                var numbers = /[0-9]/g;
                if(myInput.value.match(numbers)) {
                  number.classList.remove("invalid");
                  number.classList.add("valid");
                } else {
                  number.classList.remove("valid");
                  number.classList.add("invalid");
                }

                // Validate length
                if(myInput.value.length >= 8) {
                  length.classList.remove("invalid");
                  length.classList.add("valid");
                } else {
                  length.classList.remove("valid");
                  length.classList.add("invalid");
                }
              }
              // Disable form submission for non-managers
                var accessLevel = document.getElementById("access");
                accessLevel.addEventListener("change", function() {
                    var selectedValue = accessLevel.options[accessLevel.selectedIndex].value;
                    if (selectedValue !== "Manager") {
                        var form = document.forms["Userpage"];
                        form.onsubmit = function() {
                            alert("Only the manager can access this form.");
                            return false;
                        };
                    } else {
                        document.forms["Userpage"].onsubmit = null;
                    }
                });
            </script>


        </div>

        <div id="button-block">
        <input type="submit" value="Save">
        </div>
  </form>
</div>