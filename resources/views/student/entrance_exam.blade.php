@extends('template')


@section('header')
<div class="ui segment blue inverted" style="border-radius: 0px;">
    HOLY INFANT MONTESSORI CENTER
</div>
@stop


@section('content')
<div class="ui centered grid">
    <div class="ui nine wide column">
        <div class="ui ordered steps">
            <div class="completed step">
                <div class=" content">
                    <div class="title">Registration Form</div>
                    <div class="description">Provide information needed</div>
                </div>
            </div>
            <div class="active step">
                <div class="content">
                    <div class="title">Entrance Exam</div>
                    <div class="description">Pass to proceed to next step</div>
                </div>
            </div>
            <div class="disabled step">
                <div class="content">
                    <div class="title">Create Account</div>
                    <div class="description">Your login credential</div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui fifteen wide column">
        <div class="ui relaxed segments">
            <div class="ui clearing segment left aligned">
                Examiner's Name: <b style="margin-left: 1rem;">{{ $examiner['fname'] }} {{ $examiner['mname'] }} {{ $examiner['lname'] }}</b>
                <label for="" style="margin-left: 35.55rem;">Date today: <b style="margin-left: 3.5rem;">{{ (new \DateTime())->format('F d, Y') }}</b></label>
                <br>
                Examiner's ID: <b style="margin-left: 2.5rem;">{{ $examiner['examiner_id'] }}</b>
                <br>
            </div>
            <div class="ui segment">

            </div>
        </div>
    </div>
</div>
@stop