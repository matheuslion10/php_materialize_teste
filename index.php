<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>

    <body>
    <html>

        <head>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
            <link rel="stylesheet" type="text/css" href="css/index_.css"/>
        </head>

        <body>
            <div class="section"></div>
            <main>
                <center>
                    <img class="responsive-img" style="width: 250px;" src="images/oi2.gif" />
                    <div class="section"></div>

                    <h5 class="indigo-text">Informe os dados para login</h5>
                    

                    <div class="container">
                        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                            <form class="col s12" method="post" action="main.php">
                                <div class='row'>
                                    <div class='col s12'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='email' name='email' id='email' />
                                        <label for='email'>Email...</label>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='password' name='password' id='password' />
                                        <label for='password'>Senha...</label>
                                    </div>
                                    <label style='float: right;'>
                                        <a class='green-text' href='#!'><b>Esqueceu sua senha?</b></a>
                                    </label>
                                </div>

                                <br />
                                <center>
                                    <div class='row'>
                                        <button href="main.php" type='submit' name='btn_login' class='col s12 btn btn-large waves-effect indigo'>Login</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                    <a class="green-text" href="#!">Criar conta</a>
                </center>

                <div class="section"></div>
                <div class="section"></div>
            </main>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
        </body>

    </html>


</body>
</html>
