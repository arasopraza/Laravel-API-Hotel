@extends('layout/main')

@section('title', 'Hotel')

@section('body')

<?php

function getDetailHotel()
{

    $curl = curl_init();

    curl_setopt_array($curl, [
        CURLOPT_URL => "https://hotels4.p.rapidapi.com/properties/get-details?id=116980&locale=en_US&currency=USD&checkOut=2020-01-15&adults1=1&checkIn=2020-01-08",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            "x-rapidapi-host: hotels4.p.rapidapi.com",
            "x-rapidapi-key: 66557f7647mshe8814ea2be3d39fp1cfd2djsn729760bd0887"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    return json_decode($response, TRUE);
}

$response = getDetailHotel();

?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <a class="nav-link active" href="/">Home</a>
                <a class="nav-link" href="/hotel">Hotel</a>
                <a class="nav-link" href="/pesawat">Pesawat</a>
            </div>
        </div>
    </nav>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Nama : <?= $response["data"]["body"]["propertyDescription"]["name"];?>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Kota : <?= $response["data"]["body"]["pdpHeader"]["hotelLocation"]["locationName"];?>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            Alamat : <?= $response["data"]["body"]["propertyDescription"]["address"]["fullAddress"];?>
        </li>
    </ul>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>
@endsection