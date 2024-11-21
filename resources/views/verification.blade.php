<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js">
</head>
<body>

<div class="container">
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-20 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-20">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Verification Page</p>
                      <p id="message_error" style="color:red;"></p>
                      <p id="message_success" style="color:green;"></p>
                      <form class="mx-5 mx-md-8"  id="verificationForm" method="POST">
                        @csrf
      
                        
                        <input type="hidden" name="email" value="{{ $email }}">
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="form3Example3c" placeholder="Your OTP" name="otp" class="form-control" />
                            @if ($errors->has('otp'))
                                <span class="text-danger">{{ $errors->first('otp')}}</span>
                            @endif
                            {{-- <label class="form-label" for="form3Example3c">Your Email</label> --}}
                          </div>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                            <input type="submit" class="btn btn-primary btn-lg" value="Verify">
                        </div>
      
                      </form>

                      <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                        <p class="time"></p>
                      </div>  

                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">

                             <button class="btn btn-primary btn-lg" id="resendOtpVerification">Resend Verification OTP</button>
                        </div>     

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

                        <script>

                            $(document).ready(function(){
                                $('#verificationForm').submit(function(e){
                                    e.preventDefault();
                        
                                    var formData = $(this).serialize();
                        
                                    $.ajax({
                                        url:"{{ route('verifiedOtp') }}",
                                        type:"POST",
                                        data: formData,
                                        success:function(res){
                                            if(res.success){
                                                // alert(res.msg);
                                                window.open("/login","_self");
                                            }
                                            else{
                                                $('#message_error').text(res.msg);
                                                setTimeout(() => {
                                                    $('#message_error').text('');
                                                }, 3000);
                                            }
                                        }
                                    });
                        
                                });
                        
                                $('#resendOtpVerification').click(function(){
                                    $(this).text('Wait...');
                                    var userMail = @json($email);
                        
                                    $.ajax({
                                        url:"{{ route('resendOtp') }}",
                                        type:"GET",
                                        data: {email:userMail },
                                        success:function(res){
                                            $('#resendOtpVerification').text('Resend Verification OTP');
                                            if(res.success){
                                                timer();
                                                $('#message_success').text(res.msg);
                                                setTimeout(() => {
                                                    $('#message_success').text('');
                                                }, 3000);
                                            }
                                            else{
                                                $('#message_error').text(res.msg);
                                                setTimeout(() => {
                                                    $('#message_error').text('');
                                                }, 3000);
                                            }
                                        }
                                    });
                        
                                });
                            });
                        
                            function timer()
                            {
                                var seconds = 30;
                                var minutes = 1;
                        
                                var timer = setInterval(() => {
                        
                                    if(minutes < 0){
                                        $('.time').text('');
                                        clearInterval(timer);
                                    }
                                    else{
                                        let tempMinutes = minutes.toString().length > 1? minutes:'0'+minutes;
                                        let tempSeconds = seconds.toString().length > 1? seconds:'0'+seconds;
                        
                                        $('.time').text(tempMinutes+':'+tempSeconds);
                                    }
                        
                                    if(seconds <= 0){
                                        minutes--;
                                        seconds = 59;
                                    }
                        
                                    seconds--;
                        
                                }, 1000);
                            }
                        
                            timer();
                        
                        </script>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp"
                        class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
</div>

</body>
</html>
