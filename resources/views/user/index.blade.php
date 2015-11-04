@extends('template')


@section('header')
    @include('util.header')
@stop


@section('content')
    <div class="ui grid">
        <div class="three wide column">
            @include('util.user_menu')
            <table class="ui basic table" style="margin-left: 2.55rem;">
                <thead>
                    <tr>
                        <th>Roles</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td>Accounting</td>
                    </tr>
                    <tr>
                        <td>Professor</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ten wide column"
             style="margin-left: 2rem; margin-top: 0rem; border-radius: 0px; height: 100%; border: none; box-shadow: none;"
             id="content">

            <div class="twelve wide column grid" style="margin-top: 0.5rem;">
                <div class="ui breadcrumb" style="font-size: 13px;">
                    <a class="section" href="{{ url('/') }}">Dashboard</a>
                    <i class="right angle icon divider"></i>
                    <div class="active section">Roles & User</div>
                </div>
                <h2 class="ui header">
                    <div class="content">
                        <i class="users icon"></i> Roles & Users
                    </div>

                    <button class="ui positive small right floated create_role button">
                        <i class="icon user"></i>
                        Create Role
                    </button>

                    <button class="ui negative small right floated  button">
                        <i class="trash icon"></i>
                        Delete
                    </button>

                    <div class="ui divider"></div>
                </h2>

                <div class="ui grid">
                    <div class="sixteen wide column">
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

                <a style="font-size: 13px;" class="item active">
                    Roles & Users <i class="users icon"></i>
                </a>

                <a style="font-size: 13px;" class="item" href="{{ route('student.index') }}">
                    Students <i class="student icon"></i>
                </a>

                <a style="font-size: 13px;" class="item" href="{{ route('subject.index') }}">
                    Subjects <i class="book icon"></i>
                </a>

                <a style="font-size: 13px;" class="item">
                    Professors <i class="spy icon"></i>
                </a>

                <a style="font-size: 13px;" class="item">
                    Courses <i class="certificate icon"></i>
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

    {{-- Create Role --}}
    <div class="ui small role modal">
        <div class="header">Create Role</div>
        <div class="content">
            <p></p>
            <p></p>
            <p></p>
        </div>
    </div>
@stop


@section('script')
    <script type="text/javascript">
        $('.ui.dropdown').dropdown();

        $('.role.modal').modal('attach events', '.create_role', 'show');
    </script>
@stop