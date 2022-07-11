@extends('layouts.app')
@section('content')
<section>
    <div class="section-vaccination-list">
        <div class="row">
            <div class="col-md-6">
                <x-breadcrumbs breadCrumbs="Dashboard / Vaccinated"/>
            </div> 
            <div class="col-md-6 vaccinationlistcounter">
                <ul>
                    <li>Vaccinated <span>(3)</span></li>
                    <li>Booster Shot <span>(3)</span></li>
                    <li>Unvaccinated <span>(2)</span></li>
                    <li>No Data <span>(2)</span></li>
                </ul>
            </div><!-- vaccinationlistcounter -->
        </div><!-- row -->
        <div class="row">
            <div class="card employeevaccination">
                <div class="card-header">Employee Vaccination</div>
                <div class="card-body">
                    <div class="row">
                        <div class="inputSearch">
                            <input type="text" class="form-control search-input"  data-table="employeeVaccionationList" placeholder="Search...">                    
                        </div>                    
                        <div class="fixHeight">
                            <table class="employeeVaccionationList">
                                <thead>
                                    <tr>
                                        <th>Employee Number</th>
                                        <th>Full Name</th>
                                        <th>Department</th>
                                        <th>Vaccine</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody> 
                                    <tr>
                                        <td>JCAH20190092</td>
                                        <td>John Carl A. Hicban</td>
                                        <td>Development</td>
                                        <td>Sinovac</td>
                                        <td class="red">Unvaccinated</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>JDS20190062</td>
                                        <td>Jamar D. Usman</td>
                                        <td>Development</td>
                                        <td>Pfizer</td>
                                        <td class="red">Unvaccinated</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>NTK20190007</td>
                                        <td>Norhan T. Kanim</td>
                                        <td>Development</td>
                                        <td>---</td>
                                        <td class="red">No Data</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>EDU20190045</td>
                                        <td>Ella D. Usman</td>
                                        <td>Development</td>
                                        <td>---</td>
                                        <td class="red">No Data</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>INM20190098</td>
                                        <td>Irvin M. Martinico</td>
                                        <td>Development</td>
                                        <td>Pfizer</td>
                                        <td class="green">Vaccinated</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>      
                                    <tr>
                                        <td>JLE20190590</td>
                                        <td>Joel L. Embang</td>
                                        <td>Accounting</td>
                                        <td>Johnson & Johnson</td>
                                        <td class="green">Vaccinated</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>                                       
                                    <tr>
                                        <td>JDB20190007</td>
                                        <td>Jerwin D. Bueson</td>
                                        <td>Technical</td>
                                        <td>Pfizer</td>
                                        <td class="green">Booster Shot</td>
                                        <td><a href="#"><i class="fas fa-pen"></i></a></td>
                                    </tr>                
                                </tbody>                 
                            </table><!-- employeeVaccionationList -->
                        </div><!-- fix height -->
                    </div><!-- row -->
                </div><!-- card-body -->
            </div><!-- pendinglistleave -->
        </div><!-- row -->
    </div><!-- section vaccination list -->
</section>
<script src="{{asset('js/search.js')}}"></script>
@endsection