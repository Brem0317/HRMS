@extends('layouts.app')


@section('content')
<div class="section-position">
    <div class="row">
        <div class="col-md-6 breadDiv">
            <x-breadcrumbs breadCrumbs="SETTING / POSITION"/>
        </div>
        <div class="col-md-6 btnDiv">
            <!-- Button trigger modal -->
            <button type="button" id="positionAddBtn" class="btn float-right positionAddBtn" data-toggle="modal" data-target="#positionAddModal">
                Add Position
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Position
        </div>

        <div class="card-body">
            <div class="row body-content">
                <div class="col-md-6 mx-auto">
                    <input type="text" class="form-control search-input" data-table="position-list2" placeholder="Search...">

                    <div class="fixHeight table-size">
                        {{-- @if($positions->count() > 0) --}}
                            <div class="table-size-header">
                                <table class="table position-list">
                                    <thead>
                                        <th class="thPosition">Position</th>
                                        <th>Action</th>
                                    </thead>
                                </table>
                            </div>
                            <div class="table-size-body">
                                <table class="position-list2">
                                    <tbody>
                                        <tr>
                                            <td>JCAH20190092</td>
                                            <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                        </tr>
                                        {{-- @foreach($positions as $position)
                                            <tr class="data-row">
                                                <td class="position">{{$position->cl_position_name}}</td>
                                                <td class="action-btns">
                                                    <button type="button" id="positionEdit" data-item-id="{{$position->id}}">
                                                        <i class="fas fa-pen"></i>
                                                    </button>
                                                    <button type="button" id="positionDelete" data-item-id="{{$position->id}}">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach --}}
                                    </tbody>
                                </table>
                            </div>
                        {{-- @else
                            <p class="noRecords">No Department Records Found.</p>
                        @endif --}}
                    </div>
                </div>
            </div>
        </div>

        <div class="card-footer"></div>
    </div>

    <!-- ADD POSITION -->
    <div class="modal fade" id="positionAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Position</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-lable="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="section-add-position-modal">
                        <form action="/position" method="POST" id="positionForm">
                            @csrf
                            <div class="form-group">
                                <label for="positionName">Position Name</label>
                                <input type="text" id="positionNameInputId" class="form-control positionNameInputClass" name="positionName" placeholder="i.e. Manager">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" id="positionSaveBtn" class="btn">Submit</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Position -->
    <div class="modal fade" id="editPositionModal" tabindex="-1" role="dialog" aria-labelledby="edit-position-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <div class="section-position-modal">
                    <form method="POST" id="editPositionForm">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="positionName">Position Name</label>
                            <input type="text" id="positionInputNameModal" class="form-control" name="positionName">
                        </div>
                    </form>
            </div>
            
            </div>
            <div class="modal-footer">
                <button type="button" id="positionUpdateBtn" class="btn">Update</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Delete Position -->
    <div class="modal fade" id="deletePositionModal" tabindex="-1" role="dialog" aria-labelledby="delete-position-modal-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="warning-logo">
                    <i class="fas fa-exclamation-triangle"></i>
                </div>
                <form method="POST" id="deletePositionForm">
                    @csrf
                    @method('DELETE')
                    <div class="form-group" id="positionDivNameModal">
                    </div>
                </form>
                <div class="deleteBtns">
                    <button type="button" id="positionDeleteBtn" class="btn">Yes</button>
                    <button type="button" id="positionCancelBtn" class="btn" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="{{ asset('js/position.js') }}"></script>

@endsection