@extends('template')


@section('header')
@include('util.header')
@stop


@section('content')
<div class="ui centered grid">
    <div class="three wide column">
        <div class="ui card" >
            <div class="content">
                <a class="header">{{ Auth::user()->name }}</a>
                <div class="meta">
                    <span class="date">Administrator</span>
                </div>
            </div>
            <div class="extra content">
                <a href="{{ route('exam.create') }}"><i class="file text outline icon"></i>Create Exam</a>
                <br>
                <a href=""><i class="trash icon"></i>Delete Exam(s)</a>
                <br>
                <a><i class="Archive icon"></i>Manage Exams</a>
                <br>
                <a><i class="Folder Open icon"></i>Group Exams</a>
                <br>
                <a href=""><i class="Asterisk icon"></i>Special Exams</a>
            </div>
        </div>
    </div>

    <div class="ten wide column"

         id="content">

        <div class="twelve wide column grid">
            <div class="ui breadcrumb"
                 style="
                    font-size: 13px;
                 ">
                <a class="section" href="{{ url('/') }}">Dashboard</a>
                <i class="right angle icon divider"></i>
                <div class="active section">Exams</div>
            </div>

            <h2 class="ui header">
                <div class="content">
                    <i class="file text outline icon"></i> Exams
                </div>
                <div class="ui divider"></div>
            </h2>

            <div class="ui grid">

                <div class="sixteen wide column">
                    <table class="ui basic table">
                        <thead>
                        <tr>
                            <th>
                                <div class="ui checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div>
                            </th>
                            <th>User</th>
                            <th>Role</th>
                            <th>Notes</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>
                                <div class="ui checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div>
                            </td>
                            <td>John</td>
                            <td>Admin</td>
                            <td>None</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="ui checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div>
                            </td>
                            <td>Jamie</td>
                            <td>Accounting</td>
                            <td>Requires call</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="ui checkbox">
                                    <input type="checkbox">
                                    <label></label>
                                </div>
                            </td>
                            <td>Jill</td>
                            <td>Professor</td>
                            <td>None</td>
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

            <a style="font-size: 13px;" class="item" href="{{ route('student.index') }}">
                Students <i class="student icon"></i>
            </a>

            <a style="font-size: 13px;" class="item" href="{{ route('subject.index') }}">
                Subjects <i class="book icon"></i>
            </a>

            <a style="font-size: 13px;" class="item">
                Teachers <i class="spy icon"></i>
            </a>

            <a style="font-size: 13px;" class="item active">
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
    $('.ui.dropdown').dropdown();
</script>
@stop