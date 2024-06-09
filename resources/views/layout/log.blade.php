<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Smart Coop - Activity Log</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css">
    <style>
        .iq-card {
            border: 1px solid #e6e6e6;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
        }
        .iq-card-header {
            border-bottom: 1px solid #e6e6e6;
            padding-bottom: 10px;
        }
        .iq-header-title h4 {
            margin: 0;
            font-size: 18px;
        }
        .iq-timeline {
            list-style-type: none;
            padding-left: 0;
        }
        .iq-timeline li {
            position: relative;
            margin-bottom: 20px;
            padding-left: 25px;
        }
        .iq-timeline .timeline-dots {
            position: absolute;
            left: 0;
            top: 5px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #007bff;
        }
        .iq-timeline .timeline-dots.border-success {
            background-color: #28a745;
        }
        .iq-timeline .timeline-dots.border-danger {
            background-color: #dc3545;
        }
        .iq-timeline .timeline-dots.border-warning {
            background-color: #ffc107;
        }
        .iq-timeline .timeline-dots.border-primary {
            background-color: #007bff;
        }
        .iq-timeline h6 {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 5px;
        }
        .iq-timeline small {
            font-size: 12px;
            color: #999;
        }
        .iq-timeline p {
            margin: 0;
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Heater Activity Log -->
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Heater Activity Log</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton1" data-toggle="dropdown">
                    View All
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-card-body">
            <ul class="iq-timeline">
                <li>
                    <div class="timeline-dots border-success"></div>
                    <h6 class="float-left mb-1">Heater Activated</h6>
                    <small class="float-right mt-1">01 June 2024, 07:30 AM</small>
                    <div class="d-inline-block w-100">
                        <p>Heater in the Bedroom is now active.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-dots border-primary"></div>
                    <h6 class="float-left mb-1">Heater Deactivated</h6>
                    <small class="float-right mt-1">31 May 2024, 10:00 PM</small>
                    <div class="d-inline-block w-100">
                        <p>Heater in the Bedroom has been turned off.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- Lamp Activity Log -->
    <div class="iq-card">
        <div class="iq-card-header d-flex justify-content-between">
            <div class="iq-header-title">
                <h4 class="card-title">Lamp Activity Log</h4>
            </div>
            <div class="iq-card-header-toolbar d-flex align-items-center">
                <div class="dropdown">
                    <span class="dropdown-toggle text-primary" id="dropdownMenuButton2" data-toggle="dropdown">
                    View All
                    </span>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
                        <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                        <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                        <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                        <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                        <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-card-body">
            <ul class="iq-timeline">
                <li>
                    <div class="timeline-dots"></div>
                    <h6 class="float-left mb-1">Lamp Turned On</h6>
                    <small class="float-right mt-1">01 June 2024, 09:00 AM</small>
                    <div class="d-inline-block w-100">
                        <p>Living Room Lamp has been turned on.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-dots border-danger"></div>
                    <h6 class="float-left mb-1">Lamp Turned Off</h6>
                    <small class="float-right mt-1">31 May 2024, 11:00 PM</small>
                    <div class="d-inline-block w-100">
                        <p>Living Room Lamp has been turned off.</p>
                    </div>
                </li>
                <li>
                    <div class="timeline-dots border-warning"></div>
                    <h6 class="float-left mb-1">Lamp Scheduled</h6>
                    <small class="float-right mt-1">30 May 2024, 08:00 PM</small>
                    <div class="d-inline-block w-100">
                        <p>Scheduled Living Room Lamp to turn on at 09:00 AM.</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
