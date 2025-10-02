<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .brand-logo {
            max-height: 70px;
        }

        .verified-card {
            border-radius: 12px;
            border: 1px solid #28a745;
            box-shadow: 0 4px 12px rgba(40, 167, 69, 0.15);
        }

        .success-icon {
            font-size: 60px;
            color: #28a745;
        }
    </style>
</head>

<body>
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" class="mb-4 brand-logo">
        <div class="card p-4 verified-card col-md-6 col-lg-4 text-center">
            <div class="success-icon mb-3">✔</div>
            <h4 class="mb-2" style="color:#28a745;">Verification Successful</h4>
            <p class="text-muted">Tracking Number <strong>TRACK-2025-123456</strong> is valid and verified.</p>
            <a href="search.html" class="btn btn-outline-success mt-3">Check Another</a>
        </div>
    </div>
</body>

</html>
