<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iqmedia-Clients</title>
    <link href="{{ asset('assets/img/IQ.png') }}" sizes="16x16" rel="icon">
    @include('layouts.bootstrab')
    <style>
        .client:hover {
            background: rgb(212, 211, 211);
            transition: 0.3s;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-success ">
        <div class="container-fluid">
            <a class="nav-link scrollto active text-light" href="{{ route('welcome') }}" style="font-size: 20px"> IQ
                MEDIA</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>


    <div class="row justify-content-center">
        @foreach ($clients as $client)
            <div class="col-md-4 shadow-sm client">
                <a href="{{ route('clients.show', $client->id) }}">
                    <img src="{{ asset('attachments/clientsImage/' . $client->image) }}"
                        style="width: 180px; height:170px; margin-left:85px" class="img-fluid " alt="iqmedia">
                </a>
            </div>
        @endforeach


    </div>



</body>

</html>
