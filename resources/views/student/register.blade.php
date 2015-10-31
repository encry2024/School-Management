@extends('template')


@section('header')
<div class="ui menu inverted right aligned blue" style="border-radius: 0rem !important;">
    <div class="header item">Holy Infant Montessori - Registration Form</div>
    <div class="right menu">

    </div>
</div>
@stop


@section('content')
<div class="ui center floated container grid">
    <div class="ui fifteen wide column">
        <form class="ui center aligned form">

            <h2 class="ui dividing header">Personal Information</h2>
            <br>
            <div class="field">
                <h4>Name</h4>
                <div class="three fields">
                    <div class="field">
                        <input type="text" name="fname" placeholder="First Name">
                    </div>
                    <div class="field">
                        <input type="text" name="mname" placeholder="Middle Name">
                    </div>
                    <div class="field">
                        <input type="text" name="lname" placeholder="Last Name">
                    </div>
                </div>

                <h3 for="">Basic Details</h3>
                <div class="three fields">
                    <div class="field"><input type="text" name="address" placeholder="Address"></div>
                    <div class="field"><input type="text" name="dob" placeholder="Date of Birth"></div>
                    <div class="field"><input type="text" name="age" placeholder="Age"></div>
                </div>
            </div>

        </form>
    </div>
</div>
@stop