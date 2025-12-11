@extends('layouts.admin')

@section('title', 'All Users')

@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                   <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="card-title">All Users</h4>
                        <button class="btn p-2" data-bs-toggle="modal" style="background-color:#4B49AC !important;color:#fff !important" data-bs-target="#addUserModal">
                            <i class="bi bi-plus-circle me-1"></i> Add User
                        </button>
                    </div>
                    <div id="successMsg" class="alert alert-success mt-3 d-none"></div>


                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>File</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contacts as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $contact->full_name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone }}</td>
                                    <td>
                                        @if ($contact->upload_file)
                                            <a href="{{ asset('storage/' . $contact->upload_file) }}" target="_blank">View File</a>
                                        @else
                                            No File
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-sm btn-warning editBtn"
                                            data-id="{{ $contact->id }}"
                                            data-name="{{ $contact->full_name }}"
                                            data-email="{{ $contact->email }}"
                                            data-phone="{{ $contact->phone }}"
                                            data-business="{{ $contact->business_name }}"
                                            data-message="{{ $contact->message }}"
                                            data-file="{{ $contact->upload_file }}">
                                            Edit
                                        </button>

                                        <button class="btn btn-sm btn-danger deleteBtn" data-id="{{ $contact->id }}">
                                            Delete
                                        </button>

                                        <button class="btn btn-info btn-sm viewBtn"
                                            data-name="{{ $contact->full_name }}"
                                            data-email="{{ $contact->email }}"
                                            data-phone="{{ $contact->phone }}"
                                            data-business="{{ $contact->business_name }}"
                                            data-message="{{ $contact->message }}"
                                            data-file="{{ $contact->upload_file }}">
                                            View
                                        </button>

                                    </td>
                                </tr>
                                 @empty
                                <tr>
                                    <td colspan="6" class="text-center">No Data Available</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="deleteForm" method="POST">
            @csrf
            @method('DELETE')
            <div class="modal-content">
                <div class="modal-header">
                    <h5>Confirm Delete</h5>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this user?
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="addUserForm" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            <div class="modal-content">
                <div class="modal-header  text-white" style="background-color:#4B49AC !important;color:#fff !important">
                    <h5 class="modal-title">
                        <i class="bi bi-plus-circle me-2"></i> Add User
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <div id="add_error_box" class="alert alert-danger d-none"></div>

                    <div class="row g-3">
                        <!-- Full Name -->
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" name="full_name" class="form-control" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" class="form-control" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="text" name="phone" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Business Name -->
                        <div class="col-md-6">
                            <label class="form-label">Business Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" name="business_name" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- File -->
                        <div class="col-md-6">
                            <label class="form-label">Upload File</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-upload"></i></span>
                                <input type="file" name="upload_file" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-md-12">
                            <label class="form-label">Message</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                <textarea name="message" rows="3" class="form-control"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success px-4" type="submit">
                        <i class="bi bi-check2-circle me-1"></i> Add
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog">
        <form id="editForm" method="POST" enctype="multipart/form-data" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title">
                        <i class="bi bi-pencil-square me-2"></i> Edit User
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <!-- Error Box -->
                    <div id="edit_error_box" class="alert alert-danger d-none"></div>

                    <input type="hidden" id="edit_id" name="id">

                    <div class="row g-3">

                        <!-- Full Name -->
                        <div class="col-md-6">
                            <label class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" id="edit_full_name" name="full_name" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="col-md-6">
                            <label class="form-label">Email</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" id="edit_email" name="email" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="col-md-6">
                            <label class="form-label">Phone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="text" id="edit_phone" name="phone" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Business Name -->
                        <div class="col-md-6">
                            <label class="form-label">Business Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" id="edit_business" name="business_name" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- File -->
                        <div class="col-md-6">
                            <label class="form-label">Uploaded File</label>
                            <div class="mb-2" id="old_file_preview"></div>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-upload"></i></span>
                                <input type="file" name="upload_file" class="form-control">
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="col-md-12">
                            <label class="form-label">Message</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                                <textarea id="edit_message" name="message" rows="3" class="form-control"></textarea>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-success px-4" type="submit">
                        <i class="bi bi-check2-circle me-1"></i> Update
                    </button>
                </div>

            </div>
        </form>
    </div>
