<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        .div_center{
            text-align: center;
            padding-top: 40px;
        }
        .font_size{
            font-size: 40px;
            padding-bottom: 40px;
        }
        .text_colour{
            color: black;
        }

        label{
            display: inline-block;
            width: 200px;
        }
        .div_design{
            padding-bottom: 15px;
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
        <div class="div_center">
            <h1 class="font_size">Masukkan Games</h1>

            <form action="{{url('/edit_games_confirm', $game->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="div_design">
            <label>Nama Game</label>
            <input class="text_colour" type="text" name="nama_game" placeholder="Masukkan nama game" required="" value="{{$game->nama_game}}"> </input>
        </div>

        <div class="div_design">
            <label>Deskripsi</label>
            <input class="text_colour" type="text" name="deskripsi" placeholder="Masukkan deskripsi" required="" value="{{$game->deskripsi}}"> </input>
        </div>

        <div class="div_design">
            <label>Harga</label>
            <input class="text_colour" type="number" name="harga" placeholder="Masukkan harga" required="" value="{{$game->harga}}"> </input>
        </div>

        <div class="div_design">
            <label>Gambar</label>
            <img style="margin:auto;"height ="100" width="100" src="/game/{{$game->gambar}}">
        </div>

        <div class="div_design">
            <label>Ganti Gambar</label>
            <input type="file" name="gambar"> </input>
        </div>

        <div>
    
            <input type="submit" value="Update" class="btn btn-primary">
        </div>
    </form>

</div>
</div>
    </div>

    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
