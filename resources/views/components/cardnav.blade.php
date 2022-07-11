
<div class="section-card-nav">
    <ul>
        <li class="{{ (Request()->is('employee/*/edit')) ? 'active' : ''}}">
            <a href="/employee/{{$employeeId}}/edit">Personal Information</a>
        </li>
        <li class="{{ (Request()->is('employee-spouse/*/edit')) ? 'active' : ''}}">
            <a href="/employee-spouse/{{$employeeId}}/edit">Family Background</a>
        </li>
        <li class="{{ (Request()->is('employee-educational-background/*/edit')) ? 'active' : ''}}">
            <a href="/employee-educational-background/{{$employeeId}}/edit">Educational Background</a>
        </li>
        <li class="{{ (Request()->is('employee-civil-service/*/edit')) ? 'active' : ''}}">
            <a href="/employee-civil-service/{{$employeeId}}/edit">Civil Service Eligibility</a>
        </li>
        <li class="{{ (Request()->is('employee-work-experience/*/edit')) ? 'active' : ''}}">
            <a href="/employee-work-experience/{{$employeeId}}/edit">Work Experience</a>
        </li>
        <li class="{{ (Request()->is('employee-other-trainings/*/edit')) ? 'active' : ''}}">
            <a href="/employee-other-trainings/{{$employeeId}}/edit">Other Trainings</a>
        </li>
        <li class="{{ (Request()->is('employee-questionaire/*/edit')) ? 'active' : ''}}">
            <a href="/employee-questionaire/{{$employeeId}}/edit">Questionaire</a>
        </li>
        <li class="{{ (Request()->is('employee-benefits/*/edit')) ? 'active' : ''}}">
            <a href="/employee-benefits/{{$employeeId}}/edit">Benefits</a>
        </li>
        <li class="{{ (Request()->is('employee-awards-infactions/*/edit')) ? 'active' : ''}}">
            <a href="/employee-awards-infractions/{{$employeeId}}/edit">Awards / Infractions</a>
        </li>
        <li class="{{ (Request()->is('employee-character-reference/*/edit')) ? 'active' : ''}}">
            <a href="/employee-character-reference/{{$employeeId}}/edit">Character References</a>
        </li>
        <li class="{{ (Request()->is('employee-medical-result/*/edit')) ? 'active' : ''}}">
            <a href="/employee-medical-result/{{$employeeId}}/edit">Medical Information</a>
        </li>
        <li class="{{ (Request()->is('employee-pre-employment/*/edit')) ? 'active' : ''}}">
            <a href="/employee-pre-employment/{{$employeeId}}/edit">Pre-Employment Requirements</a>
        </li>
    </ul>

</div>

