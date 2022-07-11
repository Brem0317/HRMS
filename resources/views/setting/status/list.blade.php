@extends('layouts.app')
@section('content')

<section>
    <div class="section-status-list">
        <div class="row">        
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Setting / Employment Status"/>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn float-right sectionAddBtn" id="" data-toggle="modal" data-target="#statusModal">Add Employee Status</button>
            </div>
        </div><!-- row -->
        <div class="card">
            <div class="card-header">Employee Status</div>
            <div class="card-body">
                <div class="row"> 
                    <div class="col-md-6  mx-auto">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="status-list" placeholder="Search...">                    
                        </div>
                        <div class="fixHeight">
                            {{-- @if($statuses->count() > 0) --}}
                                <table class="status-list">
                                    <thead>
                                        <tr>
                                            <th>Employee Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>JCAH20190092</td>
                                            <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                        </tr>
                                        {{-- @foreach($statuses as $status)
                                            <tr class="data-row">
                                                <td class="status">{{$status->cl_status_name}}</td>    
                                                <td>                                        
                                                    <button type="button" id="statusEdit" class="btn" data-item-id="{{$status->id}}"><i class="fas fa-pen"></i></button>
                                                    <button type="button" id="statusDelete" class="btn" data-item-id="{{$status->id}}"><i class="fas fa-trash-alt"></i></button>
                                                </td>
                                            </tr>                                        
                                        @endforeach --}}
                                    </tbody>                 
                                </table>
                            {{-- @else              
                                <p class="noRecords">No Status Records Found.</p>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer"></div>
        </div><!-- card -->
    </div><!-- section status list -->    
</section>

@include('components.setting.includes.status.modals')



<script src="{{asset('js/statusjs.js')}}"></script>
@endsection