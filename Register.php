<html>
    <head>
        <script type="text/javascript">
        function validate() {
          if( document.myForm.std_id.value == "" ) {
                alert( "Please provide student Id!" );
                document.getElementById("std_id").style.color = "yellow";
                document.myForm.std_id.focus() ;
               return false;
                }
          if (document.myForm.std_id.value !== "") {
                document.getElementById("std_id").style.color = "gray";
            }
          if( document.myForm.msg.value == "" ) {
                alert( "Please write a message!" );
                document.getElementById("msg").style.color = "yellow";
                document.myForm.msg.focus() ;
               return false;
            }
          if (document.myForm.msg.value !== "") {
                document.getElementById("msg").style.color = "gray";
            }

         return(true);
      }
        </script>
        <style>
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
            .bck{
              height: 100vh;
              background-image: url("../../img/forget.jpg");
              background-size: cover;
              background-repeat: repeat;
            }
        </style>
    </head>

  <body>
    <div class="bck">

      <div class="background">
        <div class="wrapper1">
      <div class="registration_form">
        <div class="title">
          New Register:
        </div>

        <form action="newregistered.php" method="post">
          <div class="form_wrap">
              <div class="input_wrap">
                <label id="std_id">Patient Name</label>
                <input type="text" name="std_id" id="std_id" placeholder="Enter Patient Name">
              </div>
              <div class="input_wrap">
                <label id="msg">Phone No</label>
                <input type="text" name="msg" id="msg" placeholder="Enter Your Phone No">
              </div>
              <div class="input_wrap">
                <label id="std_id">Adress</label>
                <input type="text" name="std_id" id="std_id" placeholder="Enter Address">
              </div>
              <div class="input_wrap">
                <label id="msg">Disease</label>
                <input type="text" name="msg" id="msg" placeholder="Enter your disease">
              </div>

            <div class="input_wrap">
              <input type="submit" value="Submit" class="submit_btn">
            </div>
          </div>
        </form>
       </div>
      </div>
      </div>
    </div>

</body>
</html>
