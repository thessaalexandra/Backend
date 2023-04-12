<!DOCTYPE html>
<html>
<head>
    </style>
    <meta charset="utf-8">
    <title>homepageUtama</title>
    <link rel="stylesheet" href="home/css/shop.css">  
    
</head>

<body>
    <div class="wrapper">
		<nav class="navbar">
            <img class = logoo src="home\image\Logo.jpeg"  width="90" height="50" border-radius = 50%>
            <ul>
                <li><a href="homepageafter">Home</a></li>
                <li><a href="shop">Shop</a></li>
                <li><a href="aboutus">About Us</a></li>
                <li><a href="userpage">Logout</a></li>
            </ul>
		</nav>
    <div>
        <div class = grid-container>
            <table cellspacing="20">
                <tr>

                    @foreach($game as $game)
                    <th>
                        <ol>
                            <center>
                                <h2></h2>
                                <img src="game/{{$game->gambar}}"  width="300" height="150" border-radius = 50%>
                            </center>
                            <a href="{{url('detail_games', $game->id)}}">{{$game->nama_game}}</a>
                            <h5>{{$game->harga}} per Rank</h5>
                            <a href="ml.html">{{$game->deskripsi}}</a>

                            <form action="{{url('tambah_pesanan', $game->id)}}" method="Post">

                            @csrf
                                <div class="row">

                                    <div class="col-md-4">

                                    <input type="number" name="rank" value="1" min="0" style="width: 100px">

                                    </div>

                                    <div class="col-md-4">
                                    <input type="submit" value="Tambah ke Pesanan"> 
                                    </div>
            
                                
                                </div>
                             </form>
                        </ol>
                    </th>
                    @endforeach
                    
                </tr>

            </table>
        </div>
    </div>
</div>
	
</body>
</Html>