</div>
<!-- Add View Modal -->
<div class="modal fade" id="viewModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content" style="border-radius: 12px; overflow: hidden;">
            <div class="modal-header" style="background-color: #4B49AC !important; color: #fff;">
                <h5 class="modal-title">
                    <i class="bi bi-eye me-2"></i> User Details
                </h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body p-4" style="background-color: #f7f7ff;">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Full Name:</label>
                        <p class="p-2 rounded" style="background-color: #e0e0ff; border: 1px solid #4B49AC;" id="view_full_name"></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Email:</label>
                        <p class="p-2 rounded" style="background-color: #e0e0ff; border: 1px solid #4B49AC;" id="view_email"></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Phone:</label>
                        <p class="p-2 rounded" style="background-color: #e0e0ff; border: 1px solid #4B49AC;" id="view_phone"></p>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-bold">Business Name:</label>
                        <p class="p-2 rounded" style="background-color: #e0e0ff; border: 1px solid #4B49AC;" id="view_business"></p>
                    </div>
                    <div class="col-md-12">
                        <label class="form-label fw-bold">Message:</label>
                        <p class="p-2 rounded" style="background-color: #e0e0ff; border: 1px solid #4B49AC;" id="view_message"></p>
                    </div>
                    <div class="col-md-12">
    <label class="form-label fw-bold">Uploaded File:</label>
    <div id="view_file_container">
        <!-- Button will be dynamically added via JS -->
        <button id="view_file_btn" type="button" class="btn btn-primary btn-sm" style="display: none;" target="_blank">
            <i class="bi bi-file-earmark-text me-1"></i> View File
        </button>
    </div>
</div>

                </div>
            </div>

            <div class="modal-footer" style="background-color: #f7f7ff;">
                <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



@endsection

@section('scripts')
<script>
$(document).ready(function(){

    // Open Edit Modal and Fill Data
    $(document).on('click', '.editBtn', function () {
        let id = $(this).data('id');
        $('#edit_id').val(id);
        $('#edit_full_name').val($(this).data('name'));
        $('#edit_email').val($(this).data('email'));
        $('#edit_phone').val($(this).data('phone'));
        $('#edit_business').val($(this).data('business'));
        $('#edit_message').val($(this).data('message'));

        let file = $(this).data('file');
        if(file){
            $('#old_file_preview').html(`<a href="/storage/${file}" target="_blank">View Current File</a>`);
        } else {
            $('#old_file_preview').html('No File Found');
        }

        $('#editForm').attr('action', '/update/' + id);
        $('#editModal').modal('show');
    });

    // Open Delete Modal
    $(document).on('click', '.deleteBtn', function () {
        let id = $(this).data('id');
        $('#deleteForm').attr('action', '/delete/' + id);
        $('#deleteModal').modal('show');
    });

    // AJAX Form Submit
    $('#editForm').on('submit', function(e){
        e.preventDefault();
        let formData = new FormData(this);
        let url = $(this).attr('action');

        // Reset errors
        $(".is-invalid").removeClass("is-invalid");
        $(".invalid-feedback").text("");
        $('#edit_error_box').addClass('d-none').text('');

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,

            success: function(response){
                if(response.status == 'success'){
                    $('#editModal').modal('hide');
                    location.reload(); // Reload table
                }
            },

            error: function(xhr){
                if(xhr.status === 422){
                    let errors = xhr.responseJSON.errors;
                    $.each(errors, function(key, value){
                        let input = $(`[name="${key}"]`);
                        input.addClass('is-invalid');
                        input.next('.invalid-feedback').text(value[0]);
                    });
                    $('#edit_error_box').removeClass('d-none').text('Please fix the errors below.');
                }
            }
        });
    });

});
$(document).ready(function(){

    // Open View Modal
    $(document).on('click', '.viewBtn', function(){
        $('#view_full_name').text($(this).data('name'));
        $('#view_email').text($(this).data('email'));
        $('#view_phone').text($(this).data('phone'));
        $('#view_business').text($(this).data('business'));
        $('#view_message').text($(this).data('message'));

        // Example: inside your code that opens the view modal
let file = $(this).data('file'); // assuming you pass file path in data-file
if(file){
    $('#view_file_btn').attr('onclick', `window.open('/storage/${file}', '_blank')`).show();
} else {
    $('#view_file_btn').hide();
}


        $('#viewModal').modal('show');
    });

});
</script>
<script>
$(document).ready(function () {

    $("#addUserForm").on('submit', function (e) {
        e.preventDefault();

        let formData = new FormData(this);

        $.ajax({
            url: "{{ route('contact.store') }}", 
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,

            success: function (response) {
                $("#successMsg").removeClass('d-none').text(response.message);

                // Clear form
                $("#addUserForm")[0].reset();

                // Remove error messages
                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").remove();
                $('#addUserModal').modal('hide');
                location.reload();
            },

            error: function (xhr) {
                $(".is-invalid").removeClass("is-invalid");
                $(".invalid-feedback").remove();

                if (xhr.status === 422) {
                    let errors = xhr.responseJSON.errors;

                    $.each(errors, function (key, value) {
                        let input = $(`[name="${key}"]`);
                        input.addClass('is-invalid');
                        input.after(`<div class="invalid-feedback">${value[0]}</div>`);
                    });
                }
            }
        });
    });

});
</script>

@endsection
