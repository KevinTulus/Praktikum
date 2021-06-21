@include('homepage.layout.head')

@include('homepage.layout.header')
<!--/#header-->
<p class="container">Cari Data Guru :</p>
<form class="container" action="guru/search" method="GET">
  <input type="text" name="search" placeholder="Cari Nama/NIP..." value="{{ request('search') }}">
  <button type="submit" value="search" class="btn btn-info ">Cari</button>
</form>

<section id="features">
    <div class="container">
        <div class="row">
            <div class="single-features">
                <div class="col-sm-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">

                    <table class="table">
                      <thead>
                      <tr>
                        <th scope="col">NIP</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">EMAIL</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($gurus as $guru)
                      <tr>
                        <th scope="row">{{$guru->ni}}</th>
                        <th scope="row">{{$guru->name}}</th>
                        <th scope="row">{{$guru->email}}</th>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
 <!--/#features-->
