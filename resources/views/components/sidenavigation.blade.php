<span class="navTime">{{ date('h:i A') }}</span>
<div class="navDate">
    <span>{{ date('l') }}</span>
    <span>{{ date('F j, Y') }}</span>
</div>
<div class="navigation">
    <ul>
        <li>            
            @if(Request::is('login') || Request::is('home') || Request::is('dashboard/*'))
                <a class="active" href="/home"><i class="fas fa-th-large"></i>Dashboard</a>
            @else
                <a href="/home"><i class="fas fa-th-large"></i>Dashboard</a>
            @endif
        </li>
        <li>
            @if(Request::is('employee') || Request::is('employee*'))
                <a class="active" href="/employee-list"><i class="fas fa-user-friends"></i>Employee</a>
            @else
                <a href="/employee-list"><i class="fas fa-user-friends"></i>Employee</a>
            @endif
        </li> 
        <li>
            @if(Request::is('overtime') || Request::is('overtime/*') || Request::is('add-employee-overtime'))
                <a class="active" href="/overtime"><i class="fas fa-user-clock"></i>Overtime</a>
            @else
                <a href="/overtime"><i class="fas fa-user-clock"></i>Overtime</a>
            @endif
        </li>
        <li>
            @if(Request::is('undertime') || Request::is('undertime/*') || Request::is('add-employee-undertime'))
                <a class="active" href="/undertime"><i class="fas fa-clock"></i>Undertime</a>
            @else
                <a href="/undertime"><i class="fas fa-clock"></i>Undertime</a>
            @endif
        </li>
        <li>
            @if(Request::is('leave') || Request::is('leave/*') || Request::is('add-employee-leave'))
                <a class="active" href="/leave"><i class="fas fa-calendar-alt"></i>Leave</a>
            @else
                <a href="/leave"><i class="fas fa-calendar-alt"></i>Leave</a>
            @endif
        </li>
        <li>
            @if(Request::is('official-business') || Request::is('official-business/*') || Request::is('add-employee-official-business'))
                <a class="active" href="/official-business"><i class="fas fa-briefcase"></i>Official Business</a>
            @else
                <a href="/official-business"><i class="fas fa-briefcase"></i>Official Business</a>
            @endif
        </li>
        <li>
            @if(Request::is('absent-late') || Request::is('absent-late/*') || Request::is('add-employee-absent-late'))
                <a class="active" href="/absent-late"><i class="fas fa-user-times"></i>Absent / Late</a>
            @else
                <a href="/absent-late"><i class="fas fa-user-times"></i>Absent / Late</a>
            @endif
        </li>
        <li>
            <a class="{{ (Request()->is('report')) ? 'active' : ''}}" href="#"><i class="fas fa-clipboard-list"></i>Report</a>
        </li>
        <li>
            @if(Request::is('setting') || Request::is('department') || Request::is('position') || Request::is('job-title') || Request::is('employment-status') || Request::is('roles') | Request::is('add-user') || Request::is('user-logs') || Request::is('user-restriction') || Request::is('work-schedule') || Request::is('company-profile'))
                <a class="active" href="/setting"><i class="fas fa-cog"></i>Settings</a>
            @else
                <a href="/setting"><i class="fas fa-cog"></i>Settings</a>                            
            @endif
        </li>
    </ul>
</div><!-- navigation --> 