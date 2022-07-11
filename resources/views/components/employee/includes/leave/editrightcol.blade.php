<div class="col-md-6 formDiv">                           
    <table class="table-bordered attachmentList">
        <thead>
            <tr>
                @if ($leave->cl_type_of_leave == 'Sick')
                    <th colspan="4">SICK LEAVE</th>
                @elseif ($leave->cl_type_of_leave == 'Vacation')
                    <th colspan="4">VACATION LEAVE</th>
                @elseif ($leave->cl_type_of_leave == 'Maternity')
                    <th colspan="4">MATERNITY LEAVE</th>
                @elseif ($leave->cl_type_of_leave == 'Paternity')
                    <th colspan="4">PATERNITY LEAVE</th>
                @endif
            </tr>
            <tr>
                <th>Name</th>
                <th>Attachment</th>
                <th>Date Uploaded</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Leave Form</td>
                @if($leave->cl_leave_form !== NULL)
                    <td><a href="{{asset ($leave->cl_leave_form)}}" class="attachedFileImage" target="_blank">
                        <img src="{{asset ($leave->cl_leave_form)}}" alt="Leave Attachment">
                    </a></td>
                @else 
                    <td>---</td>
                @endif

                @if($leave->cl_leave_form_time !== NULL)
                    <td>{{ $leave->cl_leave_form_time }}</td>
                @else 
                    <td>---</td>
                @endif

                <td>
                    <label for="leaveAttachment" hidden>Leave Form</label>
                    <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="leaveAttachment" class="fileUpload">
                </td>
            </tr>
            @if($leave->cl_type_of_leave == 'Sick')
                <tr>
                    <td>Medical Certificate</td>
                    @if($leave->cl_medical_certificate !== NULL)
                        <td><a href="{{asset ($leave->cl_medical_certificate)}}" class="attachedFileImage" target="_blank">
                            <img src="{{asset ($leave->cl_medical_certificate)}}" alt="Leave Attachment">
                        </a></td>
                    @else 
                        <td>---</td>
                    @endif

                    @if($leave->cl_medical_certificate_time !== NULL)
                        <td>{{ $leave->cl_medical_certificate_time }}</td>
                    @else 
                        <td>---</td>
                    @endif

                    <td>
                        <label for="leaveAttachment03" hidden>Birth Certificate</label>
                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="leaveAttachment03" class="fileUpload">
                    </td>
                </tr>
            @endif
            @if ($leave->cl_type_of_leave == 'Paternity')
                <tr>
                    <td>Child Birth Certificate</td>
                    @if($leave->cl_birth_certificate_of_child !== NULL)
                        <td><a href="{{asset ($leave->cl_birth_certificate_of_child)}}" class="attachedFileImage" target="_blank">
                            <img src="{{asset ($leave->cl_birth_certificate_of_child)}}" alt="Birth Certificate">
                        </a></td>
                    @else 
                        <td>---</td>
                    @endif

                    @if($leave->cl_birth_certificate_of_child_time !== NULL)
                        <td>{{ $leave->cl_birth_certificate_of_child_time }}</td>
                    @else 
                        <td>---</td>
                    @endif

                    <td>
                        <label for="leaveAttachment02" hidden>Birth Certificate</label>
                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="leaveAttachment02" class="fileUpload">
                    </td>
                </tr>
            @elseif ($leave->cl_type_of_leave == 'Maternity')
                <tr>
                    <td>Child Birth Certificate</td>
                    @if($leave->cl_birth_certificate_of_child !== NULL)
                        <td><a href="{{asset ($leave->cl_birth_certificate_of_child)}}" class="attachedFileImage" target="_blank">
                            <img src="{{asset ($leave->cl_birth_certificate_of_child)}}" alt="Birth Certificate">
                        </a></td>
                    @else 
                        <td>---</td>
                    @endif

                    @if($leave->cl_birth_certificate_of_child_time !== NULL)
                        <td>{{ $leave->cl_birth_certificate_of_child_time }}</td>
                    @else 
                        <td>---</td>
                    @endif

                    <td>
                        <label for="leaveAttachment02" hidden>Birth</label>
                        <input type="file" accept=".JPG, .jpg, .jpeg, .png, .pdf" name="leaveAttachment02" class="fileUpload">
                    </td>
                </tr>
            @endif
        </tbody>
    </table>                     
</div>