<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
        .center{
            margin:auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size{
            text-align: center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size{
            width: 150px;
            height: 150px;
        }
    </style>
  </head>

  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
       <div class="content-wrapper">
       
       @if(session()->has('message'))
       <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">x</button>
        {{session()->get('message')}}
        </div>
        @endif

        <h2 class="font_size">List Games</h2>

        <table class="center">
        <tr>
            <th>Nama Game</th>
            <th>Deskripsi</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Hapus</th>
            <th>Edit</th>
         </tr>

         @foreach($game as $game)
         <tr>
            <td>{{$game->nama_game}}</td>
            <td>{{$game->deskripsi}}</td>
            <td>{{$game->harga}}</td>
            <td>
                <img class="img_size" src="/game/{{$game->gambar}}">
            </td>
            <td>
                <a class="btn btn-danger" onclick="return confirm('Apakah Anda yakin Menghapus Game Ini?')" href="{{url('hapus_games', $game->id)}}">Hapus</a>
            </td>
            <td>
                <a class="btn btn-success" href="{{ url('edit_games', $game->id)}}">Edit</a>
            </td>

        </tr>
        @endforeach
        </table>
</div>
</div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>