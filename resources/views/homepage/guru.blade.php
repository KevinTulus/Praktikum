<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
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
