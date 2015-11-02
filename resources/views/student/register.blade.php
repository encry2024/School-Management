@extends('template')


@section('header')
<div class="ui segment blue inverted" style="border-radius: 0px;">HOLY INFANT MONTESSORI CENTER</div>
@stop


@section('content')
<div class="ui center aligned container grid">
    <div class="ui eleven wide column">
        <div class="ui ordered steps">
            <div class="active step">
                <div class="content">
                    <div class="title">Registration Form</div>
                    <div class="description">Provide the correct information to <br> proceed to the next step</div>
                </div>
            </div>
            <div class="step">
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
        <div class="ui piled segments" style="margin-top: 1.5rem;">
            <div class="ui segment">
                <h2 class="">Registration Form</h2>
            </div>
            <div class="ui segment blue">
                <form class="ui form" action="{{ route('student.store') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="ui error message"></div>

                    <div class="ui horizontal divider">
                        Personal Information
                    </div>

                    <div class="field">
                        <div class="field"><input type="text" placeholder="Firstname" name="fname"></div>
                        <div class="field"><input type="text" placeholder="Middlename" name="mname"></div>
                        <div class="field"><input type="text" placeholder="Lastname" name="lname"></div>
                        <div class="field">
                            <div class="ui selection dropdown">
                                <input type="hidden" name="gender">
                                <i class="dropdown icon"></i>
                                <div class="default text">Gender</div>
                                <div class="menu">
                                    <div class="item" data-value="m">Male</div>
                                    <div class="item" data-value="f">Female</div>
                                    <div class="item" data-value="o">Other</div>
                                </div>
                            </div>
                        </div>
                        <div class="field"><input type="text" name="contact" placeholder="Contact Number"></div>
                        <div class="field"><input type="text" name="p_address" placeholder="Address"></div>
                        <div class="field"><input type="text" name="dob" placeholder="Date of Birth"></div>
                    </div>

                    <div class="ui horizontal divider">
                        Family Information
                    </div>

                    <div class="three fields">
                        <div class="field"><input type="text" name="mother_name" placeholder="Mother's Name"></div>
                        <div class="field"><input type="text" name="mother_num" placeholder="Contact Number"></div>
                        <div class="field"><input type="text" name="mother_occ" placeholder="Occupation"></div>
                    </div>

                    <div class="field">
                        <div class="field"><input type="text" name="mother_work_add" placeholder="Work Address"></div>
                    </div>

                    <div class="three fields">
                        <div class="field"><input type="text" name="father_name" placeholder="Father's Name"></div>
                        <div class="field"><input type="text" name="father_num" placeholder="Contact Number"></div>
                        <div class="field"><input type="text" name="father_occ" placeholder="Occupation"></div>
                    </div>

                    <div class="field">
                        <div class="field"><input type="text" name="father_work_add" placeholder="Work Address"></div>
                    </div>

                    <div class="ui fluid buttons">
                        <button class="ui negative button">CANCEL</button>
                        <div class="or"></div>
                        <button class="ui positive button" type="submit">NEXT</button>
                    </div>
               </form>
            </div>
        </div>
    </div>
</div>
@stop


@section('script')
<script>
    $(".ui.dropdown").dropdown();

    // Form validation
    $('.ui.form')
        .form({
            fields: {
                fname: {
                    identifier: 'fname',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter your Firstname'
                        }
                    ]
                },
                mname: {
                    identifier: 'mname',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter your Middlename'
                        }
                    ]
                },
                lname: {
                    identifier: 'lname',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter your Lastname'
                        }
                    ]
                },
                contact: {
                    identifier: 'contact',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter your Contact Number'
                        },
                        {
                            type   : 'number',
                            prompt : 'Invalid personal contact number'
                        },
                        {
                            type   : 'minLength[9]',
                            prompt : 'Make sure you have entered [7-11] digit of your contact number.'
                        },
                        {
                            type   : 'maxLength[11]',
                            promtp : 'Make sure you have entered [7-11] digit of your contact number'
                        }
                    ]
                },
                gender: {
                    identifier: 'gender',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please select a gender'
                        }
                    ]
                },
                address: {
                    identifier: 'p_address',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please select at least two skills'
                        }
                    ]
                },
                dob: {
                    indentifier: 'dob',
                    rules: [
                        {
                            type  : 'empty',
                            prompt: 'Please provide your Date of Birth'
                        }
                    ]
                },
                mother_name: {
                    identifier: 'mother_name',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter your Father\'s name'
                        }
                    ]
                },
                mother_num: {
                    identifier: 'mother_num',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please provide your Father\'s contact number'
                        },
                        {
                            type   : 'number',
                            prompt : 'You have provided an incorrect contact number of your Father'
                        },
                        {
                            type   : 'minLength[7]',
                            prompt : 'Make sure you entered [7-11] digit of your Father\'s contact number'
                        },
                        {
                            type   : 'maxLength[11]',
                            promtp : 'Make sure you entered [7-11] digit of your Father\'s contact number'
                        }
                    ]
                },
                father: {
                    identifier: 'father_name',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please enter your Father\'s name'
                        }
                    ]
                },
                father_num: {
                    identifier: 'father_num',
                    rules: [
                        {
                            type   : 'empty',
                            prompt : 'Please provide your Father\'s contact number'
                        },
                        {
                            type   : 'number',
                            prompt : 'You have provided an incorrect contact number of your Father'
                        },
                        {
                            type   : 'minLength[7]',
                            prompt : 'Make sure you entered [7-11] digit of your Father\'s contact number'
                        },
                        {
                            type   : 'maxLength[11]',
                            promtp : 'Make sure you entered [7-11] digit of your Father\'s contact number'
                        }
                    ]
                },
            }
        })
    ;
</script>
@stop