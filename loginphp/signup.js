

var firstname = document.getElementById("firstname");
var middlename = document.getElementById("middlename");
var lastname = document.getElementById("lastname");
var familyname = document.getElementById("familyname");
    var email = document.getElementById("signup_email");
    var password = document.getElementById("signup_password");
     var confirmp = document.getElementById("signup_password2");
     var logged_in = documnet.getElementById("welcome_name");


   form.addEventListener("submit", () => {
    event.preventDefault();

     if (firstname.value == "") {
        document.getElementById("firstname_msg").innerHTML =
          "The name field is required.";
      }
     
     if (middlename.value == "") {
        document.getElementById("middlename_msg").innerHTML =
          "The name field is required.";
      }
     
     if (lastname.value == "") {
        document.getElementById("lastname_msg").innerHTML =
          "The name field is required.";
      }
     
     if (familyname.value == "") {
        document.getElementById("familyname_msg").innerHTML =
          "The name field is required.";
      }
     
     
        if (email.value == "") {
        document.getElementById("email_msg").innerHTML =
          "The email field is required.";
      }

      if (
        /^[A-ZA-z0-9._-]+@(hotmail|gmail|yahoo).com$/.test(email.value) ==
        false &&
        email.value !== ""
      ) {
        document.getElementById("emailError").innerHTML =
          "The email must be a valid email address.";

        window.localStorage.setItem("email", email.value);
      }

        if (password.value == "") {
        document.getElementById("password_msg").innerHTML =
          "The password field is required.";
      }

       if (confirmp.value !== password.value) {
          document.getElementById("password_msg").innerHTML =
            "Passwords does not match.";
       }

     







      if ( familyname !== "" && lastname !== "" && middlename !== "" &&  firstname !== "" && email.value !== "" && password.value !== "") {
        var data = window.localStorage.getItem("data");

        if (data) {
          //  i used Josn.parse to convet string to array to make push with new data from new user

          data = JSON.parse(data);

          //  i used array for not overwrriting old data

          data.push([firstname.value,email.value, password.value]);
        } else {
          var data = [];
          data.push([firstname.value,email.value, password.value]);
        }

        //  i use JSON.stringify to convert array to string
        window.localStorage.setItem("data", JSON.stringify(data));
        window.open("login.html") ;

      }
    })
