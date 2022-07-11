@extends('layouts.app')
@section('content')
<section>
    <div class="section-leave-add">
        <div class="row">        
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Employee/Employee Leave"/>
            </div>
        </div><!-- row -->
        <div class="card">
            <div class="card-header">Employee List</div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">

                        @include('components.employee.includes.leave.addleftcol')

                    </div>
                    <div class="col-md-6">

                        @include('components.employee.includes.leave.addrightcol')                        

                    </div>
                </div>
            </div>
        </div><!-- card -->
    </div><!-- section leave list -->
</section>
<script src="{{asset('js/search.js')}}"></script>
<script src="{{asset('js/date.js')}}"></script>
@endsection