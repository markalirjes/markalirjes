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
            width: 500px;
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
        th{
            color:#fff;
        }
        td{
            color:#fff;
        }
    </style>

</head>

<body> <!-- partial:index.partial.html -->

<section> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span> <span></span>
    
    <div class="signin">
        
        <div class="content">
            <br><br>
            <img src="logo copy.png" width="150px" height="150px" style="border-radius:50px;">
<form method="post">
		<input type="text" name="search" placeholder="Innoventiran Code..." style="width:400px;height:30px;">
		<button type="submit" name="submit" style="margin-left:170px;margin-top:40px;padding:10px;font-size:15px;">Search</button>
		<?php 
        if(isset($_POST['submit'])){
		  $con = mysqli_connect("sql202.infinityfree.com","if0_35625832","ENwLHV0mHiYN7","if0_35625832_users");
		  $search = $_POST['search'];
		  $query = mysqli_query($con , "SELECT * FROM `signup` WHERE code LIKE '%{$search}%'");
		  $fetch = mysqli_fetch_array($query);
          if(mysqli_num_rows($query) > 0){?>
			<br><br><br>
			<table>
                <tr>
                    <th>Picture</th>
                    <th>Name</th>
                    <th>Linkedin Id</th>
                    
                </tr>
                
			<tr>
                <br>
				<td><img style="width:150px;height:150px;border-radius:50%;" src='<?php echo 'files/'.$fetch["profile"]; ?>'/><?php echo '&nbsp;&nbsp;'; ?></td>
                <td><?php echo $fetch['job']; ?><?php echo'&nbsp;&nbsp;'?></td>
                <td><?php echo $fetch['linkedin'].'&nbsp;&nbsp;'; ?></td>
			</tr>
			</table> 
        <?php }else{
              ?><h2>Not Found!!</h2><?php
          }} ?>
	</form>
    </div>

</div>

</section> <!-- partial -->

</body>

</html>