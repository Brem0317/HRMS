@extends('layouts.app')

@section('content')
<div class="section-work-schedule">
    <div class="breadCrumb workScheduleTitleBreadCrumbs">
        <x-breadcrumbs breadCrumbs="SETTINGS / WORK SCHEDULE "/>
    </div>
    <div class="card">
        <div class="card-header">
            Regular Work Schedule
        </div>
        <div class="card-body">
            <!-- Regular Schedule-->
            <div class="regular-schedule">
                {{-- @foreach($workTemplates as $workTemplate) --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="w-10">Working Days</th>
                                <th class="w-10">Morning In</th>
                                <th class="w-10">Morning Break Out</th>
                                <th class="w-10">Morning Break In</th>
                                <th class="w-10">Morning Out</th>
                                <th class="w-10">Afternoon In</th>
                                <th class="w-10">Afternoon Break Out</th>
                                <th class="w-10">Afternoon Break In</th>
                                <th class="w-10">End of Day</th>
                                <th class="w-10">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>JCAH20190092</td>
                                <td>12312</td>
                                <td>JCAH20190092</td>
                                <td>12312</td>
                                <td>JCAH20190092</td>
                                <td>12312</td>
                                <td>JCAH20190092</td>
                                <td>12312</td>
                                <td>JCAH20190092</td>
                                <td><a href="#"><i class="fas fa-pen"></i></a></td>
                            </tr>
                            {{-- <!-- Monday -->
                            <tr>
                                @if($Monday)
                                    @if($mondaySchedule)
                                    <form action="/work-schedule/update/{{$mondaySchedule->id}}" method="POST">
                                        @csrf
                                        @method('get')
                                            <td><input type="text" value="{{$mondaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$mondaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Monday->cl_working_day}}</td>
                                        <td>{{$Monday->cl_morning_in}}</td>
                                        <td>{{$Monday->cl_morning_break_out}}</td>
                                        <td>{{$Monday->cl_morning_break_in}}</td>
                                        <td>{{$Monday->cl_morning_out}}</td>
                                        <td>{{$Monday->cl_afternoon_in}}</td>
                                        <td>{{$Monday->cl_afternoon_break_out}}</td>
                                        <td>{{$Monday->cl_afternoon_break_in}}</td>
                                        <td>{{$Monday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Monday->id}}" name="monday_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Monday" name="schedule_day" readonly></td>
                                        <td><input type="time" value="07:00:00"name="morning_in"/></td>
                                        <td><input type="time" value="10:00:00" name="morning_break_out"/></td>
                                        <td><input type="time" value="10:15:00" name="morning_break_in"/></td>
                                        <td><input type="time" value="12:00:00" name="morning_out"/></td>
                                        <td><input type="time" value="13:00:00" name="afternoon_in"/></td>
                                        <td><input type="time" value="15:00:00" name="afternoon_break_out"/></td>
                                        <td><input type="time" value="15:15:00" name="afternoon_break_in"/></td>
                                        <td><input type="time" value="17:00:00" name="end_of_day"/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                            <!-- Tuesday -->
                            <tr>
                                @if($Tuesday)
                                    @if($tuesdaySchedule)
                                        <form action="/work-schedule/update/{{$tuesdaySchedule->id}}" method="POST">
                                            @csrf
                                            @method('get')
                                            <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                            <td><input type="text" value="{{$tuesdaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$tuesdaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Tuesday->cl_working_day}}</td>
                                        <td>{{$Tuesday->cl_morning_in}}</td>
                                        <td>{{$Tuesday->cl_morning_break_out}}</td>
                                        <td>{{$Tuesday->cl_morning_break_in}}</td>
                                        <td>{{$Tuesday->cl_morning_out}}</td>
                                        <td>{{$Tuesday->cl_afternoon_in}}</td>
                                        <td>{{$Tuesday->cl_afternoon_break_out}}</td>
                                        <td>{{$Tuesday->cl_afternoon_break_in}}</td>
                                        <td>{{$Tuesday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Tuesday->id}}" name="tuesdays_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Tuesday" name="schedule_day" readonly/></td>
                                        <td><input type="time" value="07:00:00" name="morning_in"/></td>
                                        <td><input type="time" value="10:00:00" name="morning_break_out"/></td>
                                        <td><input type="time" value="10:15:00" name="morning_break_in"/></td>
                                        <td><input type="time" value="12:00:00" name="morning_out"/></td>
                                        <td><input type="time" value="13:00:00" name="afternoon_in"/></td>
                                        <td><input type="time" value="15:00:00" name="afternoon_break_out"/></td>
                                        <td><input type="time" value="15:15:00" name="afternoon_break_in"/></td>
                                        <td><input type="time" value="17:00:00" name="end_of_day"/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                            <!-- Wednesday -->
                            <tr>
                                @if($Wednesday)
                                    @if($wednesdaySchedule)
                                        <form action="/work-schedule/update/{{$wednesdaySchedule->id}}" method="POST">
                                            @csrf
                                            @method('get')
                                            <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                            <td><input type="text" value="{{$wednesdaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$wednesdaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Wednesday->cl_working_day}}</td>
                                        <td>{{$Wednesday->cl_morning_in}}</td>
                                        <td>{{$Wednesday->cl_morning_break_out}}</td>
                                        <td>{{$Wednesday->cl_morning_break_in}}</td>
                                        <td>{{$Wednesday->cl_morning_out}}</td>
                                        <td>{{$Wednesday->cl_afternoon_in}}</td>
                                        <td>{{$Wednesday->cl_afternoon_break_out}}</td>
                                        <td>{{$Wednesday->cl_afternoon_break_in}}</td>
                                        <td>{{$Wednesday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Wednesday->id}}" name="wednesday_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Wednesday" name="schedule_day" readonly></td>
                                        <td><input type="time" value="07:00:00" name="morning_in"/></td>
                                        <td><input type="time" value="10:00:00" name="morning_break_out"/></td>
                                        <td><input type="time" value="10:15:00" name="morning_break_in"/></td>
                                        <td><input type="time" value="12:00:00" name="morning_out"/></td>
                                        <td><input type="time" value="13:00:00" name="afternoon_in"/></td>
                                        <td><input type="time" value="15:00:00" name="afternoon_break_out"/></td>
                                        <td><input type="time" value="15:15:00" name="afternoon_break_in"/></td>
                                        <td><input type="time" value="17:00:00" name="end_of_day"/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                            <!-- Thursday -->
                            <tr>
                                @if($Thursday)
                                    @if($thursdaySchedule)
                                        <form action="/work-schedule/update/{{$thursdaySchedule->id}}" method="POST">
                                            @csrf
                                            @method('get')
                                            <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                            <td><input type="text" value="{{$thursdaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$thursdaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Thursday->cl_working_day}}</td>
                                        <td>{{$Thursday->cl_morning_in}}</td>
                                        <td>{{$Thursday->cl_morning_break_out}}</td>
                                        <td>{{$Thursday->cl_morning_break_in}}</td>
                                        <td>{{$Thursday->cl_morning_out}}</td>
                                        <td>{{$Thursday->cl_afternoon_in}}</td>
                                        <td>{{$Thursday->cl_afternoon_break_out}}</td>
                                        <td>{{$Thursday->cl_afternoon_break_in}}</td>
                                        <td>{{$Thursday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Thursday->id}}" name="thursday_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Thursday" name="schedule_day" readonly></td>
                                        <td><input type="time" value="07:00:00" name="morning_in"/></td>
                                        <td><input type="time" value="10:00:00" name="morning_break_out"/></td>
                                        <td><input type="time" value="10:15:00" name="morning_break_in"/></td>
                                        <td><input type="time" value="12:00:00" name="morning_out"/></td>
                                        <td><input type="time" value="13:00:00" name="afternoon_in"/></td>
                                        <td><input type="time" value="15:00:00" name="afternoon_break_out"/></td>
                                        <td><input type="time" value="15:15:00" name="afternoon_break_in"/></td>
                                        <td><input type="time" value="17:00:00" name="end_of_day"/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                            <!-- Friday -->
                            <tr>
                                @if($Friday)
                                    @if($fridaySchedule)
                                        <form action="/work-schedule/update/{{$fridaySchedule->id}}" method="POST">
                                            @csrf
                                            @method('get')
                                            <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                            <td><input type="text" value="{{$fridaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$fridaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Friday->cl_working_day}}</td>
                                        <td>{{$Friday->cl_morning_in}}</td>
                                        <td>{{$Friday->cl_morning_break_out}}</td>
                                        <td>{{$Friday->cl_morning_break_in}}</td>
                                        <td>{{$Friday->cl_morning_out}}</td>
                                        <td>{{$Friday->cl_afternoon_in}}</td>
                                        <td>{{$Friday->cl_afternoon_break_out}}</td>
                                        <td>{{$Friday->cl_afternoon_break_in}}</td>
                                        <td>{{$Friday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Friday->id}}" name="friday_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Friday" name="schedule_day" readonly></td>
                                        <td><input type="time" value="07:00:00" name="morning_in"/></td>
                                        <td><input type="time" value="10:00:00" name="morning_break_out"/></td>
                                        <td><input type="time" value="10:15:00" name="morning_break_in"/></td>
                                        <td><input type="time" value="12:00:00" name="morning_out"/></td>
                                        <td><input type="time" value="13:00:00" name="afternoon_in"/></td>
                                        <td><input type="time" value="15:00:00" name="afternoon_break_out"/></td>
                                        <td><input type="time" value="15:15:00" name="afternoon_break_in"/></td>
                                        <td><input type="time" value="17:00:00" name="end_of_day"/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                            <!-- Saturday -->
                            <tr>
                                @if($Saturday)
                                    @if($saturdaySchedule)
                                        <form action="/work-schedule/update/{{$saturdaySchedule->id}}" method="POST">
                                            @csrf
                                            @method('get')
                                            <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                            <td><input type="text" value="{{$saturdaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$saturdaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Saturday->cl_working_day}}</td>
                                        <td>{{$Saturday->cl_morning_in}}</td>
                                        <td>{{$Saturday->cl_morning_break_out}}</td>
                                        <td>{{$Saturday->cl_morning_break_in}}</td>
                                        <td>{{$Saturday->cl_morning_out}}</td>
                                        <td>{{$Saturday->cl_afternoon_in}}</td>
                                        <td>{{$Saturday->cl_afternoon_break_out}}</td>
                                        <td>{{$Saturday->cl_afternoon_break_in}}</td>
                                        <td>{{$Saturday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Saturday->id}}" name="saturday_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Saturday" name="schedule_day" readonly required></td>
                                        <td><input type="time" name="morning_in" required/></td>
                                        <td><input type="time" name="morning_break_out" required/></td>
                                        <td><input type="time" name="morning_break_in" required/></td>
                                        <td><input type="time" name="morning_out" required/></td>
                                        <td><input type="time" name="afternoon_in" required/></td>
                                        <td><input type="time" name="afternoon_break_out" required/></td>
                                        <td><input type="time" name="afternoon_break_in" required/></td>
                                        <td><input type="time" name="end_of_day" required/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                            <!-- Sunday -->
                            <tr>
                                @if($Sunday)
                                    @if($sundaySchedule)
                                        <form action="/work-schedule/update/{{$sundaySchedule->id}}" method="POST">
                                            @csrf
                                            @method('get')
                                            <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                            <td><input type="text" value="{{$sundaySchedule->cl_working_day}}" name="schedule_day" readonly></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_morning_in}}" name="morning_in"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_morning_break_out}}" name="morning_break_out"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_morning_break_in}}" name="morning_break_in"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_morning_out}}" name="morning_out"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_afternoon_in}}" name="afternoon_in"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                            <td><input type="time" value="{{$sundaySchedule->cl_end_of_day}}" name="end_of_day"/></td>
                                            <td>
                                                <button class="btn btn-update">Save</button>
                                            </td>
                                        </form>
                                    @else
                                        <td>{{$Sunday->cl_working_day}}</td>
                                        <td>{{$Sunday->cl_morning_in}}</td>
                                        <td>{{$Sunday->cl_morning_break_out}}</td>
                                        <td>{{$Sunday->cl_morning_break_in}}</td>
                                        <td>{{$Sunday->cl_morning_out}}</td>
                                        <td>{{$Sunday->cl_afternoon_in}}</td>
                                        <td>{{$Sunday->cl_afternoon_break_out}}</td>
                                        <td>{{$Sunday->cl_afternoon_break_in}}</td>
                                        <td>{{$Sunday->cl_end_of_day}}</td>
                                        <td>
                                            <form action="/work-schedule" method="POST" class="d-inline">
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" value="{{$Sunday->id}}" name="sunday_id" hidden>
                                                <button class="btn btn-edit">Edit</button>
                                            </form>
                                        </td>
                                    @endif
                                @else
                                    <form action="/work-schedule" method="POST">
                                        @csrf
                                        <input type="text" value="{{$workTemplate->id}}" name="schedule_shift_day" hidden>
                                        <td><input type="text" value="Sunday" name="schedule_day" readonly required></td>
                                        <td><input type="time" name="morning_in" required/></td>
                                        <td><input type="time" name="morning_break_out" required/></td>
                                        <td><input type="time" name="morning_break_in" required/></td>
                                        <td><input type="time" name="morning_out" required/></td>
                                        <td><input type="time" name="afternoon_in" required/></td>
                                        <td><input type="time" name="afternoon_break_out" required/></td>
                                        <td><input type="time" name="afternoon_break_in" required/></td>
                                        <td><input type="time" name="end_of_day" required/></td>
                                        <td><button class="btn btn-setup">Set</button></td>
                                    </form>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                @endforeach --}}
            </div>


            <!-- Custom Schedule -->
            {{-- <div class="customSchedule">
                <div class="customScheduleHeader">
                    <div class="row">
                        <div class="col-md-6 scheduleTitle">
                            Custom Schedule
                        </div>
                        <div class="col-md-6 text-right">
                            <button type="button" class="btn" data-toggle="modal" data-target="#workScheduleModal">Add</button>
                        </div>
                    </div>
                </div>
                <div class="specialSchedule">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Shifts Schedule</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workTemplatesAll as $workTemplatesOne)
                                <tr class="data-row">
                                    <!-- {{$workTemplatesOne->id}} -->
                                    <td class="workScheduleNameClass align-middle w-70">{{$workTemplatesOne->cl_template_name}}</td>
                                    <td class="w-30">
                                        <form action="/work-schedule/{{$workTemplatesOne->id}}/edit" method="POST">
                                            @csrf
                                            @method('GET')
                                            <button class="btn">
                                                <i class="fas fa-pen"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> --}}
        </div>
    </div>
