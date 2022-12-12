<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Aleo">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cairo">
    <title>HOME PAGE</title>
</head>

<body>
<div class="container">
    <header>
        <div class="navbar">
            <p class="title">Art Challenge</p>
            <a href="joinChallenge">Challenges</a>
            <a>Browse art</a>
            <a href="userCollection">Dashboard</a>
        </div>
        <div class="nav-btn"><a class="login-btn" href="login">Login</a>
            <a class="signup-btn" href="#popup-signup">Sign up</a>
        </div>
    </header>
    <main class="home-page">
        <div>
            <h1>Welcome to Art Challenge</h1>
            <h2>no matter if you are a professional or beginner,<br>
                joins us today and improve your art</h2>
            <form action="login">
                <button class="big-btn" type="submit">GET STARTED</button>
            </form>
        </div>
    </main>

    <div id="popup-login" class="overlay">
        <div class="popup">
            <h2>Login</h2>
            <a class="close" href="#">&times;</a>
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php
                    if (isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <h3>Email</h3>
                <input name="email" type="text">
                <h3>Password</h3>
                <input name="password" type="password">
                <button type="submit">LOGIN</button>
                <div class="row-a">
                    <p>Don't have an account? Sign up for&nbsp</p>
                    <a href="#popup-signup">ArtChallenge</a>
                </div>
            </form>
        </div>
    </div>
    <div id="popup-signup" class="overlay">
        <div class="popup">
            <h2>Sign up</h2>
            <a class="close" href="#">&times;</a>
            <form>
                <h3>Email</h3>
                <input name="email" type="text">
                <h3>Password</h3>
                <input name="password" type="password">
                <h3>Repeat password</h3>
                <input name="password-repeated" type="password">
                <button>SIGN UP</button>
                <div class="row-a">
                    <p>Already have an account?&nbsp</p>
                    <a href="#popup-login">Sign in</a>
                </div>
            </form>
        </div>
    </div>
</div>
</body>