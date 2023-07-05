<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<style>
    /* style formulario */

@import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap');
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    font-family: 'Open Sans', sans-serif;
}
.container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #ecf0f1;
}
.content {
    background-color: #fff;
    border-radius: 15px;
    width: 960px;
    height: 55%;
    justify-content: space-between;
    align-items: center;
    position: relative;
   
}

.title {
    font-size: 28px;
    font-weight: bold;
    text-transform: capitalize;
}
.title-primary {
    color: #272829;
}
.title-second {
    color: #272829;
}
.description {
    font-size: 14px;
    font-weight: 300;
    line-height: 30px;
}
.description-primary {
    color: #272829;
}
.description-second {
    color: #7f8c8d;
}
.btn {
    border-radius: 15px;
    text-transform: uppercase;
    color: #e1e1e1;
    font-size: 10px;
    padding: 10px 50px;
    cursor: pointer;
    font-weight: bold;
    width: 150px;
    align-self: center;
    border: none;
    margin-top: 1rem;
}

.btn-second {
    background-color: #6F74F2;
    border: 1px solid #6F74F2;
    transition: background-color .5s;
}
.btn-second:hover {
    background-color: #fff;
    border: 1px solid #6F74F2;
    color: #6F74F2;
}
.first-content {
    display: flex;
}
.first-content .second-column {
    z-index: 11;
}
.first-column {
    text-align: center;
    width: 40%;
    z-index: 10;
    border-right: 1px solid #6f73f28a;
    
}
.second-column {
    width: 60%;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.first-column img{
    width: 300px;
    padding-bottom: 30px;
    
}
.form {
    display: flex;
    flex-direction: column;
    width: 55%;
}
.form input {
    height: 45px;
    width: 100%;
    border: none;
    background-color: #ecf0f1;
}

.label-input {
    background-color: #ecf0f1;
    display: flex;
    align-items: center;
    margin: 8px;
}
.icon-modify {
    color: #7f8c8d;
    padding: 0 5px;
}

/* second content*/

.second-content {
    position: absolute;
    display: flex;
}
.second-content .first-column {
    order: 2;
    z-index: -1;
}
.second-content .second-column {
    order: 1;
    z-index: -1;
}
.password {
    color: #34495e;
    font-size: 14px;
    margin: 15px 0;
    text-align: center;
}
.password::first-letter {
    text-transform: capitalize;
}



.sign-in-js .first-content .first-column {
    z-index: -1;
}

.sign-in-js .second-content .second-column {
    z-index: 11;
}
.sign-in-js .second-content .first-column {
    z-index: 13;
}

.sign-in-js .content::before {
    left: 60%;
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
    border-top-right-radius: 15px;
    border-bottom-right-radius: 15px;
    animation: slidein 1.3s; /*MODIFIQUEI DE 3s PARA 1.3s*/

    z-index: 12;
}

.sign-up-js .content::before {
    animation: slideout 1.3s; /*MODIFIQUEI DE 3s PARA 1.3s*/

    z-index: 12;
}

.sign-up-js .second-content .first-column,
.sign-up-js .second-content .second-column {
    z-index: -1;
}

.sign-up-js .first-content .second-column {
    z-index: 11;
}

.sign-up-js .first-content .first-column {
    z-index: 13;    
}






/*VERSÃO MOBILE*/
@media screen and (max-width: 1040px) {
    .content {
        width: 100%;
        height: 100%;
    }

    .content::before {
        width: 100%;
        height: 40%;
        top: 0;
        border-radius: 0;
    }
    .first-content, .second-content {
        flex-direction: column;
        justify-content: space-around;
    }

    .first-column, .second-column {
        width: 100%;
    }
    
    .sign-in-js .content::before {
        top: 60%;
        left: 0;
        border-radius: 0;

    }

    .form {
        width: 90%;
    }
    
}

@media screen and (max-width: 740px) {
    .form {
        width: 50%;
    }
}

@media screen and (max-width: 425px) {
    .form {
        width: 100%;
    }
}
    </style>
<body>

    <div class="container">
        <div class="content first-content">
            <div class="first-column">
                <a href="/index.php"><img src="logo-site.png" alt=""></a>
                <p class="description description-primary">Para ter acesso de administrador, <br> por favor faça o login com a sua conta !</p>
            </div>    
            <div class="second-column">
                <h2 class="title title-second">Login</h2>
                <p class="description description-second">use seu email de cadastro</p>
                <form class="form" action="validar.php" method="POST">
                    
                    <label class="label-input" for="">
                        <i class="far fa-envelope icon-modify"></i>
                        <input type="email" placeholder="Email" name="email">
                    </label>
                    
                    <label class="label-input" for="">
                        <i class="fas fa-lock icon-modify"></i>
                        <input type="password" placeholder="Password"  name="senha">
                    </label>
                    
                    <button class="btn btn-second">Entrar</button>        
                </form>
            </div><!-- second column -->
        </div><!-- first content -->
        
    </div>
    
</body>
</html>