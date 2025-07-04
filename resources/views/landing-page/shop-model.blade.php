<!-- Modal -->
<!-- Bootstrap Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Wider modal -->
        <div class="modal-content shadow-sm rounded-3">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Business / Location Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body px-4">
                <!-- Section 1: General Info -->

                <!-- Section 3: Other Details -->
                <div class="mb-4">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-muted mb-0">Discount</label>
                            <div class="fw-medium">Flat ₹100 OFF</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted mb-0">Image</label><br>
                            <img src="https://via.placeholder.com/300x180.png?text=Business+Image" class="img-fluid rounded border shadow-sm mt-1" style="max-height: 150px;">
                        </div>
                    </div>
                </div>
                <hr>

                <div class="mb-4">
                    <h6 class="text-primary fw-semibold mb-3">General Information</h6>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-muted mb-0">Name</label>
                            <div class="fw-medium">John's Store</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted mb-0">Category</label>
                            <div class="fw-medium">Retail</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted mb-0">Description</label>
                            <div class="fw-medium">A one-stop shop for daily essentials, groceries, and household products.</div>
                        </div>
                    </div>
                </div>

                <hr>

                <!-- Section 2: Contact -->
                <div class="mb-4">
                    <h6 class="text-primary fw-semibold mb-3">Contact Details</h6>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label text-muted mb-0">Phone</label>
                            <div class="fw-medium">+91 9876543210</div>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-muted mb-0">Email</label>
                            <div class="fw-medium">john@example.com</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted mb-0">Address</label>
                            <div class="fw-medium">123 Main Street, Delhi, India</div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-muted mb-0">Map Link</label>
                            <div><a href="https://goo.gl/maps/example" target="_blank" class="text-decoration-underline">View on Google Maps</a></div>
                        </div>
                    </div>
                </div>

                <hr>
            </div>

            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!-- Optional Styles -->
<style>
    .modal-title {
        font-size: 1.25rem;
    }
    .fw-medium {
        font-weight: 500;
        color: #222;
    }
    .form-label {
        font-size: 0.875rem;
    }
    .modal-body h6 {
        font-size: 1rem;
    }
</style>
