<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create New Address</h5>
                <button type="button" class="close iconBtn_" data-dismiss="modal" aria-label="Close" onclick="jQuery('#exampleModal').modal('hide');">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            </div>
        </div>
    </div>
</div>


<style>
    div.pac-container {
        z-index: 99999999999 !important;
    }
    
    .modal-body {
        max-height: 80vh;
        /* Ensures content is scrollable */
        overflow-y: auto;
    }

    #exampleModal {
        overflow: visible;
    }

    /* Custom Scrollbar for WebKit Browsers */
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

    /* Custom Scrollbar for Firefox */
    #exampleModal .modal-body {
        scrollbar-width: thin;
        scrollbar-color: #888 #f1f1f1;
    }
    .iconBtn_ span, .iconBtn_ i {
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .iconBtn_ span, .iconBtn_ i {
        display: block !important;
        font-size: 27px;
    }
</style>