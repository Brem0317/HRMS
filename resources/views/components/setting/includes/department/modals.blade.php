<!-- Modals -->
<!-- ADD Department -->
<div class="modal fade" id="departmentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Add Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-add-department-modal">
                    <form action="/department" method="POST" id="addDepartmentForm">
                        @csrf
                        <div class="form-group">
                            <label for="departmentName">Department Name</label>
                            <input type="text" name="departmentName" class="form-control">
                        </div>                        
                    </form>
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="departmentSubmitBtn">Submit</button>
            </div>
        </div>
    </div>
</div>
<!-- Edit Department -->
<div class="modal fade" id="editDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="edit-department-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Department</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="section-department-modal">
                    <form method="POST" id="editDepartmentForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="departmentName">Department Name</label>
                            <input type="text" name="departmentName" id="departmentInputNameModal" class="form-control">
                        </div>
                    </form>                    
                </div>            
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" id="departmentUdpateBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- Delete Department -->
<div class="modal fade" id="deleteDepartmentModal" tabindex="-1" role="dialog" aria-labelledby="edit-department-modal-label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalContent deleteContentModal">
            <div class="modal-body">
                <div class="section-department-modal">
                    <span class="dangerIcon">
                        <i class="fas fa-exclamation-triangle fa-4x"></i>
                    </span>
                    <form method="POST" id="deleteDepartmentForm">
                        @csrf
                        @method('DELETE')
                        <div class="form-group" id="departmentDivNameModal">

                        </div>
                    </form>                    
                    <button type="button" class="btn" id="departmentDeleteBtn">Yes</button>
                    <button type="button" class="btn" data-dismiss="modal">Cancel</button>
                </div>            
            </div>
        </div>
    </div>
</div>