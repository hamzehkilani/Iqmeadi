<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iqmedia-clients</title>
    <link href="{{ asset('assets/img/IQ.png') }}" sizes="16x16" rel="icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-success py-2">
        <div class="container-fluid">
            <a class="nav-link scrollto active text-light" href="{{ route('welcome') }}" style="font-size: 20px">
                IQMEDIA</a>

        </div>
    </nav>

    <div class="container text-center ">
        <h3 class="text-secondary mt-3">({{ $clientName }})</h3>

    <div class="row justify-content-center mt-4">

        @forelse ($reels as $reel)

            <div class="col-md-4">
                <iframe style="width: 500" height="300"
                    src="{{ file_exists(public_path('/assets/Videos/' . $reel->video)) ? asset('/assets/Videos/' . $reel->video) : '' }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>

        @empty
            <h2 class="mt-4 text-center" style="color: red">There are currently no videos for the client </h2>
        @endforelse

    </div>
</div>

</body>

</html>
