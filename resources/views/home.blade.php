@extends('layouts.app')
@section('content')
<section>
    <div class="section-dashboard">
        <div class="container-fluid">
            <div class="row">
                
                <div class="col-9">
                    <div class="row">

                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/leave" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-calendar-day"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $leaves }} --}}
                                            </span>      
                                            <br>                                      
                                            <p>On Leave</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard -->
                        
                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/overtime" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-user-clock"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $overtimes }} --}}
                                            </span>
                                            <br>   
                                            <p>Overtime</p>                                        
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard -->    
                        
                        
                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/official-business" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-suitcase"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $officialbusinesses }} --}}
                                            </span>
                                            <br>   
                                            <p>On Official Business</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard --> 
                    </div>
                    <div class="row">
                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/absent-late" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-user-times"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $absentlates }} --}}
                                            </span>  <br>   
                                            <p>Absent/Late</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard -->            
                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/dashboard/pendingapprovals" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-book-reader"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $totalPendings }} --}}
                                            </span>  <br>   
                                            <p>Pending Approval</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard -->            
                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/undertime" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-clock"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $undertimes }} --}}
                                            </span>  <br>   
                                            <p>Undertime</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard -->            
                    </div><!-- row -->
                    <div class="row">
                        <div class="col-md-4 singlecard">
                            <div class="card">
                                <a href="/dashboard/expiredlicenses" class="btn">
                                    <div class="card-body">
                                        <i class="fas fa-id-card"></i>
                                        <div class="card-text">
                                            <span class="count">
                                                {{-- {{ $expiredprofessionallicenses }} --}}
                                            </span>
                                            <p>Expired Professional<br /> License</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div><!-- singlecard -->
                    </div><!-- row -->
                </div>

                <div class="col-3 no-gutters">
                    <div class="col singlecard vaxcard">
                        <div class="card">
                            <a href="/dashboard/vaccination" class="btn">
                                <div class="card-body"> 
                                    <i class="fas fa-shield-virus"></i>
                                    <div class="card-text">
                                        <p>Vaccination</p>
                                    </div>
                                    <ul>
                                        <li>Vaccinated <span>3</span></li>
                                        <li>Unvaccinated <span>2</span></li>
                                        <li>Booster Shot <span>3</span></li>
                                        <li>No Data <span>2</span></li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div><!-- singlecard -->
                </div>            
            </div><!-- row -->        
        </div><!-- container -->
    </div><!-- section -->
</section>
@endsection
