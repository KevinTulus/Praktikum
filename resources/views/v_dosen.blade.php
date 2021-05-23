<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
</head>

<body>
    <h1>
        <?php
            foreach ($dosen as $key => $value) {
                echo $key+1 . ". ";
                foreach ($value as $sub_key => $sub_val) {
                    echo $sub_key . " = " . $sub_val . "<br>";
                }
            }
        ?>
    </h1>
</body>
</html>


<!-- @section('content')
{{ dd($dosen) }}

@endsection -->