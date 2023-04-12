<!DOCTYPE html>
<html>
<head>
    <base href="/public">

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
                <li><a href="homepageafter">Home</a></li>
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
    

		<div style="margin: auto; width: 50%; padding: 30px">
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="game/{{$game->gambar}}"  width="300" height="150" border-radius = 50% style="padding: 20px">
                            </center>
                            <a href="{{url('detail_games', $game->id)}}">{{$game->nama_game}}</a>
                            <h5>{{$game->harga}} per Rank</h5>
                            <h6>
                            Deskripsi Game {{$game->deskripsi}}
                            </h6>
                            <form action="{{url('tambah_pesanan', $game->id)}}" method="Post">

                            @csrf
                                <div class="row">

                                    <div class="col-md-4">

                                    <input type="number" name="rank" value="0" min="0" style="width: 100px">

                                    </div>

                                    <div class="col-md-4">
                                    <input type="submit" value="Tambah ke Pesanan"> 
                                    </div>
            
                                
                                </div>
                             </form>
                        </ol>
                        
</div>
	</div>

    
	
</body>
</Html>