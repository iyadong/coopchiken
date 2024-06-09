@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8"> <!-- Increased width for the main card -->
            <div class="card shadow-sm ratio-1-1" style="height: 400px;"> <!-- Adjusted height -->
                <div class="card-header bg-success text-white d-flex justify-content-between align-items-center"> <!-- Changed bg-primary to bg-success -->
                    <div class="d-flex align-items-center">
                        <i class="ri-lightbulb-line mr-2"></i>
                        <h5 class="mb-0">Lamp Configuration</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label for="brightness" class="form-label">Brightness <span id="brightnessValue">50%</span></label>
                                <input type="range" class="form-control-range" id="brightness" min="0" max="100" value="50">
                                <div class="d-flex justify-content-between mt-2">
                                    <span>0%</span>
                                    <span>100%</span>
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="timeOn" class="form-label">Time On</label>
                                <input type="time" class="form-control" id="timeOn">
                            </div>
                            <div class="form-group mb-3">
                                <label for="timeOff" class="form-label">Time Off</label>
                                <input type="time" class="form-control" id="timeOff">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-control custom-switch mb-3">
                                <input type="checkbox" class="custom-control-input" id="lampModeSwitch">
                                <label class="custom-control-label" for="lampModeSwitch" id="lampModeLabel">Automatic</label>
                            </div>
                            <div class="custom-control custom-switch mb-3">
                                <input type="checkbox" class="custom-control-input" id="lampSwitch" disabled>
                                <label class="custom-control-label" for="lampSwitch" id="lampLabel">Lamp Off</label>
                            </div>
                            <button type="submit" class="btn btn-success w-100">Submit</button> <!-- Changed btn-primary to btn-success -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
