@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm ratio-1-5">
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center"> <!-- Mengubah warna latar belakang menjadi hijau -->
                    <div class="d-flex align-items-center">
                        <i class="ri-fire-line mr-2"></i>
                        <h5 class="mb-0">Heater Configuration</h5>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group mb-3">
                            <label for="min_temp" class="form-label">Minimum Temperature <span id="minTempValue">20°C</span></label>
                            <input type="range" class="form-control-range" id="min_temp" min="0" max="100" value="20">
                            <div class="d-flex justify-content-between mt-2">
                                <span>0°C</span>
                                <span>100°C</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="max_temp" class="form-label">Maximum Temperature <span id="maxTempValue">80°C</span></label>
                            <input type="range" class="form-control-range" id="max_temp" min="0" max="100" value="80">
                            <div class="d-flex justify-content-between mt-2">
                                <span>0°C</span>
                                <span>100°C</span>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="heaterSwitch" disabled>
                                <label class="custom-control-label" for="heaterSwitch" id="heaterLabel">Heater Off</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Mode</h5>
                    <div class="custom-control custom-switch ml-auto">
                        <input type="checkbox" class="custom-control-input" id="modeSwitch">
                        <label class="custom-control-label" for="modeSwitch" id="modeLabel">Automatic</label>
                    </div>
                </div>
            </div>
            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <button id="heaterButton" class="btn btn-success btn-block">Heater On</button> <!-- Mengubah warna tombol menjadi hijau -->
                </div>
            </div>
            <div class="card shadow-sm mt-4">
                <div class="card-body">
                    <button id="submitButton" class="btn btn-success btn-block">Submit</button> <!-- Mengubah warna tombol menjadi hijau -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .card {
        border-radius: 12px;
    }

    .card-header {
        border-top-left-radius: 12px;
        border-top-right-radius: 12px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .form-control-range {
        width: 100%;
    }

    .ratio-1-5 {
        height: 500px; /* adjust height for aspect ratio */
    }

    .pt-5 {
        padding-top: 3rem !important;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var modeSwitch = document.getElementById('modeSwitch');
        var modeLabel = document.getElementById('modeLabel');
        var minTempSlider = document.getElementById('min_temp');
        var maxTempSlider = document.getElementById('max_temp');
        var minTempValue = document.getElementById('minTempValue');
        var maxTempValue = document.getElementById('maxTempValue');
        var heaterSwitch = document.getElementById('heaterSwitch');
        var heaterLabel = document.getElementById('heaterLabel');
        var heaterButton = document.getElementById('heaterButton');
        var submitButton = document.getElementById('submitButton');

        modeSwitch.addEventListener('change', function() {
            if (modeSwitch.checked) {
                modeLabel.textContent = 'Manual';
                heaterSwitch.disabled = false;
                heaterButton.disabled = false; // Enable heater button in manual mode
                submitButton.disabled = false; // Enable submit button in manual mode
            } else {
                modeLabel.textContent = 'Automatic';
                heaterSwitch.disabled = true;
                heaterSwitch.checked = false; // Turn off the heater when switching to automatic mode
                heaterLabel.textContent = 'Heater Off';
                heaterButton.disabled = true; // Disable heater button in automatic mode
                submitButton.disabled = true; // Disable submit button in automatic mode
            }
        });

        minTempSlider.addEventListener('input', function() {
            minTempValue.textContent = minTempSlider.value + '°C';
        });

        maxTempSlider.addEventListener('input', function() {
            maxTempValue.textContent = maxTempSlider.value + '°C';
        });

        heaterSwitch.addEventListener('change', function() {
            if (heaterSwitch.checked) {
                heaterLabel.textContent = 'Heater On';
            } else {
                heaterLabel.textContent = 'Heater Off';
            }
        });

        heaterButton.addEventListener('click', function() {
            if (heaterButton.textContent === 'Heater On') {
                heaterButton.textContent = 'Heater Off';
            } else {
                heaterButton.textContent = 'Heater On';
            }
        });
    });
</script>
@endpush
