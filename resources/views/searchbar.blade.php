<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"></script>
        <script srp="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

        jQuery -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->

    <!-- Font Awesome -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script> -->

    <!-- CSS -->
    <link rel="stylesheet" href="css/searchbar.css">
</head>

<body>
    <div class="container">
        <div class="row height d-flex justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="form">
                    <i class="fa fa-search"></i>
                    <H1>AIBAD</H1>
                    <H2>Assistant Information Based on Agile Development</H2>
                    <form action="{{ route('search') }}" method="GET">
                        <input type="text" class="form-control" name="cari" value="{{ old('search') }}" placeholder="Masukkan Keyword Agile..." value="">
                        <span class="left-pan"><i class="fa fa-microphone"></i></span>
                    </form>
                    <table class="table table-bordered">
                            
                            <tbody>
                            @foreach ($quote as $qt)
                                <tr>
                                    <td>{{ $qt->quote }}</td>
                                    <td>{{ $qt->author }}</td>
                                    <td>{{ $qt->kategori }}</td>
                                    
                                </tr>
                             
                              @endforeach
                            </tbody>
                          </table>  
                         
                         
                </div>
            </div>
        </div>
    </div>
</body>

</html>