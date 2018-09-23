<html>

    <head>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="materialize.css">

        <script>
            function redirect() {
                url = "index.html";
                $( location ).attr("href", url);
            }
        </script>
        <style>
            html { 
                background: url(res/background.jpg) no-repeat center center fixed; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }

            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                position: relative;

            }

            main {
                flex: 1 0 auto;
                margin: 0;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%); 
                width: 100%;


            }

            white-text {
                color: white;
            }

            brand-purple {
                background-color: #512da8;
            }



            .input-field input[type=date]:focus + label,
            .input-field input[type=text]:focus + label,
            .input-field input[type=email]:focus + label,
            .input-field input[type=password]:focus + label {
                color: #512da8;
            }

            .input-field input[type=date]:focus,
            .input-field input[type=text]:focus,
            .input-field input[type=email]:focus,
            .input-field input[type=password]:focus {
                border-bottom: 2px solid #512da8;
                border-bottom: 2px solid #512da8;
                box-shadow: none;
            }

            #logo {
                animation: bounceIn 0.6s;
                transform: rotate(0deg) scale(1) translateZ(0);
                transition: all 0.4s cubic-bezier(.8,1.8,.75,.75);
                cursor: pointer;
            }

            #logo:hover {
                transform: scale(1.1);
            }

            @keyframes bounceIn {
                0% {
                    opacity: 1;
                    transform: scale(.3);
                } 

                50% {
                    opacity: 1;
                    transform: scale(1.05);
                } 

                70% {
                    opacity: 1;
                    transform: scale(.9);
                }

                100% {
                    opacity: 1;
                    transform: scale(1);
                }
            }


        </style>
    </head>

    <body>
        <div class="section"></div>
        <main>
            <center>
                <img class="responsive-img" id="logo" src="res/logo.png" />

                <div class="section"></div>

                <h5 class="white-text">Sign in</h5>
                <div class="section"></div>

                <div class="container">
                    <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                        <form class="col s12" method="post">
                            <div class='row'>
                                <div class='col s12'>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='email' name='email' id='email' />
                                    <label for='email'>Enter your email</label>
                                </div>
                            </div>

                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input class='validate' type='password' name='password' id='password' />
                                    <label for='password'>Enter your password</label>
                                </div>
                                <label style='float: right;'>
                                    <a class='pink-text' href='#!'><b>Forgot Password?</b></a>
                                </label>
                            </div>

                            <br />
                            <center>
                                <div class='row'>
                                    <button type="button" name='btn_login' class='col s12 btn btn-large waves-effect indigo' onclick="redirect()">Login</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
                <a href="#!">Create account</a>
            </center>
        </main>

        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
    </body>

</html>