<!-- Modal -->
<!-- Bootstrap Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg"> <!-- Wider modal -->
        <div class="modal-content shadow-sm rounded-3">
            <div class="modal-header border-bottom-0">
                <h5 class="modal-title" id="exampleModalLabel">Business / Location Details</h5>
                <span class="text-primary custom-btn-close" data-dismiss="modal" aria-label="Close" onclick="jQuery('#exampleModal').modal('hide');">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="41" viewBox="0 0 40 41" fill="none">
                        <rect x="12" y="11.8381" width="17" height="17" fill="white"></rect>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M12.783 4.17017H27.233C32.883 4.17017 36.6663 8.13683 36.6663 14.0368V27.6552C36.6663 33.5385 32.883 37.5035 27.233 37.5035H12.783C7.13301 37.5035 3.33301 33.5385 3.33301 27.6552V14.0368C3.33301 8.13683 7.13301 4.17017 12.783 4.17017ZM25.0163 25.8368C25.583 25.2718 25.583 24.3552 25.0163 23.7885L22.0497 20.8218L25.0163 17.8535C25.583 17.2885 25.583 16.3552 25.0163 15.7885C24.4497 15.2202 23.533 15.2202 22.9497 15.7885L19.9997 18.7535L17.033 15.7885C16.4497 15.2202 15.533 15.2202 14.9663 15.7885C14.3997 16.3552 14.3997 17.2885 14.9663 17.8535L17.933 20.8218L14.9663 23.7718C14.3997 24.3552 14.3997 25.2718 14.9663 25.8368C15.2497 26.1202 15.633 26.2718 15.9997 26.2718C16.383 26.2718 16.7497 26.1202 17.033 25.8368L19.9997 22.8885L22.9663 25.8368C23.2497 26.1385 23.6163 26.2718 23.983 26.2718C24.3663 26.2718 24.733 26.1202 25.0163 25.8368Z"
                            fill="currentColor">
                        </path>
                    </svg>
                </span>
            </div>

            <div class="modal-body px-4" id="shopModalBody">
                <div class="text-center">Loading...</div>
            </div>

            <div class="modal-footer border-top-0">
                <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close" onclick="jQuery('#exampleModal').modal('hide');">Close</button>
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

