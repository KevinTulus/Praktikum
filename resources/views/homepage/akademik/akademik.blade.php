@include('homepage.layout.head')

@include('homepage.layout.header')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Akademik</h1>
                            <p>Info tentang akademik.</p>
                            <br>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Nilai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($scores as $score)
                                    <tr>
                                        <td scope="row">1. </td>
                                        <td scope="row">Bahasa Inggris</td>
                                        <td scope="row">{{$score->b_inggris}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">2. </td>
                                        <td scope="row">Bahasa Indonesia</td>
                                        <td scope="row">{{$score->b_indonesia}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">3. </td>
                                        <td scope="row">Matematika</td>
                                        <td scope="row">{{$score->matematika}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">4. </td>
                                        <td scope="row">Fisika</td>
                                        <td scope="row">{{$score->fisika}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">5. </td>
                                        <td scope="row">Kimia</td>
                                        <td scope="row">{{$score->kimia}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">6. </td>
                                        <td scope="row">Biologi</td>
                                        <td scope="row">{{$score->biologi}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">7. </td>
                                        <td scope="row">Sejarah</td>
                                        <td scope="row">{{$score->sejarah}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">8. </td>
                                        <td scope="row">Ekonomi</td>
                                        <td scope="row">{{$score->ekonomi}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">9. </td>
                                        <td scope="row">Sosiologi</td>
                                        <td scope="row">{{$score->sosiologi}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">10. </td>
                                        <td scope="row">Geografi</td>
                                        <td scope="row">{{$score->geografi}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">11. </td>
                                        <td scope="row">PPKN</td>
                                        <td scope="row">{{$score->pkn}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">12. </td>
                                        <td scope="row">Agama</td>
                                        <td scope="row">{{$score->agama}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">13. </td>
                                        <td scope="row">Penjas</td>
                                        <td scope="row">{{$score->penjas}}</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">14. </td>
                                        <td scope="row">TIK</td>
                                        <td scope="row">{{$score->komputer}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

@include('homepage.layout.foot')

@include('homepage.layout.footer')
