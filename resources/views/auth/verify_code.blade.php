<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login14.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jul 2021 15:58:30 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NairacoinXchange</title>
    <link rel="shortcut icon" type="image/png" href="log/images/Nairacoinr.png">
    <link rel="stylesheet" type="text/css" href="log/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="log/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="log/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="log/css/iofrm-theme14.css">
</head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="/">
                                <div >
                                    <img  src="log/images/Nairacoinr.png" style="width: 80px; height: 95px;">
                                </div>
                            </a>
                        </div>
                        <h3>Activate Account</h3>
                        <p><span style="color: greenyellow">Enter the verification code in your email</span></p>
                        <form method="POST" action="{{route('verify_user')}}">
                            @csrf
                            <input class="form-control" type="text" name="code" placeholder="E-mail Verification Code">
                            <div class="form-button">
                                <input type="submit" value="Activate" class="ibtn text-center">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="log/js/jquery.min.js"></script>
<script src="log/js/popper.min.js"></script>
<script src="log/js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login14.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Jul 2021 15:58:31 GMT -->
</html>