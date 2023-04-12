<!DOCTYPE html>
<html lang="en">
  <head>
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

            <form action="{{url('/tambah_game')}}" method="POST" enctype="multipart/form-data">
            @csrf

        <div class="div_design">
            <label>Nama Game</label>
            <input class="text_colour" type="text" name="nama_game" placeholder="Masukkan nama game" required=""> </input>
        </div>

        <div class="div_design">
            <label>Deskripsi</label>
            <input class="text_colour" type="text" name="deskripsi" placeholder="Masukkan deskripsi" required=""> </input>
        </div>

        <div class="div_design">
            <label>Harga</label>
            <input class="text_colour" type="number" name="harga" placeholder="Masukkan harga" required=""> </input>
        </div>

        <div class="div_design">
            <label>Rank</label>
            <input type="text" name="naik_rank" placeholder="Masukkan rank" required=""> </input>
        </div>

        <div class="div_design">
            <label>Gambar</label>
            <input type="file" name="gambar" placeholder="Masukkan gambar" required=""> </input>
        </div>



        <div>
    
            <input type="submit" value="Tambah" class="btn btn-primary">
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
