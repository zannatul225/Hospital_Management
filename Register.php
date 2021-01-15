<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style>
      .bck{
        height: 100vh;
        background-image: url("images/bg.jpg");
        background-size: cover;
        background-repeat: repeat;
      }
      @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	list-style: none;
	font-family: 'Montserrat', sans-serif;
}


.wrapper1{
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

.registration_form{
	/*background: #545871;*/
  background: #000103;
	padding: 25px;
	border-radius: 10px;
	width: 40%;
}

.registration_form .title{
	text-align: center;
	font-size: 20px;
	text-transform: uppercase;
	color: #dff5f3;
	letter-spacing: 5px;
	font-weight: 700;
}

.form_wrap{
	margin-top: 35px;
	justify-content: center;
	align-items: center;
}

.form_wrap .input_wrap{
	margin-bottom: 15px;
}

.form_wrap .input_wrap:last-child{
	margin-bottom: 0;
}

.form_wrap .input_wrap label{
	display: block;
	margin-bottom: 3px;
	color: #ffffff;
}

.form_wrap .input_grp{
	display: flex;
	justify-content: space-between;
}

.form_wrap .input_grp  input[type="text"]{
	width: 165px;
}

.form_wrap  input[type="text"]{
	width: 100%;
	border-radius: 3px;
	border: 1px solid #9597a6;
	padding: 10px;
	outline: none;
  background-color: #c4deff;

}

.form_wrap  input[type="text"]:focus{
  background-color: #85baff;
}
.form_wrap  input[type="text"]:hover{
  background-color: #85baff;
}

.form_wrap ul{
	background: #fff;
	padding: 8px 10px;
	border-radius: 3px;
	display: flex;
	justify-content: center;
}

.form_wrap ul li:first-child{
	margin-right: 15px;
}

.form_wrap ul .radio_wrap{
	position: relative;
	margin-bottom: 0;
}



.form_wrap .submit_btn{
	width: 100%;
	background: #33ff55;
	padding: 10px;
	border: 0;
	border-radius: 3px;
	text-transform: uppercase;
	letter-spacing: 3px;
	cursor: pointer;
  font-weight: bold;
}

.form_wrap .submit_btn:hover{

  background: #0be630;
}
    </style>
  </head>
  <script type="text/javascript">
  function validate() {
    if( document.myForm.p_name.value == "" ) {
          alert( "Please provide valid info!" );
          document.myForm.p_name.focus() ;
         return false;
          }
    if( document.myForm.phn.value == "" ) {
          alert( "Please provide valid info!" );
          document.myForm.phn.focus() ;
         return false;
      }
      if( document.myForm.add.value == "" ) {
            alert( "Please provide valid info!" );
            document.myForm.add.focus() ;
           return false;
            }
      if( document.myForm.disease.value == "" ) {
            alert( "Please provide valid info!");
            document.myForm.disease.focus() ;
           return false;
        }

   return(true);
}
</script>
  <body>
    <div class="bck">

      <div class="background">
        <div class="wrapper1">
      <div class="registration_form">
        <div class="title">
          Submit a Complaint :
        </div>

        <form name = "myForm" action="action.php" method="post" onsubmit = "return(validate());">
          <div class="form_wrap">
              <div class="input_wrap">
                <label id="std_id">Name</label>
                <input type="text" name="p_name" id="std_id" placeholder="Enter your name">
              </div>
              <div class="input_wrap">
                <label id="msg">Phone No</label>
                <input type="text" name="phn" id="msg" placeholder="Enter your phone no">
              </div>
              <div class="input_wrap">
                <label id="std_id">Adress</label>
                <input type="text" name="add" id="std_id" placeholder="Enter your address">
              </div>
              <div class="input_wrap">
                <label id="msg">Disease</label>
                <input type="text" name="disease" id="msg" placeholder="Enter your disease">
              </div>

            <div class="input_wrap">
              <input type="submit" value="Send Message" class="submit_btn">
            </div>
          </div>
        </form>
       </div>
      </div>
      </div>
    </div>

</body>
</html>
