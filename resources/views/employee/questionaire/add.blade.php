@extends('layouts.app')

@section('content')
<section>
    <div class="section-questionaire-add">
        <div class="row">
            <div class="col-md-6 breadCrumb">
                <x-breadcrumbs breadCrumbs="Employee / Questionaire"/>
            </div><!-- breadcrumb -->
        </div><!-- row -->
        <div class="card">
            <div class="card-header">
                <x-cardnav employeeId='{{$employeeID}}'/>
            </div><!-- card header -->
            <div class="card-body">
                <form action="/employee-questionaire" method="POST" enctype="multipart/form-data" id="employeeQuestionaire">
                    @csrf
                    <input type="text" value="{{$employeeID}}" hidden name="employeeID" />
                    <div class="col empQuestionaireContent">
                        <div class="fixHeight">
                            <div class="singleQuestion">
                                <p>1. Are you related by consanguinity or affinity to the appointing or recommending authority, or to chief of bureau or office or to the person who has immediate supervision over you in the Bureau or Department where you will be appointed,</p>
                                <div class="singleChoice">
                                    <p>a. within the third degree?</p>
                             
                                    @if($questionaire !== NULL && $questionaire->cl_q1_01 !== NULL)
                                        @if($questionaire->cl_q1_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q1_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q1_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q1_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q1_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q1_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q1_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q1_01"/>No
                                        </label>                                     
                                    @endif

                                </div><!-- single choice -->
                                <div class="singleChoice">
                                    <p>b. within the fourth degree (for Local Government Unit - Career Employees)?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q1_02 !== NULL)
                                        @if($questionaire->cl_q1_02 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q1_02" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q1_02"/>No
                                            </label>
                                        @elseif($questionaire->cl_q1_02 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q1_02"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q1_02" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q1_02"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q1_02"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>

                                    <input type="text" name="q1_02_details" @if(isset($questionaire->cl_q1_02_details)) value="{{$questionaire->cl_q1_02_details}}" @endif>

                                </div><!-- single choice -->
                            </div><!-- single question -->
                            <div class="singleQuestion">
                                <div class="singleChoice">
                                    <p>2. a. Have you ever been found guilty of any administrative offense?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q2_01 !== NULL)
                                        @if($questionaire->cl_q2_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q2_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q2_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q2_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q2_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q2_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q2_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q2_01"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>
                                    
                                    <input type="text" name="q2_01_details" @if(isset($questionaire->cl_q2_01_details)) value="{{$questionaire->cl_q2_01_details}}" @endif>

                                </div><!-- single choice -->
                                <div class="singleChoice">
                                    <p>b. Have you been criminally charged before any court?</p>
                                    
                                    @if($questionaire !== NULL && $questionaire->cl_q2_02 !== NULL)
                                        @if($questionaire->cl_q2_02 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q2_02" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q2_02"/>No
                                            </label>
                                        @elseif($questionaire->cl_q2_02 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q2_02"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q2_02" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q2_02"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q2_02"/>No
                                        </label>                                     
                                    @endif
                                    
                                    <p class="qdetails">if YES, give details:</p>

                                    <input type="date" name="q2_02_details_1" class="qdetailInput" @if(isset($questionaire->cl_q2_02_details_1)) value="{{$questionaire->cl_q2_02_details_1}}" @endif>

                                    <input type="text" name="q2_02_details_2" class="qdetailInput qextradetail" @if(isset($questionaire->cl_q2_02_details_2)) value="{{$questionaire->cl_q2_02_details_2}}" @else placeholder="Status of Case/s..." @endif>

                                </div><!-- single choice -->
                            </div><!-- single question -->                             
                            <div class="singleQuestion">
                                <p>3. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?</p>
                                <div class="singleChoice">

                                    @if($questionaire !== NULL && $questionaire->cl_q3_01 !== NULL)
                                        @if($questionaire->cl_q3_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q3_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q3_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q3_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q3_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q3_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q3_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q3_01"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>
                                    
                                    <input type="text" name="q3_01_details" @if(isset($questionaire->cl_q3_01_details)) value="{{$questionaire->cl_q3_01_details}}" @endif>
                                    

                                </div><!-- single choice -->
                            </div><!-- single question -->
                            <div class="singleQuestion">
                                <p>4. Have you ever been separated from the service in any of the following modes: resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or phased out (abolition) in the public or private sector?</p>
                                <div class="singleChoice">

                                    @if($questionaire !== NULL && $questionaire->cl_q4_01 !== NULL)
                                        @if($questionaire->cl_q4_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q4_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q4_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q4_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q4_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q4_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q4_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q4_01"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>
                                    
                                    <input type="text" name="q4_01_details" @if(isset($questionaire->cl_q4_01_details)) value="{{$questionaire->cl_q4_01_details}}" @endif>

                                </div><!-- single choice -->
                            </div><!-- single question -->
                            <div class="singleQuestion">
                                <div class="singleChoice">
                                    <p>5. a. Have you ever been a candidate in a national or local election held within the last year (except Barangay election)?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q5_01 !== NULL)
                                        @if($questionaire->cl_q5_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q5_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q5_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q5_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q5_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q5_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q5_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q5_01"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>
                                    
                                    <input type="text" name="q5_01_details" @if(isset($questionaire->cl_q5_01_details)) value="{{$questionaire->cl_q5_01_details}}" @endif>

                                </div><!-- single choice -->
                                <div class="singleChoice">
                                    <p>b. Have you resigned from the government service during the three (3)-month period before the last election to promote/actively campaign for a national or local candidate?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q5_02 !== NULL)
                                        @if($questionaire->cl_q5_02 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q5_02" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q5_02"/>No
                                            </label>
                                        @elseif($questionaire->cl_q5_02 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q5_02"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q5_02" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q5_02"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q5_02"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>

                                    <input type="date" name="q5_02_details_1" class="qdetailInput" @if(isset($questionaire->cl_q5_02_details_1)) value="{{$questionaire->cl_q5_02_details_1}}" @endif>

                                    <input type="text" name="q5_02_details_2" class="qdetailInput qextradetail" @if(isset($questionaire->cl_q5_02_details_2)) value="{{$questionaire->cl_q5_02_details_2}}" @else placeholder="Status of Case/s..." @endif>

                                </div><!-- single choice -->
                            </div><!-- single question -->
                            <div class="singleQuestion">
                                <p>6. Have you acquired the status of an immigrant or permanent resident of another country?</p>
                                <div class="singleChoice">

                                    @if($questionaire !== NULL && $questionaire->cl_q6_01 !== NULL)
                                        @if($questionaire->cl_q6_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q6_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q6_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q6_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q6_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q6_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q6_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q6_01"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>
                                    
                                    <input type="text" name="q6_01_details" @if(isset($questionaire->cl_q6_01_details)) value="{{$questionaire->cl_q6_01_details}}" @endif> 

                                </div><!-- single choice -->
                            </div><!-- single question -->
                            <div class="singleQuestion">
                                <p>7. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following</p>
                                <div class="singleChoice">
                                    <p for="q7_01">a. Are you a member of any indigenous group?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q7_01 !== NULL)
                                        @if($questionaire->cl_q7_01 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q7_01" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q7_01"/>No
                                            </label>
                                        @elseif($questionaire->cl_q7_01 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q7_01"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q7_01" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q7_01"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q7_01"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, give details:</p>

                                    <input type="text" name="q7_01_details" @if(isset($questionaire->cl_q7_01_details)) value="{{$questionaire->cl_q7_01_details}}" @endif>

                                </div><!-- single choice -->
                                <div class="singleChoice">
                                    <p for="q7_02">b. Are you a person with disability?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q7_02 !== NULL)
                                        @if($questionaire->cl_q7_02 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q7_02" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q7_02"/>No
                                            </label>
                                        @elseif($questionaire->cl_q7_02 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q7_02"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q7_02" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q7_02"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q7_02"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, please specify with ID No:</p>

                                    <input type="text" name="q7_02_details" @if(isset($questionaire->cl_q7_02_details)) value="{{$questionaire->cl_q7_02_details}}" @endif>

                                </div><!-- single choice -->
                                <div class="singleChoice">
                                    <p for="q7_03">c. Are you a solo parent?</p>

                                    @if($questionaire !== NULL && $questionaire->cl_q7_03 !== NULL)
                                        @if($questionaire->cl_q7_03 == "Yes")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q7_03" checked/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q7_03"/>No
                                            </label>
                                        @elseif($questionaire->cl_q7_03 == "No")
                                            <label>
                                                <input type="radio" value="Yes" id="yes" name="q7_03"/>Yes
                                            </label>
                                            <label>
                                                <input type="radio" value="No" id="no" name="q7_03" checked/>No
                                            </label>
                                        @endif
                                    @else
                                        <label>
                                            <input type="radio" value="Yes" id="yes" name="q7_03"/>Yes
                                        </label>
                                        <label>
                                            <input type="radio" value="No" id="no" name="q7_03"/>No
                                        </label>                                     
                                    @endif

                                    <p class="qdetails">if YES, please specify with ID No:</p>

                                    <input type="text" name="q7_03_details" @if(isset($questionaire->cl_q7_03_details)) value="{{$questionaire->cl_q7_03_details}}" @endif>
                                    
                                </div><!-- single choice -->
                            </div><!-- single question -->   
                            <div class="singleQuestion">
                                <h5>OATH</h5>
                                <div class="singleChoice">
                                    <p>By clicking "NEXT", I declare under oath that I have personally accomplished this Personal Data Sheet which is a true, correct and complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein. I agree that any is representation made in this document and its attachments shall cause the filing of administrative/criminal case/s against me.</p>
                                </div><!-- single choice -->
                            </div><!-- single question -->   
                        </div><!-- fix height -->
                        <button class="btn footerBtn sectionAddBtn">Next</button>
                    </div><!-- questionaire content -->                                    
                </form><!-- form -->
            </div><!-- card body -->
            <div class="card-footer">
            </div><!-- card footer -->
        </div><!-- card -->
    </div><!-- section questionaire add -->
</section>
@endsection