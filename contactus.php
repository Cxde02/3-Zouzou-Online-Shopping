<?php include("navbarcontactus.php"); ?>

<?php require_once("config.php"); ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us | 3Zouzou</title>
        <link rel="icon" type="image/x-icon" href="images/e.png">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script type="text/javascript" src="functions.js"></script>
    </head>

    <body>

    <div class="textcontact">
        <h3>Submit a request</h3>
    </div>

    <div class="form-container3">
        <form autocomplete="on" onsubmit="text();">>
            <label for="fname">First Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your Name..">

            <label for="lname">Last Name</label>
            <input type="text" id="lname" name="lastname" placeholder="Your Last Name..">

            <label for="lname">Username</label>
            <input type="text" id="Uname" name="username" placeholder="Your Username..">

            <label for="email">Email Address</label>
            <input type="text" id="Email" name="email" placeholder="Your Email Address.." required>

            <label for="country">Country</label>
            <select id="country" name="country">
                <option value="moris">Mauritius</option>
                <option value="rodrigues">Rodrigues</option>
                <option value="reunion">Reunion</option>
                <option value="usa">USA</option>
                <option value="uk">UK</option>
                <option value="france">France</option>
                <option value="madagascar">Madagascar</option>
                <option value="madagascar">Other</option>




            </select>

            <label for="subject">Subject</label>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

            <div class="btnsubmit">
                <a href="index.php">
                <button class="sbtc" type = "submit">Send</button>

                </a>
            </div>
        </form>
    </div>



    </body>
