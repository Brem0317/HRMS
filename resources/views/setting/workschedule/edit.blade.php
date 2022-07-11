@extends('layouts.app')

@section('content')
<div class="section-work-schedule">
    <div class="breadCrumb workScheduleTitleBreadCrumbs">
        <x-breadcrumbs breadCrumbs="SETTINGS / WORK SCHEDULE "/>
    </div>
    <div class="card">
        <div class="card-header">
            {{$workTemplate->cl_template_name}} Work Schedule
        </div>
        <form action="/work-schedule/updateCustom/{{$workTemplate->id}}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <!-- Regular Schedule-->
                <div class="regular-schedule">
                    <table>
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
                                <!-- <th class="w-10">Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @if($customMonday)
                                    <td><input type="text" value="{{$customMonday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customMonday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customMonday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Monday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>

                            <tr>
                                @if($customTuesday)
                                    <td><input type="text" value="{{$customTuesday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Tuesday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>
                            
                            <tr>
                                @if($customWednesday)
                                    <td><input type="text" value="{{$customWednesday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customWednesday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customWednesday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Wednesday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>
                            
                            <tr>
                                @if($customThursday)
                                    <td><input type="text" value="{{$customThursday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customThursday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customThursday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Thursday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>
                            
                            <tr>
                                @if($customFriday)
                                    <td><input type="text" value="{{$customFriday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customFriday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customFriday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Friday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>
                            
                            <tr>
                                @if($customSaturday)
                                    <td><input type="text" value="{{$customTuesday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Saturday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>
                            
                            <tr>
                                @if($customSunday)
                                    <td><input type="text" value="{{$customTuesday->cl_working_day}}" name="schedule_day" readonly></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_in}}" name="morning_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_break_out}}" name="morning_break_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_break_in}}" name="morning_break_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_morning_out}}" name="morning_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_in}}" name="afternoon_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_break_out}}" name="afternoon_break_out"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_afternoon_break_in}}" name="afternoon_break_in"/></td>
                                    <td><input type="time" value="{{$customTuesday->cl_end_of_day}}" name="end_of_day"/></td>
                                @else
                                    <td><input type="text" value="Sunday" name="schedule_day" readonly></td>
                                    <td><input type="time" name="morning_in"/></td>
                                    <td><input type="time" name="morning_break_out"/></td>
                                    <td><input type="time" name="morning_break_in"/></td>
                                    <td><input type="time" name="morning_out"/></td>
                                    <td><input type="time" name="afternoon_in"/></td>
                                    <td><input type="time" name="afternoon_break_out"/></td>
                                    <td><input type="time" name="afternoon_break_in"/></td>
                                    <td><input type="time" name="end_of_day"/></td>
                                @endif
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer text-right">
                <button class="btn" id="editSubmitOvertimeBtn">Update</button>
            </div>
        </form>
    </div>
</div>

<!-- <script src="{{asset('js/work-schedule.js')}}"></script> -->
@endsection