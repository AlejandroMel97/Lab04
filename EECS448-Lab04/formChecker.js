function validateForm()
{
     let passtest = true;
     if (passtest)
     {
          let val = document.forms["myForm"]["Kobe_Bryant"].value;
          let val1 = document.forms["myForm"]["Steph_Curry"].value;
          let val2 = document.forms["myForm"]["Lebron_James"].value;
          let val3 = document.forms["myForm"]["Paul_Pierce"].value;
          if (val == "" || val1 == "" || val2 == "" || val3 == "")
          {
                alert("Input Boxes cannot be left Blank");
                passtest = false;
                return false;
          }
          else if ((isNaN(val) || val < 0) || (isNaN(val1) || val1 < 0) || (isNaN(val2) || val2 < 0) || (isNaN(val3) || val3 < 0))
          {
                alert("Inputs for Quantities must be Greater than 0");
                passtest = false;
                return false;
          }
          let radio = document.getElementsByName("shipping");
          // let radio1 =document.getElementsByName("shipping2");
          // let radio2 = document.getElementsByName("shipping3");
          // let radio3 = document.getElementsByName("shipping4");
          let checkvalid = false;
          let i = 0;
          if (val > 0 || val1 > 0 || val2 > 0 || val3 >0)
          {
               while ( (!checkvalid && (i< radio.length)))
               {
                     if (radio[i].checked)
                     {
                       checkvalid = true;
                     }
                     i++;
               }
               if (!checkvalid)
               {
                   alert("An option for shipping must be selected before continuing");
                     checkvalid = false;
                     return false;
               }
          }
          // checkvalid = false;
          // if (val1 > 0)
          // {
          //   while ( (!checkvalid && (i< radio1.length)))
          //   {
          //     if (radio1[i].checked)
          //     {
          //       checkvalid = true;
          //     }
          //     i++;
          //   }
          //   if (!checkvalid)
          //   {
          //     alert("An option for shipping must be selected before continuing");
          //     checkvalid = false;
          //     return false;
          //   }
          // }
          // checkvalid = false;
          // if (val2 > 0)
          // {
          //   while ( (!checkvalid && (i< radio2.length)))
          //   {
          //     if (radio2[i].checked)
          //     {
          //       checkvalid = true;
          //     }
          //     i++;
          //   }
          //   if (!checkvalid)
          //   {
          //     alert("An option for shipping must be selected before continuing");
          //     checkvalid = false;
          //     return false;
          //   }
          // }
          // checkvalid = false;
          // if (val3>0)
          // {
          //   while ( (!checkvalid && (i< radio3.length)))
          //   {
          //     if (radio3[i].checked)
          //     {
          //       checkvalid = true;
          //     }
          //     i++;
          //   }
          //   if (!checkvalid)
          //   {
          //     alert("An option for shipping must be selected before continuing");
          //     checkvalid = false;
          //     return false;
          //   }
          // }


          let email = document.getElementById("emailAddress").value;
          if ((email.endsWith(".com") == false && email.endsWith(".edu") == false) || !email.includes("@"))
          {
              alert("You must enter a valid email address Ex: 'name@domain.com' and we only accept '.com' and '.edu' addresses");
              passtest = false;
              return false;
          }
          if (email.endsWith("@.com") || email.endsWith("@.edu"))
          {
          	  alert("Invalid email entered");
          	  return false;
          }
          if(!email.includes("@"))
          {
               alert("Email must include '@'");
          	return false;

          }
          let pass = document.getElementById("userPassword").value;
          if (pass == "")
          {
               alert("You must enter a password!");
               passtest = false;
               return false;
          }
     }
}
