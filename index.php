

<!DOCTYPE html>
<html>
<head>
    <title>KYC</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="extra/bootstrap/css/bootstrap.min.css">
</head>
<body>

    <div class="row">
        
        <div class='col-md-4 m-auto'>
            
                       <div class= 'card mt-4'>
                        <div class="card-head p-5" id="step"> STEP 1</div>
                       </div>
                
                
                
                    <form class="form" method="POST" enctype="multipart/form-data" id="create_form">
                        <div id="phase1">                       
                            <div class= 'card mt-4'>

                        <div class= 'card-body'>

                             <div class='form-group'>
                        <label>Surname</label>
                        <input type="surname" name="surname" class="form-control">
                        </div>

                        <div class='form-group'>
                        <label>First name</label>
                        <input type="firstname" name="firstname" class="form-control">
                        </div>

                        <div class='form-group'>
                        <label>Last Name</label>
                        <input type="lastname" name="lastname" class="form-control">
                        </div>

                        <div class='form-group'>
                        <label>Username</label>
                        <input type="username" name="username" class="form-control">
                        </div>


                        
                        <div class='form-group'>
                        <label>Email</label>
                        <input type="email" name="email" class="form-control">
                        </div>

                        <div class='form-group'>
                        <label>Password</label>
                        <input type="password" name="password" class="form-control">
                        </div>
                    
                
                        </div>
                       </div>

                            <button class="btn btn-primary mt-2" type="button" id="btn1">Next</button>

                       </div>


                                    






                        <div class=" col-md-12 mt-4" id="phase2">
                            <div class="card">
                            <p>Upload your certificate 1</p>

                            <label>BIRTH CERTIFICATE</label>
                            <input type="file" name="photo1" id="input1" onmouseout ="checkDisabled(btn2);">
                            
                        </div>
                            <div>
                            
                            <button class="btn btn-primary mt-2" type="button" onclick="back1(); " id="prev1">Previous</button>
                            <button class="btn btn-primary mt-2" type="button" onclick="btn_birth();" id="btn2">Next</button>
                            </div>
                    </div>





                        <div class=" col-md-12 mt-4" id ="phase3">
                            <div class="card">
                            <p>Upload your certificate 2</p>

                            <label>NECO CERTIFICATE</label>
                            <input type="file" name="photo2" onmouseout="checkBtn3();"  id="input2">
                            
                        </div>
                        <div>
                        <button class="btn btn-info mt-2" type="button" onclick="back2();" id="prev2">Previous</button>
                        <button class="btn btn-primary mt-2" type="button" id="btn3" >Next</button>
                        </div> 
                    </div>






                        <div class=" col-md-12 mt-4" id="phase4">
                            <div class="card">
                            <p>Upload your certificate 3</p>

                            <label>WAEC CERTIFICATE</label>
                            <input type="file" name="photo3" onmouseout="finalPage();" id="input3">
                            
                        </div>
                        <div>
                            <button class="btn btn-primary mt-2" type="button" onclick="back3();" id="prev3">previous</button>
                            </div>
                            <button class="btn btn-primary mt-2" name="submit_data" id="btn4">Submit</button>
                            
                    </div>
                        
                        
                    </form>  

                </div>
                 
                    
                </div>
                

            
            
        



    <script type="text/javascript" src="extra/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="extra/jquery/jquery.min.js"></script>

    <script type="text/javascript">

        let btn1 = document.querySelector('#btn1');
        btn1.addEventListener('click', function(){


            document.querySelector('#phase2').style.display = 'block';

            document.querySelector('#step').innerHTML = 'STEP 2';

            document.querySelector('#phase1').style.display = 'none';
            document.querySelector('#phase3').style.display = 'none';

            document.querySelector('#phase4').style.display = 'none';
           document.querySelector('#prev1').style.display = 'flex';

           

           let btn2 = document.querySelector("#btn2").disabled = true;

           let input1 = document.querySelector('#input1', );
                



        });


        //functions that check the input length of form field


        function checkDisabled(btn2){

          let input1 =  document.querySelector("#input1");
          if (input1.value.length > 0) {
                btn2.disabled = false;
          }

        }



        function checkBtn3(){
            let input2 =  document.querySelector("#input2");
          if (input2.value.length > 0) {
                btn3.disabled = false;
          }

        }







        function finalPage(){
            let input3 =  document.querySelector("#input3");
          if (input3.value.length > 0) {
                btn4.disabled = false;


            let lastbtn = document.querySelector('#btn4').

            lastbtn.setAttribute("onclick", "submitForm()");
          }


        }




            let stepBg1 = document.querySelector('#step');
            stepBg1.style.backgroundColor = 'pink';

        function back1(){

            document.querySelector('#phase2').style.display = 'none';
            document.querySelector('#phase1').style.display = 'block';

            document.querySelector('#step').innerHTML = 'STEP 1';

            let prevBg1 = document.querySelector('#step');
            prevBg1.style.backgroundColor = 'pink';
        }





        function btn_birth(){
            //alert('yes');
            document.querySelector('#phase2').style.display = 'none';
            document.querySelector('#phase3').style.display = 'block';
            document.querySelector('#prev2').style.display = 'block';

            document.querySelector('#step').innerHTML = 'STEP 3';

            let stepBg2 = document.querySelector('#step');
            stepBg2.style.backgroundColor = 'blue';

            //Disable the next button
            let btn3 = document.querySelector("#btn3").disabled = true;


        };


        let btn3 = document.querySelector('#btn3');
        btn3.addEventListener('click', function(){

            document.querySelector('#phase3').style.display = 'none';
            document.querySelector('#phase4').style.display = 'block';

             document.querySelector('#prev3').style.display = 'block';

             document.querySelector('#step').innerHTML = 'STEP 4';
             let step4 = document.querySelector('#step');
             step4.style.color = 'white';


            let stepBg3 = document.querySelector('#step');
            stepBg3.style.backgroundColor = 'black';

            
                //submit your form here
            let lastbtn = document.querySelector('#btn4').disabled = true;

            //lastbtn.setAttribute("onclick", "submitForm()");


        });







        function back2(){

            document.querySelector('#phase3').style.display = 'none';
            document.querySelector('#phase2').style.display = 'block';

            document.querySelector('#btn2').style.display = 'block';
            document.querySelector('#step').innerHTML = 'STEP 2';


            let prevBg1 = document.querySelector('#step');
            prevBg1.style.backgroundColor = 'pink';
        }








        function back3(){

             document.querySelector('#phase4').style.display = 'none';
            document.querySelector('#phase3').style.display = 'block';

            document.querySelector('#btn3').style.display = 'block';
            document.querySelector('#step').innerHTML = 'STEP 3';


            let prevBg1 = document.querySelector('#step');
            prevBg1.style.backgroundColor = 'blue';
        
        }







            function submitForm(){

                $.post({


                    url : "loaders/create.php",
                    data : $('#create_form').serialize(),
                    success : function(feedback){

                            feedback = JSON.parse(feedback);

                    }
                })
            }
        


    </script>
</body>
</html>