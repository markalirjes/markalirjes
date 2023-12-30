<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>Innovantiran Register</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');
        *
        {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }
        body
        {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #d9caad;
        }
        section
        {
            position: absolute;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
            flex-wrap: wrap;
            overflow: hidden;
        }
        section::before
        {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(#000,#d9caad,#000);
            animation: animate 5s linear infinite;
        }
        @keyframes animate
        {
            0%
            {
                transform: translateY(-100%);
            }
            100%
            {
                transform: translateY(100%);
            }
        }
        section span
        {
            position: relative;
            display: block;
            width: calc(6.25vw - 2px);
            height: calc(6.25vw - 2px);
            background: #124b4a;
            z-index: 2;
            transition: 1.5s;
        }
        section span:hover
        {
            background: #fff;
            transition: 0s;
        }

        section .signin
        {
            position: absolute;
            width: 400px;
            background: #222;
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 15px 35px rgba(0,0,0,9);
        }
        section .signin .content
        {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 40px;
        }
        section .signin .content h2
        {
            font-size: 2em;
            color: #fff;
            text-transform: uppercase;
        }
        section .signin .content .form
        {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }
        section .signin .content .form .inputBox
        {
            position: relative;
            width: 100%;
        }
        section .signin .content .form .inputBox input
        {
            position: relative;
            width: 100%;
            background: #333;
            border: none;
            outline: none;
            padding: 25px 10px 7.5px;
            border-radius: 4px;
            color: #fff;
            font-weight: 500;
            font-size: 1em;
        }
        section .signin .content .form .inputBox i
        {
            position: absolute;
            left: 0;
            padding: 15px 10px;
            font-style: normal;
            color: #fff;
            transition: 0.5s;
            pointer-events: none;
        }
        .signin .content .form .inputBox input:focus ~ i,
        .signin .content .form .inputBox input:valid ~ i
        {
            transform: translateY(-7.5px);
            font-size: 0.8em;
            color: #fff;
        }
        .signin .content .form .links
        {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }
        .signin .content .form .links a
        {
            color: #fff;
            text-decoration: none;
        }
        .signin .content .form .links a:nth-child(2)
        {
            color: #fff;
            font-weight: 600;
        }
        .signin .content .form .inputBox input[type="submit"]
        {
            padding: 10px;
            background: #5dccbf;
            color: #fff;
            font-weight: 600;
            font-size: 1.35em;
            letter-spacing: 0.05em;
            cursor: pointer;
        }
        input[type="submit"]:active
        {
            opacity: 0.6;
        }
        @media (max-width: 900px)
        {
            section span
            {
                width: calc(10vw - 2px);
                height: calc(10vw - 2px);
            }
        }
        @media (max-width: 600px)
        {
            section span
            {
                width: calc(20vw - 2px);
                height: calc(20vw - 2px);
            }
        }
        .select {
            display : flex;
            justify-content: center;
            position: relative;
            min-width: 250px;
            height:50px;
        }
        .selectb {
            border: none;
            appearance: none;
            padding: 0 30px 0 15px;
            width: 100%;
            color: #fff;
            background-color: #333;
            font-size: 20px;
        }
    </style>

</head>

<body> <!-- partial:index.partial.html -->

<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    
    <div class="signin">
        
        <div class="content">
            <br><br>
            <img src="logo.png" width="150px" height="150px" style="border-radius:50px;">
            <form action="form.php" method="post" enctype="multipart/form-data">
            <div class="form">

                <div class="inputBox">

                    <input type="text" name ="firstname"> <i>Firstname</i>

                </div>

                <div class="inputBox">

                    <input type="text" name="lastname"> <i>Lastname</i>

                </div>

                <div class="inputBox">

                    <input type="text" name="phone"> <i>Phonenumber</i>

                </div>

                <div class="inputBox">
                <i>Title Job</i>
                <div class="select">
                    <select name="cars" id="cars" class="selectb">
                <option value="">Select a job title</option>
                <option value="investor">Investor</option>
                <option value="developer">Developer</option>
                <option value="designer">Artist/Designer</option>
                <option value="manager">Manager</option>
                <option value="marketing">Marketer</option>
                <option value="other">Other</option>
                    </select> 
                </div>
                </div>
                <div class="inputBox">

                    <input type="text" name="dgree"> <i>Last dgree</i>

                </div>
                <div class="inputBox">

                    <input type="text" name="linkedin"> <i>Linkedin Id</i>

                </div>
                <div class="inputBox">

                    <input type="file" name="profile"> <i>Profile Image(png , jpg ,...)</i>

                </div>
                <div class="inputBox">

                    <input type="file" name="pitch"> <i>Pitch file of my startup</i>

                </div>
                <div class="links"><a href="search.php">Make Connection</a></div>
                <div class="inputBox">

                    <input type="submit" value="Signup">

                </div>
                <div class="links"> <a href="">Innoventiran Corp @ 2024. All rights reserved.</a>

                </div>
                <div class="links"> 
                    <img src="hami.png" width="70px" height="70px" style="border-radius:25px;">
                    <img src="hezarehsevom.jpg" width="70px" height="70px" style="border-radius:10px;">
                    <img src="prorade.jpg" width="70px" height="70px" style="border-radius:25px;">
                </div> 
            </div>
            </form>
        </div>

    </div>

</section> <!-- partial -->

</body>

</html>
