<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard House Keeping</title>
    <link rel="icon" href="{{ asset('Logo_img/logo_rs.jpg') }}" type="image/x-icon">
    
    <!-- CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS\styles.css">
</head>
<body>
    <div class="container mt-4 mb-5">
        <div class="d-flex">
            <h2 class="mb-4">Tabel Pasien Rencana Pulang</h2>
            <ul class="nav ms-auto">
                @auth
                    <li class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                            Selamat datang, {{ Auth::user()->name }}!
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                                        </svg> 
                                        Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @endauth
            </ul>
        </div>

        <!-- Tabel -->
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>Registration No</th>
                    <th>Medical No</th>
                    <th>Patient Name</th>
                    <th>Home Address</th>
                    <th>Business Partner Name</th>
                    <th>Charge Class Name</th>
                    <th>Bed Code</th>
                    <th>Bed Status</th>
                    <th>Paramedic Name</th>
                    <th>Rencana Pulang</th>
                    <th>Keterangan</th>
                    <th>Registration ID</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beds as $bed)
                    <tr>
                        <td>{{ $item->RegistrationNo }}</td>
                        <td>{{ $item->MedicalNo }}</td>
                        <td>{{ $item->PatientName }}</td>
                        <td>{{ $item->HomeAddress }}</td>
                        <td>{{ $item->BusinessPartnerName }}</td>
                        <td>{{ $item->ChargeClassName }}</td>
                        <td>{{ $item->BedCode }}</td>
                        <td>{{ $item->BedStatus }}</td>
                        <td>{{ $item->ParamedicName }}</td>
                        <td>{{ $item->RencanaPulang }}</td>
                        <td>{{ $item->Keterangan }}</td>
                        <td>{{ $item->RegistrationID }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>