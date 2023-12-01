<!doctype html>
<html lang="en">
<header>
    <style>
        
        .headerword{
            padding-top:1px;
            padding-left: 650px;
          background-color:rgb(120, 192, 239) ;
          color:rgb(14, 5, 137);
          font-size: 20px;
          align-items: center;
          display: flex;
        }
        .centered-box {
            width: 40%; /* Adjust the width as needed */
            height: 50%;
            margin: 0 auto; /* Center the box horizontally */
             padding: 20px;
            background-color: rgb(176, 217, 245); /* Change to the desired background color */
            display: flex;

        }
        .button1 {
            width: 130%;
            height: 40px; /* Set the desired height */
            font-size: 0px; /* Set the font size */
            color: rgb(14, 5, 137);
            display: flex;

        }

        .b1 {
            width: 50%; /* Set the desired width */
            height: 40px; /* Set the desired height */
            font-size: 20px; /* Set the font size */
            color: rgb(14, 5, 137);
            background-color: white;
        }

        .b2 {
            width: 50%; /* Set the desired width */
            height: 40px; /* Set the desired height */
            font-size: 20px; /* Set the font size */
            background-color: rgb(136, 202, 246);
            color: rgb(14, 5, 137);
        }
        .input{
            display: flex;
            padding-left: 180px;
            background-color: transparent;

        }


  .second-input{
    padding-top: 25px;
    border: none;
    outline: none;
    background-color: transparent;
    padding-left: 180px;
  }

  .doc-login-button{
    padding-top: 20px;
    padding-left: 240px;
  }
  .link{
    font-size: 20px;
    font-weight: 300px;
    padding-left: 200px;
    color: rgb(14, 5, 137);
  }
  .input input {
    width: 250px; /* Set the desired width */
    height: 40px;
    border-radius: 5px;
    border: 0;
    font-size: 16px;


}
.second-input input {
    width: 250px; /* Set the desired width */
    height: 40px;
    border-radius: 5px;
    border: 0;
    font-size: 16px;
}
    .b3{
        width: 60%; /* Set the desired width */
            height: 40px; /* Set the desired height */
            font-size: 20px;
            border-radius: 10px;
            background-color: rgb(136, 202, 246);
            color: rgb(14, 5, 137);
            border-color:  rgb(14, 5, 137) ;
    }
        .b1:hover {
    background-color: white; /* Color on hover */
}
.b2:hover {
    background-color: white; /* Color on hover */
}
        </style>

<body>
    @if(isset(Auth::user()->slmc))
    <script>Window.location="/sucess";</script>
    @endif
    @if ($message =Session::get('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
    </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <u1>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </u1>
        </div>
    <br/>
    @endif


    <div class="headerword">

        <B> Medical Deligate System </B>

    </div>
    <br> <br> <br>
    <div class="centered-box">

    <div class="container">
        <div class="button1">
            <button class="b1" > <a href="/"> Doctor</a></button>

            <button class="b2" ><a href="/loginm"> Medical Reps</a></button>

        </div>
        <br> <br>
        <div class="input">
            <form method= "post" action="{{route('login')}}" >
                @csrf
            <input type="text" placeholder="SLMC" name="slmc"/>
        </div>
                <br>
                 <div class="second-input">
                    <input type="password" placeholder="Password" name="password"/>
                 </div>
                 <br>
                 <div class="doc-login-button">
                         <button class="b3"><b><a href="/dprofile">Log in</a></b></button>
                  </div>
                  <br>
                  <p class="link">
                    <a > Don't have an account? </a> <a href="{{route('reg')}}">  Sign Up</a>
                 </p>

    </div>
</div>
</header>
</html>
