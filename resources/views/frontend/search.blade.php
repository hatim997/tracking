<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verification Check</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f9f9f9;
        }

        .brand-logo {
            max-height: 70px;
        }

        .search-card {
            border-radius: 12px;
            border: 1px solid #f46a05;
            box-shadow: 0 4px 10px rgba(244, 106, 5, 0.1);
        }

        .btn-orange {
            background-color: #f46a05;
            border: none;
        }

        .btn-orange:hover {
            background-color: #d75a04;
        }
    </style>
</head>

<body>
    <div class="container vh-100 d-flex flex-column justify-content-center align-items-center">
        <img src="{{ asset(\App\Helpers\Helper::getLogoLight()) }}" alt="Logo" class="mb-4 brand-logo">
        <div class="card p-4 search-card col-md-6 col-lg-4">
            <h4 class="text-center mb-3" style="color:#f46a05;">Verification Check</h4>
            <form action="verified.html" method="GET">
                <div class="mb-3">
                    <label for="tracking" class="form-label">Enter Tracking Number</label>
                    <input type="text" class="form-control" id="tracking" name="tracking"
                        placeholder="TRACK-2025-123456" required>
                </div>
                <button type="submit" class="btn btn-orange w-100">Verify</button>
            </form>
        </div>
    </div>
</body>

</html>
