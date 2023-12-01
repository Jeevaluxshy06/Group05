<header>
    <style>
        .headerword{
            padding-top:1px;
           display: flex;
            justify-content: space-between;
             align-items: center;
          background-color:rgb(120, 192, 239) ;
          color:rgb(14, 5, 137);
          font-size: 18px;
          padding-left: 10px;
          padding-right: 1px;

        }
        .logout{
            padding-top: 10px;
            padding-left: 600px;
            color:rgb(14, 5, 137);
        }
        .container{
            display: flex;
        }
        .sidebar {
            padding-top: 10px;
            width: 250px;
         background-color: rgb(120, 192, 239);
            color: rgb(14, 5, 137);
        }
        .sidebar :hover{
            background-color:rgb(22, 112, 172) ;
        }
        .sidebar ul {
            list-style: none;
             padding: 10px;

        }

        .sidebar ul li {
             padding: 20px;

        }

        .sidebar a {
            color: rgb(14, 5, 137);
            text-decoration: none;
            border: 2px solid rgb(14, 5, 137); /* Add a border around each list item */
            margin: 1px; /* Add some margin for spacing */
         padding: 10px; /* Add padding inside the box */
        }
        .form{
            flex: 1;
            padding-left: 400px;
        }
        input{
            border: none;
        }

        </style>
    <div class="headerword">
        <a href="mheader">
        <img id="image-clickable" src="<?php echo e(asset('H1.jpg')); ?>" width="30px">
        </a>
        <B> Medical Deligate System </B>
        <a href="/" class="logout">Log Out</a>
    </div>
    <div class="container">
            <div>
        <aside class="sidebar">
            <ul>

                <li name="profile"><a href="/mprofile"><b>Profile</b></a></li>
                <li><a href="/mrequest"> Create Appoinments</a></li>
                <li><a href="/mmeeting">Upcoming Meetings</a></li>
                <li><a href="">Create Summary</a></li>
                <li><a href="/msummary">Summary</a></li>

                <!-- Add more sidebar links as needed -->

            </ul>

        </aside>
            </div>
    <div class="form">
        <h1>Profile</h1>

        <form >
            <h3>
            <label for="id">WorkID:</label>
            <input type="text" name="id"  >
            <?php echo e(Auth::user()->slmc); ?>

            <br> <br>

            <label for="name">Name :</label>
            <input type="text" name="name" >
            <?php echo e(Auth::user()->name); ?>

            <br> <br>
            <label for="phone">Phone No :</label>
            <input type="text" name="phone" >
            <?php echo e(Auth::user()->phone); ?>

            <br> <br>
            <label for="district">District :</label>
            <input type="text" name="district" >
            <?php echo e(Auth::user()->district); ?>

            <br> <br>
            <label for="region">Region :</label>
            <input type="text" name="region" >
            <?php echo e(Auth::user()->region); ?>

            </h3>
            <!-- Add other doctor details here as needed -->
        </form>
    </div>
    </div>

</header>
<?php /**PATH C:\Users\Anjana\HelloApp\resources\views/mprofile.blade.php ENDPATH**/ ?>