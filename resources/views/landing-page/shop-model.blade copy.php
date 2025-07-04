<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">View Address Details</h5>
                <button type="button" class="close iconBtn_" data-dismiss="modal" aria-label="Close" onclick="jQuery('#exampleModal').modal('hide');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body px-3">
                <div class="mb-3">
                    <label class="form-label fw-bold">Name:</label>
                    <div class="form-control-plaintext">John Doe</div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Description:</label>
                    <div class="form-control-plaintext">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Category:</label>
                    <div class="form-control-plaintext">Retail</div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Phone:</label>
                        <div class="form-control-plaintext">+91 9876543210</div>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label fw-bold">Email:</label>
                        <div class="form-control-plaintext">john@example.com</div>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Address:</label>
                    <div class="form-control-plaintext">123 Main Street, Delhi, India</div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Map Link:</label>
                    <div class="form-control-plaintext">
                        <a href="https://goo.gl/maps/example" target="_blank">View on Google Maps</a>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Discount:</label>
                    <div class="form-control-plaintext">Flat ₹100 OFF</div>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-bold">Image:</label><br>
                    <img src="https://via.placeholder.com/200x120.png?text=Image" class="img-fluid rounded border" style="max-height: 150px;">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Optional Styles -->
<style>
    div.pac-container {
        z-index: 99999999999 !important;
    }

    .modal-body {
        max-height: 80vh;
        overflow-y: auto;
    }

    #exampleModal {
        overflow: visible;
    }

    .form-label {
        font-weight: 600;
        margin-bottom: 0.2rem;
    }

    .form-control-plaintext {
        padding: 8px 0;
        border-bottom: 1px dashed #ddd;
        color: #333;
    }

    /* Custom Scrollbar for WebKit */
    #exampleModal .modal-body::-webkit-scrollbar {
        width: 8px;
    }

    #exampleModal .modal-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 10px;
    }

    #exampleModal .modal-body::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }

    #exampleModal .modal-body::-webkit-scrollbar-thumb:hover {
        background: #555;
    }

    /* Firefox scrollbar */
    #exampleModal .modal-body {
        scrollbar-width: thin;
        scrollbar-color: #888 #f1f1f1;
    }

    .iconBtn_ span,
    .iconBtn_ i {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 27px;
    }
</style>