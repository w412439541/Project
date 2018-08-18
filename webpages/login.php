<!DOCTYPE html>
<html style="height: 100%;">
    <head>
        <title>Login</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style>
            body {
                background-image: url('../images/background.jpg');
                background-position: center 0;
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;
            }
            .panel {
                opacity: 0.9;
            }
            .fade-enter-active, .fade-leave-active {
               transition: opacity .5s;
            }
            .fade-enter, .fade-leave-to {
                opacity: 0;
            }
        </style>
    </head>
    <body style="height: 100%;">
        <div class="container" style="height: 100%;" id="app">
            <div class="row" style="height: 100%;" >
                <transition appear name="fade">
                <div class="panel mx-auto my-auto col-sm-12 col-md-6 col-lg-6">
                    <div class="card bg-light">
                        <div class="card-header">
                            <span class="text-dark">账号登录</span>
                            <span class="float-right">
                                <a class="text-primary" href="">扫码登陆</a>
                            </span>
                        </div>
                        <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username" class="text-dark">用户名</label>
                                <input type="text" class="form-control" id="username" placeholder="User Name">
                                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">密码</label>
                                <input type="password" class="form-control" id="password" placeholder="Password">
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="check">
                                <label class="form-check-label text-dark" for="check">记住密码</label>
                            </div>
                        </form>
                        </div> 
                        <div class="card-footer">
                            <div style="text-align: center">
                                <button type="button" class="btn btn-outline-success mx-3">登陆</button>
                                <button type="button" class="btn btn-outline-dark mx-3">注册</button>
                            </div>
                        </div>
                    </div>
                </div>
                </transition>
            </div>
        </div>
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/popper.js"></script>
        <script src="../js/bootstrap.js"></script>
        <script src="../js/vue.js"></script>
        <script src="../js/index.js"></script>
    </body>
</html>