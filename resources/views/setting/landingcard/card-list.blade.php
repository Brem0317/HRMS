@extends('layouts.app')
@section('content')
    <div class="section-setting-card">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="/department" class="btn">
                            <div class="card-body">
                                <i class="fas fa-building"></i>
                                <p class="card-text">Department</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/position" class="btn">
                            <div class="card-body">
                                <i class="fas fa-briefcase"></i>
                                <p class="card-text">Positions</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/job-title" class="btn">
                            <div class="card-body">
                                <i class="fas fa-tasks"></i>
                                <p class="card-text">Job Title</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/employment-status" class="btn">
                            <div class="card-body">
                                <i class="fas fa-user-cog"></i>
                                <p class="card-text">Employment Status</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="/roles" class="btn">
                            <div class="card-body">
                                <i class="fas fa-user-tag"></i>
                                <p class="card-text">Roles</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/add-user" class="btn">
                            <div class="card-body">
                                <i class="fas fa-user-plus"></i>
                                <p class="card-text">Add Users</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/user-log" class="btn">
                            <div class="card-body">
                                <i class="fas fa-clipboard-list"></i>
                                <p class="card-text">User Logs</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/user-restriction" class="btn">
                            <div class="card-body">
                                <i class="fas fa-exclamation-triangle"></i>
                                <p class="card-text">User Restrictions</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <a href="/work-schedule" class="btn">
                            <div class="card-body">
                                <i class="fas fa-calendar-check"></i>
                                <p class="card-text">Work Schedule</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <a href="/company-profile" class="btn">
                            <div class="card-body">
                                <i class="fas fa-school"></i>
                                <p class="card-text">Company Profile</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>        
    </div>
@endsection
 

