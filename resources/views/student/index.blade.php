@extends('template')


@section('header')
    @include('util.header')
@stop


@section('content')
<div class="ui centered grid">
    <div class="three wide column">
        @include('util.user_menu')
    </div>

    <div class="ten wide column"
         id="content">

        <div class="twelve wide column grid">
            <div class="ui breadcrumb" style="font-size: 13px;">
                <a class="section" href="{{ url('/') }}">Dashboard</a>
                <i class="right angle icon divider"></i>
                <div class="active section">Students</div>
            </div>

            <h2 class="ui header">
                <div class="content">
                    <i class="student icon"></i> Students

                </div>
                <button class="ui negative small right floated button">
                    <i class="trash icon"></i>
                    Delete
                </button>
                <div class="ui divider"></div>
            </h2>

            <div class="ui grid">

                <div class="sixteen wide column">
                    <div class="ui labeled button" tabindex="0">
                        <div class="ui red button">
                            Registered Students
                        </div>
                        <a class="ui basic red left pointing label">
                            0
                        </a>
                    </div>
                    <div class="ui labeled button" tabindex="0">
                        <div class="ui red button">
                            Pending Students
                        </div>
                        <a class="ui basic left pointing red label">
                            0
                        </a>
                    </div>
                    <table class="ui basic table" style="font-size: 13px;">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Role</th>
                                <th>Notes</th>
                                <th>
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label></label>
                                    </div>
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>John</td>
                                <td>Admin</td>
                                <td>None</td>
                                <td>
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jamie</td>
                                <td>Accounting</td>
                                <td>Requires call</td>
                                <td>
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label></label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Jill</td>
                                <td>Professor</td>
                                <td>None</td>
                                <td>
                                    <div class="ui checkbox">
                                        <input type="checkbox">
                                        <label></label>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="ui grid">

        </div>
    </div>

    <div class="two wide column">
        <div class="ui vertical fluid right tabular menu" style="height: 100%;">
            <a style="font-size: 13px;" class="item" href="{{ route('/') }}">
                Dashboard <i class="dashboard icon"></i>
            </a>

            <a style="font-size: 13px;" class="item" href="{{ route('user.index') }}">
                Roles & Users <i class="users icon"></i>
            </a>

            <a style="font-size: 13px;" class="item active">
                Students <i class="student icon"></i>
            </a>

            <a style="font-size: 13px;" class="item" href="{{ route('subject.index') }}">
                Subjects <i class="book icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Teachers <i class="spy icon"></i>
            </a>

            <a style="font-size: 13px;" class="item" href="{{ route('exam.index') }}">
                Exams <i class="file text outline icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Timetable <i class="wait icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Finances <i class="money icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Mail <i class="mail icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Freedom Box <i class="feed icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Activities <i class="lightning icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Technical Support
            </a>
        </div>
    </div>
</div>
@stop


@section('script')
<script>
    $(".ui.dropdown").dropdown();
</script>
@stop