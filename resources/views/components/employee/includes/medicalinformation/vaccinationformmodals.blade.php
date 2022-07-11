<!-- Modals -->
<!-- ADD Vaccination -->
<div class="modal fade" id="vaccinationModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Vaccine Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-add-vaccination-modal">
                    <form action="/employee-medical-result/" enctype="multipart/form-data" method="POST" id="addVaccinationForm">
                        @csrf
                        <div class="form-group">
                            <h5>1st Dose</h5>
                            <div class="section">
                                <label for="vaccinationDate">Date</label>
                                <input type="date" name="vaccinationDate" class="form-control">    
                            </div>
                            <div class="section">
                                <label for="vaccinationName">Vaccine Name</label>
                                <input type="text" name="vaccinationName" class="form-control">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <h5>2nd Dose</h5>
                            <div class="section">
                                <label for="vaccinationDate">Date</label>
                                <input type="date" name="vaccinationDate" class="form-control">
                            </div>
                            <div class="section">
                                <label for="vaccinationName">Vaccine Name</label>
                                <input type="text" name="vaccinationName" class="form-control">    
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vaccinationFileAttachment">Attachment</label>
                            <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="vaccinationFileAttachment" class="fileUpload">
                        </div>         
                    </form>
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="vaccinationSubmitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Vaccination -->
<div class="modal fade" id="editVaccinationModal" tabindex="-1" role="dialog" aria-labelledby="edit-department-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Vaccination</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-vaccination-modal">
                    <form method="POST" id="editVaccinationForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <h5>1st Dose</h5>
                            <div class="section">
                                <label for="vaccinationDate">Date</label>
                                <input type="date" id="vaccinationInputDateModal1" name="vaccinationDate" class="form-control">    
                            </div>
                            <div class="section">
                                <label for="vaccinationName">Vaccine Name</label>
                                <input type="text" id="vaccinationInputNameModal1" name="vaccinationName" class="form-control">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <h5>2nd Dose</h5>
                            <div class="section">
                                <label for="vaccinationDate">Date</label>
                                <input type="date" id="vaccinationInputDateModal2" name="vaccinationDate" class="form-control">
                            </div>
                            <div class="section">
                                <label for="vaccinationName">Vaccine Name</label>
                                <input type="text" id="vaccinationInputNameModal2" name="vaccinationName" class="form-control">    
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vaccinationFileAttachment">Attachment</label>
                            <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="vaccinationFileAttachment" class="fileUpload">
                        </div>  
                    </form>                    
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="vaccinationUdpateBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Vaccination -->
<div class="modal fade" id="deleteVaccinationModal" tabindex="-1" role="dialog" aria-labelledby="edit-vaccination-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent deleteContentModal">
            <div class="modal-body">
                <div class="section-vaccination-modal">
                    <span class="dangerIcon">
                        <i class="fas fa-exclamation-triangle fa-4x"></i>
                    </span>
                    <form method="POST" id="deleteVaccinationForm">
                        @csrf
                        @method('DELETE')
                        <div class="form-group" id="vaccinationDivNameModal">

                        </div>
                    </form>                    
                    <button type="button" class="btn" id="vaccinationDeleteBtn">Yes</button>
                    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                </div>            
            </div>
        </div>
    </div>
</div>