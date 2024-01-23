<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iqmedia-Clients</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"></script>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success py-2">
        <div class="container-fluid">
            <a class="nav-link scrollto active text-light" href="{{ route('welcome') }}" style="font-size: 20px"> IQ
                MEDIA</a>

        </div>
    </nav>
    <div class="container text-center ">
        <h3 class="text-secondary mt-3">({{ $clientName }})</h3>
    </div>
    @if (isset($images))
        <div class="row border bg-light">
            @foreach ($images as $image)
                <div class="col-md-12">
                    <div class="card-body">

                        <img src='{{ asset("attachments/Posts/$clientName/" . $image->image) }}'
                            style="width:300px;height:400px;" class="mb-3 m-4" alt="iqmedia">


                    </div>
                </div>
            @endforeach
        @else
            <h2 class="mt-4 text-center" style="color: red">There are currently no Images for the client</h2>
    @endif
    </div>
</body>

</html>
