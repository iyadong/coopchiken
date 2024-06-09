@extends('dashboard.app')

@section('konten')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Manage Devices</h5>
                    <button class="btn btn-light" data-toggle="modal" data-target="#addDeviceModal"><i class="ri-add-line"></i> Add Device</button>
                </div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Device ID</th>
                                <th>Type</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Example data -->
                            <tr>
                                <td>1</td>
                                <td>A001</td>
                                <td>Kandang Umur 0-7 Hari</td> <!-- Changed the device type -->
                                <td>Active</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateDeviceModal"><i class="ri-edit-line"></i> Update</button>
                                    <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i> Delete</button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>A002</td>
                                <td>Kandang Umur 7-14 Hari</td> <!-- Changed the device type -->
                                <td>nonActive</td>
                                <td>
                                    <button class="btn btn-sm btn-info" data-toggle="modal" data-target="#updateDeviceModal"><i class="ri-edit-line"></i> Update</button>
                                    <button class="btn btn-sm btn-danger"><i class="ri-delete-bin-line"></i> Delete</button>
                                </td>
                            </tr>
                            <!-- Repeat for each device -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Add Device Modal -->
<div class="modal fade" id="addDeviceModal" tabindex="-1" aria-labelledby="addDeviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addDeviceModalLabel">Add Device</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="deviceID">Device ID</label>
                        <input type="text" class="form-control" id="deviceID" placeholder="Enter device ID">
                    </div>
                    <div class="form-group">
                        <label for="deviceType">Type</label>
                        <input type="text" class="form-control" id="deviceType" placeholder="Enter device type (e.g., Kandang Umur 0-7 Hari)">
                    </div>
                    <div class="form-group">
                        <label for="deviceStatus">Status</label>
                        <select class="form-control" id="deviceStatus">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Device</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Device Modal -->
<div class="modal fade" id="updateDeviceModal" tabindex="-1" aria-labelledby="updateDeviceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateDeviceModalLabel">Update Device</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="updateDeviceID">Device ID</label>
                        <input type="text" class="form-control" id="updateDeviceID" placeholder="Enter device ID">
                    </div>
                    <div class="form-group">
                        <label for="updateDeviceType">Type</label>
                        <input type="text" class="form-control" id="updateDeviceType" placeholder="Enter device type (e.g., Kandang Umur 0-7 Hari)">
                    </div>
                    <div class="form-group">
                        <label for="updateDeviceStatus">Status</label>
                        <select class="form-control" id="updateDeviceStatus">
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Device</button>
                </form>
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

    .btn-light {
        color: #495057;
    }

    .modal-content {
        border-radius: 12px;
    }
</style>
@endpush

@push('scripts')
<script>
    $(document).ready(function() {
        // Handle Add Device Form submission here
        $('#addDeviceModal form').submit(function(e) {
            e.preventDefault();
            // Add device logic here
            $('#addDeviceModal').modal('hide');
        });

        // Handle Update Device Form submission here
        $('#updateDeviceModal form').submit(function(e) {
            e.preventDefault();
            // Update device logic here
            $('#updateDeviceModal').modal('hide');
        });

        // Handle Delete Device action here
        $('.btn-danger').click(function() {
            // Delete device logic here
        });
    });
</script>
@endpush
