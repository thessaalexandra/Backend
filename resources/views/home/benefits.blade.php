<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <title>homepageUtama</title>
    <link rel="stylesheet" href="home/css/benefits.css">  
    
</head>

<body>
    <div class="wrapper">
		<nav class="navbar">
            <img class = logoo src="home\image\Logo.jpeg"  width="90" height="50" border-radius = 50%>
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
                </li>
            </ul>
		</nav>
    <div>
        <div class = grid-container>
            <h1>Benefits</h1>
            <br>
            <table cellspacing="30">
                <tr>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="home\image\tas.jpg"  width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Our Job</h4>
                        </ol>
                    </th>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="home\image\rumah.jpg"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Work From Home</h4>
                        </ol>
                    </th> 
                    <th>
                        <ol><center>
                            <h2></h2>
                            <img src="home\image\jam.jpg"   width="50" height="50" border-radius = 50%>
                        </center>
                            <h4>Faster Process</h4>
                        </ol>
                    </th> 
                </tr>
                <tr>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="home\image\lock.jpg"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Guaranteed Security</h4>
                        </ol>
                    </th>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="home\image\headphone.jpg"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>We Listen and Record Requests</h4>
                        </ol>
                    </th>
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="home\image\humy.jpg"   width="50" height="50" border-radius = 50%>
                            </center>
                            <h4>Buyer's Rights</h4>
                        </ol>
                    </th>      
                </tr>

            </table>
        </div>
    </div>
</div>
	
</body>
</Html>