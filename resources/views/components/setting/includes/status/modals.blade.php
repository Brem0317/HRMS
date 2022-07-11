<!-- Modals -->
<!-- ADD Status -->
<div class="modal fade" id="statusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-add-status-modal">
                    <form action="/employment-status" method="POST" id="addStatusForm">
                        @csrf
                        <div class="form-group">
                            <label for="statusName">Status Name</label>
                            <input type="text" name="statusName" class="form-control">
                        </div>                        
                    </form>
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="statusSubmitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Status -->
<div class="modal fade" id="editStatusModal" tabindex="-1" role="dialog" aria-labelledby="edit-status-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-status-modal">
                    <form method="POST" id="editStatusForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="statusName">Status Name</label>
                            <input type="text" name="statusName" id="statusInputNameModal" class="form-control">
                        </div>
                    </form>                    
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="statusUdpateBtn">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Status -->
<div class="modal fade" id="deleteStatusModal" tabindex="-1" role="dialog" aria-labelledby="edit-status-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent deleteContentModal">
            <div class="modal-body">
                <div class="section-status-modal">
                    <span class="dangerIcon">
                        <i class="fas fa-exclamation-triangle fa-4x"></i>
                    </span>
                    <form method="POST" id="deleteStatusForm">
                        @csrf
                        @method('DELETE')
                        <div class="form-group" id="statusDivNameModal">

                        </div>
                    </form>                    
                    <button type="button" class="btn" id="statusDeleteBtn">Yes</button>
                    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                </div>            
            </div>
        </div>
    </div>
</div>