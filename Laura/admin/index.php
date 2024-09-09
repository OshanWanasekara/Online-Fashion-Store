<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../includes/header.php'; 
    ?>
</head>

<body>

    <!-- Header Section -->
    <header>

        <style>
            div {
                display: flex;
                justify-content: center;
            }

            form {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: start;
                background: #12242c;
                margin: 20px 50px;
                padding: 30px;
                width: 320px;
                height: 380px;
                box-shadow: 0px 5px 15px 2px #12242c;
            }

            h1 {
                color: #FFF;
                margin: 30px 0 50px 0;
            }

            input {
                padding: 0 15px;
                width: -webkit-fill-available;
                margin: 15px;
                height: 35px;
                border-radius: 20px;
                font-weight: bold;
                background: #E6F7D1;
                border: 2px solid #E6F7D1;
                outline: none;
                color: #3C3718;
                transition: all 500ms ease-out;
            }

            input:focus {
                border: 2px solid #3C3718;
            }

            button {
                padding: 0 15px;
                width: -webkit-fill-available;
                margin: 15px;
                height: 35px;
                border-radius: 20px;
                font-weight: bold;
                background: #3C3718;
                margin: 40px 15px 20px 15px;
                color: #E6F7D1;
                transition: all 500ms ease-out;
                animation: lights 4000ms infinite ease-in;
                border: 0;
            }

            button:hover {
                border: 1px solid #E6F7D1;
                box-shadow: 0px 0px 10px 2px #E6F7D1;
                animation: none;
            }

            a {
                color: #E6F7D1;
                text-decoration: none;
                font-size: 10px;
                font-weight: bolder;
                opacity: 0.6;
                transition: all 300ms ease-in-out;
            }

            a:hover {
                opacity: 0.9;
            }
        </style>
    </header>

    <!-- Signin Section -->
    <section class="signin">
        <div class="container">
            <div>
                <form>
                    <h1>Admin Log in</h1>
                    <input type="email" placeholder="Username" />
                    <input type="password" placeholder="Password" />
                    <button type="submit">Login</button>
                </form>
            </div>

        </div>
    </section>



</body>

</html>