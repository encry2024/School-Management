@extends('template')


@section('header')
<div class="ui segment blue inverted" style="border-radius: 0px;">
    HOLY INFANT MONTESSORI CENTER
</div>
@stop



@section('content')
<div class="ui center aligned container grid">
    <div class="ui eleven wide column">
        <div class="ui ordered steps">
            <div class="completed step">
                <div class=" content">
                    <div class="title">Registration Form</div>
                    <div class="description">Provide the correct information to <br> proceed to the next step</div>
                </div>
            </div>
            <div class="active step">
                <div class="content">
                    <div class="title">Entrance Exam</div>
                    <div class="description">Complete & Pass the exam to <br/> proceed to Account Creation</div>
                </div>
            </div>
            <div class="step">
                <div class="content">
                    <div class="title">Create Account</div>
                    <div class="description">Will be used to <br/> view your profile</div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui twelve wide column">
        <div class="ui piled segments">
            <div class="ui segment">
                <label for="">{{ $examiner['fname'] }} {{ $examiner['mname'] }} {{ $examiner['lname'] }}</label>
                <br>
                <label for="">{{ $examiner['examiner_id'] }}</label>
            </div>

            <div class="ui segment">
                
            </div>
        </div>
    </div>
</div>
@stop