    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #ffaf9b;
        }

        .container {
            width: 480px;
            margin-left: auto;
            margin-top: 60px;
            margin-right: auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .box {
            background-color: rgb(255, 255, 255);
            width: 615px;
            height: 200px;
            border-radius: 20px;
            transition: all .3s;
            box-shadow: 4px 4px 20px rgba(1, 1, 1, .2);
            cursor: pointer;
            position: relative;
            margin-bottom: 40px;
        }

        .box:hover {
            transform: translateY(-10px);
        }

        .prof {
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: url('https://cdn-icons-png.flaticon.com/512/3135/3135715.png');
            background-size: cover;
            position: absolute;
            right: 20px;
            bottom: 10px;
        }

        .Username {
            font-family: "Ostrich Sans Rounded Medium";
            font-size: 1.5rem;
            position: absolute;
            right: 80px;
            bottom: 20px;
            letter-spacing: 2px;
            color: #686868;
        }

        .like i {
            color: rgb(138, 138, 138);
            font-size: 1.5rem;
            position: absolute;
            left: 20px;
            transition: all .3s;
            bottom: 20px;
        }

        .like:hover i {
            transform: scale(.9);
        }

        .bookmark i {
            transition: all .3s;
            color: rgb(138, 138, 138);
            font-size: 1.5rem;
            position: absolute;
            left: 60px;
            bottom: 20px;
        }

        .bookmark:hover i {
            transform: scale(.9);
        }

        .img {
            background: url("https://cdn-icons-png.flaticon.com/512/9327/9327582.png");
            background-size: cover;
            width: 150px;
            height: 150px;
            position: absolute;
            left: 20px;
        }

        .name {
            font-family: "Ostrich Sans Rounded Medium";
            font-size: 1.5rem;
            position: absolute;
            left: 180px;
            font-weight: bold;
            top: 20px;
            letter-spacing: 2px;
            color: #686868;
        }

        .box p {
            font-family: "Ostrich Sans Rounded Medium";
            font-size: 1rem;
            position: absolute;
            left: 180px;
            font-weight: bold;
            top: 50px;
            letter-spacing: 2px;
            color: #686868;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="container">
        <div class="box">
            <div class="prof"></div>
            <h1 class="Username">Ali_Z</h1>
            <div onclick="like()" class="like"><i class="fa fa-heart"></i></div>
            <div class="bookmark"><i class="fa fa-bookmark"></i></div>
            <div class="img"></div>
            <div class="name">Post</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi </p>
        </div>
        <div class="box">
            <div class="prof"></div>
            <h1 class="Username">Ali_Z</h1>
            <div onclick="like()" class="like"><i class="fa fa-heart"></i></div>
            <div class="bookmark"><i class="fa fa-bookmark"></i></div>
            <div class="img"></div>
            <div class="name">Post</div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Egestas purus viverra accumsan in nisl nisi </p>
        </div>
    </div>