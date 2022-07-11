<!-- Modals -->
<!-- ADD Booster -->
<div class="modal fade" id="boosterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Booster Shot</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-add-booster-modal">
                    <form action="/employee-medical-result/" enctype="multipart/form-data" method="POST" id="addBoosterForm">
                        @csrf                
                        <input type="text" value="{{$employeeID}}" hidden name="employeeID">  
                        <div class="form-group">
                            <label for="boosterDate">Date</label>
                            <input type="date" name="boosterDate" class="form-control">
                        </div>     
                        <div class="form-group">
                            <label for="boosterVaccineName">Vaccine Name</label>
                            <input type="text" name="boosterVaccineName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="boosterFileAttachment">Attachment</label>
                            <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="boosterFileAttachment" class="fileUpload">
                        </div>                     
                    </form>
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="boosterSubmitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Booster -->
<div class="modal fade" id="editBoosterModal" tabindex="-1" role="dialog" aria-labelledby="edit-booster-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-booster-modal">
                    <form method="POST" id="editBoosterForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="boosterDate">Date</label>
                            <input type="date" id="boosterInputDateModal" name="boosterDate" class="form-control">
                        </div>     
                        <div class="form-group">
                            <label for="boosterVaccineName">Vaccine Name</label>
                            <input type="text" id="boosterInputNameModal" name="boosterVaccineName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="boosterFileAttachment">Attachment</label>
                            <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="boosterFileAttachment" class="fileUpload">
                        </div>   
                    </form>                    
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="boosterUdpateBtn">Update</button>
            </div>
        </div>
    </div>
</div>

<!-- Delete Booster -->
<div class="modal fade" id="deleteBoosterModal" tabindex="-1" role="dialog" aria-labelledby="edit-booster-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent deleteContentModal">
            <div class="modal-body">
                <div class="section-booster-modal">
                    <span class="dangerIcon">
                        <i class="fas fa-exclamation-triangle fa-4x"></i>
                    </span>
                    <form method="POST" id="deleteBoosterForm">
                        @csrf
                        @method('DELETE')
                        <div class="form-group" id="boosterDivNameModal">

                        </div>
                    </form>                    
                    <button type="button" class="btn" id="boosterDeleteBtn">Yes</button>
                    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                </div>            
            </div>
        </div>
    </div>
</div>