<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Verify Your Mail</title>
  <style>
  body {
  background: #0d5549;
  position: relative;
    text-align: center;
    font-family: "Cormorant Garamond", serif;
  }
  .frame {
    width: 90%;
    margin: 40px auto;
    text-align: center;
  }
  button {
    margin: 200px;
  }
  .custom-btn {
    width: 130px;
    height: 40px;
    color: #fff;
    border-radius: 5px;
    padding: 10px 25px;
    font-family: 'Lato', sans-serif;
    font-weight: 500;
    background: transparent;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    display: inline-block;
     box-shadow:inset 2px 2px 2px 0px rgba(255,255,255,.5),
     7px 7px 20px 0px rgba(0,0,0,.1),
     4px 4px 5px 0px rgba(0,0,0,.1);
    outline: none;
  }

  .btn-7 {
  background: linear-gradient(0deg, rgba(255,151,0,1) 0%, rgba(114, 243, 221,1) 100%);
    line-height: 42px;
    padding: 0;
    border: none;
  }
  .btn-7 span {
    position: relative;
    display: block;
    width: 100%;
    height: 100%;
  }
  .btn-7:before,
  .btn-7:after {
    position: absolute;
    content: "";
    right: 0;
    bottom: 0;
    background: rgba(251,75,2,1);
    box-shadow:
     -7px -7px 20px 0px rgba(255,255,255,.9),
     -4px -4px 5px 0px rgba(255,255,255,.9),
     7px 7px 20px 0px rgba(0,0,0,.2),
     4px 4px 5px 0px rgba(0,0,0,.3);
    transition: all 0.3s ease;
  }
  .btn-7:before{
     height: 0%;
     width: 2px;
  }
  .btn-7:after {
    width: 0%;
    height: 2px;
  }
  .btn-7:hover{
    color: rgba(251,75,2,1);
    background: transparent;
  }
  .btn-7:hover:before {
    height: 100%;
  }
  .btn-7:hover:after {
    width: 100%;
  }
  .btn-7 span:before,
  .btn-7 span:after {
    position: absolute;
    content: "";
    left: 0;
    top: 0;
    background: rgba(251,75,2,1);
    box-shadow:
     -7px -7px 20px 0px rgba(255,255,255,.9),
     -4px -4px 5px 0px rgba(255,255,255,.9),
     7px 7px 20px 0px rgba(0,0,0,.2),
     4px 4px 5px 0px rgba(0,0,0,.3);
    transition: all 0.3s ease;
  }
  .btn-7 span:before {
    width: 2px;
    height: 0%;
  }
  .btn-7 span:after {
    height: 2px;
    width: 0%;
  }
  .btn-7 span:hover:before {
    height: 100%;
  }
  .btn-7 span:hover:after {
    width: 100%;
  }


  </style>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
  <button class="custom-btn btn-7" onclick="Submit();"><span>Click to Verify</span></button>
</body>
</html>


<?php
$hash = $_GET['hash'];
?>
   <script type="text/javascript">
        var hash = "<?php echo"$hash"?>";
        function loadJSON(path, success, error) {
          var xhr = new XMLHttpRequest();
          xhr.onreadystatechange = function () {
            if (xhr.readyState === 4) {
              if (xhr.status === 200) {
                success(JSON.parse(xhr.responseText));
              }
              else {
                error(xhr);
              }
            }
          };
          xhr.open('GET', path, true);
          xhr.send();
        }
          function myData(Data)
          {
            //console.log();
            window.swal({
        			title: Data['status'],
              text: 'You can close this Window.'
              icon: 'info',
        			//showConfirmButton: false,
        			allowOutsideClick: false
        		});
          }

        	function Submit(){
            const toload = ('https://backend.s4tyendra.eu.org/verify/?hash='+hash);
            console.log(toload);
            window.swal({
        			title: "Hi!",
        			text: "Please wait While Verifying your Mail!",
              buttons:false,
              //icon: "success",
        			//showConfirmButton: false,
        			allowOutsideClick: false
        		});
            loadJSON(toload,myData,'jsonp');
        	 	}

        </script>

