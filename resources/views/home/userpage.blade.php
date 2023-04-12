<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <title>homepageUtama</title>
    <link rel="stylesheet" href="home/css/homepage.css">  
    
</head>

<body>
    <div class="wrapper">
		<nav class="navbar">
            <img class = logoo src="home/image/Logo.jpeg"  width="90" height="50" border-radius = 50%>
            <ul>
                <li><a href="homepage">Home</a></li>
                <li><a href="benefits">Benefits</a></li>
                <li><a href="status">List Games</a></li>
                <li><a href="aboutus">About Us</a></li>

                @if (Route::has('login'))

                @auth
                <li>
                    <form method="POST"
                    action="{{route('logout')}}" class="inline">
                    @csrf
                    <button type="submit"
                    id="logincss" class="btn btn-primary">
                    {{__('Log Out')}}
                    </button>
                    </form>

                    
                </li>
                @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">SignIn</a></li>
                @endauth
                @endif

            </ul>
		</nav>
    <div>
        <img class="logo" src="home\image\PUBG.jpg">
        <popup class = form>
            <div class="center">
                <br>
                    <h1>WELCOME TO JOKINDO</h1><br>
            </div>
    </div>
		
	</div>
	
</body>
</Html>