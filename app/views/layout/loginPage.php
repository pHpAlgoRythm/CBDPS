<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "../../../public/css/style.css">
    <title>BrgyDocs</title>
</head>
    <body>

    <header>
        <nav>
            <div>
                <h1 class="logo">BrgyDocs</h1>
            </div>
            
        </nav>
    </header>

    <main>

    
        <div class="tagline">
            <div class="kablogo">
                <img src="../../../public/images/image.png" alt="">
            </div>

            <div class="tagline-title">
                <h1>BrgyDocs</h1>
            
          
                <h3>Making Document Processing Effortless</h3>
            </div>
        </div>

        <div class="auth-div">
                <div class="auth-holder">

                    <h3>LOG IN</h3>
                    <form action="../../../routes/authRoute.php?action=login" method="POST">
                        <div class="input-field">
                       
                            <input type="text" name="username" placeholder="Username" require>
                            <input type="password" name="password" placeholder="Password" require>
                            <button type="submit">LOG IN</button>
                        </div>
                    </form>
                   

                    <div class="forgetSigpUp-tag">
                        <a href="recovery.php">Forgot Password</a>
                    
                        <p>Doesn't Created an Account Yet?<a href="registration.php"> Sign Up</a></p>
                    </div>  
                </div>
        </div>
    </main>
</body>
</html>