</div>



<!-- ADD MODAl -->
{{-- <div class="modal fade" id="workScheduleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Schedule</h5>
            </div>


            <form action="/work-schedule-addCustom" method="POST" id="settingWorkScheduleForm">
                @csrf
                @method('patch')
                <div class="modal-body">
                    <div class="section-custom-schedule-modal">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Schedule Name</label>
                                    <input type="text" class="form-control" name="work_template_name" placeholder="i.o Partime" required>
                                </div>
                            </div>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="w-10">Working Days</th>
                                    <th class="w-10">Morning In</th>
                                    <th class="w-10">Morning Break Out</th>
                                    <th class="w-10">Morning Break In</th>
                                    <th class="w-10">Morning Out</th>
                                    <th class="w-10">Afternoon In</th>
                                    <th class="w-10">Afternoon Break Out</th>
                                    <th class="w-10">Afternoon Break In</th>
                                    <th class="w-10">End of Day</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><input type="text" value="Monday" name="working_day[]"></td>
                                    <td><input type="time" value="07:00:00" name="morning_in[]"/></td>
                                    <td><input type="time" value="07:00:00" name="morning_break_out[]"/></td>
                                    <td><input type="time" value="07:00:00" name="morning_break_in[]"/></td>
                                    <td><input type="time" value="07:00:00" name="morning_out[]"/></td>
                                    <td><input type="time" value="07:00:00" name="afternoon_in[]"/></td>
                                    <td><input type="time" value="07:00:00" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" value="07:00:00" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" value="07:00:00" name="end_of_day[]"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Tuesday" name="working_day[]"></td>
                                    <td><input type="time" name="morning_in[]"/></td>
                                    <td><input type="time" name="morning_break_out[]"/></td>
                                    <td><input type="time" name="morning_break_in[]"/></td>
                                    <td><input type="time" name="morning_out[]"/></td>
                                    <td><input type="time" name="afternoon_in[]"/></td>
                                    <td><input type="time" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" name="end_of_day[]"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Wednesday" name="working_day[]"></td>
                                    <td><input type="time" name="morning_in[]"/></td>
                                    <td><input type="time" name="morning_break_out[]"/></td>
                                    <td><input type="time" name="morning_break_in[]"/></td>
                                    <td><input type="time" name="morning_out[]"/></td>
                                    <td><input type="time" name="afternoon_in[]"/></td>
                                    <td><input type="time" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" name="end_of_day[]"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Thursday" name="working_day[]"></td>
                                    <td><input type="time" name="morning_in[]"/></td>
                                    <td><input type="time" name="morning_break_out[]"/></td>
                                    <td><input type="time" name="morning_break_in[]"/></td>
                                    <td><input type="time" name="morning_out[]"/></td>
                                    <td><input type="time" name="afternoon_in[]"/></td>
                                    <td><input type="time" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" name="end_of_day[]"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Friday" name="working_day[]"></td>
                                    <td><input type="time" name="morning_in[]"/></td>
                                    <td><input type="time" name="morning_break_out[]"/></td>
                                    <td><input type="time" name="morning_break_in[]"/></td>
                                    <td><input type="time" name="morning_out[]"/></td>
                                    <td><input type="time" name="afternoon_in[]"/></td>
                                    <td><input type="time" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" name="end_of_day[]"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Saturday" name="working_day[]"></td>
                                    <td><input type="time" name="morning_in[]"/></td>
                                    <td><input type="time" name="morning_break_out[]"/></td>
                                    <td><input type="time" name="morning_break_in[]"/></td>
                                    <td><input type="time" name="morning_out[]"/></td>
                                    <td><input type="time" name="afternoon_in[]"/></td>
                                    <td><input type="time" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" name="end_of_day[]"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Sunday" name="working_day[]"></td>
                                    <td><input type="time" name="morning_in[]"/></td>
                                    <td><input type="time" name="morning_break_out[]"/></td>
                                    <td><input type="time" name="morning_break_in[]"/></td>
                                    <td><input type="time" name="morning_out[]"/></td>
                                    <td><input type="time" name="afternoon_in[]"/></td>
                                    <td><input type="time" name="afternoon_break_out[]"/></td>
                                    <td><input type="time" name="afternoon_break_in[]"/></td>
                                    <td><input type="time" name="end_of_day[]"/></td>
                                </tr>
                            </tbody>
                            <!-- <tbody>
                                <tr>
                                    <td><input type="text" value="Monday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Tuesday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Wednesday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Thursday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Friday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Saturday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                                <tr>
                                    <td><input type="text" value="Sunday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                </tr>
                            </tbody> -->
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="workScheduleSubmitBtn">Submit</button>
                </div>
            </form>


        </div>
    </div>
</div> --}}






<script src="{{asset('js/work-schedule.js')}}"></script>
@endsection