@extends('template')


@section('header')
@include('util.header')
@stop


@section('content')

<div class="ui centered grid">
    <div class="three wide column">
        <div class="ui card">
            <div class="content">
                <a class="header">{{ Auth::user()->name }}</a>
                <div class="meta">
                    <span class="date">Administrator</span>
                </div>
            </div>
            <div class="ui vertical menu" style="margin-left: -0.045rem; width: 17.673rem;">
                <div class="item">
                    <div class="ui dropdown group">
                        <input name="group" type="hidden">
                        <i class="archive icon"></i>
                        <span class="text">Group it</span>
                        <div class="menu">
                            <div class="ui icon search input">
                                <i class="search icon"></i>
                                <input type="text" placeholder="Search Group...">
                            </div>
                            <div class="scrolling menu">
                                <div class="item">
                                    Important
                                </div>
                                <div class="item">
                                    Announcement
                                </div>
                                <div class="item">
                                    Cannot Fix
                                </div>
                                <div class="item">
                                    News
                                </div>
                                <div class="item">
                                    Enhancement
                                </div>
                                <div class="item">
                                    Change Declined
                                </div>
                                <div class="item">
                                    Off Topic
                                </div>
                                <div class="item">
                                    Interesting
                                </div>
                                <div class="item">
                                    Discussion
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="ui dropdown subject">
                        <input name="subj" type="hidden">
                        <i class="book icon"></i>
                        <span class="text">Choose Subject</span>
                        <div class="menu">
                            <div class="ui icon search input">
                                <i class="search icon"></i>
                                <input type="text" placeholder="Search Subject...">
                            </div>
                            <div class="scrolling menu">
                                <div class="item">
                                    Science
                                </div>
                                <div class="item">
                                    Math
                                </div>
                                <div class="item">
                                    Language
                                </div>
                                <div class="item">
                                    Filipino
                                </div>
                                <div class="item">
                                    GMRC
                                </div>
                                <div class="item">
                                    Chemistry
                                </div>
                                <div class="item">
                                    MAPEH
                                </div>
                                <div class="item">
                                    Reading & Comprehensive
                                </div>
                                <div class="item">
                                    Computer
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header item">Exam Level</div>
                <div class="menu">
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2" checked="checked">
                            <label>Preparatory</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Kinder</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Gradeschool</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Middleschool</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Highschool</label>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <span class="text"><a href="{{ route('exam.index') }}">Back</a></span>
                </div>
            </div>
        </div>
        {{--<div class="ui vertical menu">
            <div class="item">
                <span class="text"><a href="{{ route('exam.index') }}">Back</a></span>
            </div>
            <div class="item">
                <div class="ui dropdown group">
                    <input name="group" type="hidden">
                    <i class="archive icon"></i>
                    <span class="text">Choose Group</span>
                    <div class="menu">
                        <div class="ui icon search input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search Group...">
                        </div>
                        <div class="scrolling menu">
                            <div class="item">
                                Important
                            </div>
                            <div class="item">
                                Announcement
                            </div>
                            <div class="item">
                                Cannot Fix
                            </div>
                            <div class="item">
                                News
                            </div>
                            <div class="item">
                                Enhancement
                            </div>
                            <div class="item">
                                Change Declined
                            </div>
                            <div class="item">
                                Off Topic
                            </div>
                            <div class="item">
                                Interesting
                            </div>
                            <div class="item">
                                Discussion
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ui dropdown subject">
                    <input name="subj" type="hidden">
                    <i class="book icon"></i>
                    <span class="text">Choose Subject</span>
                    <div class="menu">
                        <div class="ui icon search input">
                            <i class="search icon"></i>
                            <input type="text" placeholder="Search Subject...">
                        </div>
                        <div class="scrolling menu">
                            <div class="item">
                                Science
                            </div>
                            <div class="item">
                                Math
                            </div>
                            <div class="item">
                                Language
                            </div>
                            <div class="item">
                                Filipino
                            </div>
                            <div class="item">
                                GMRC
                            </div>
                            <div class="item">
                                Chemistry
                            </div>
                            <div class="item">
                                MAPEH
                            </div>
                            <div class="item">
                                Reading & Comprehensive
                            </div>
                            <div class="item">
                                Computer
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header item">Exam Level</div>
            <div class="item">
                <div class="menu">
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2" checked="checked">
                            <label>Preparatory</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Kinder</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Gradeschool</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Middleschool</label>
                        </div>
                    </div>
                    <div class="item field">
                        <div class="ui radio checkbox">
                            <input type="radio" name="example2">
                            <label>Highschool</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>

    <div class="twelve wide column">
        <div class="ui breadcrumb" style="font-size: 13px;">
            <a class="section" href="{{ url('/') }}">Dashboard</a>
            <i class="right angle icon divider"></i>
            <a class="section" href="{{ route('exam.index') }}">Exam</a>
            <i class="right angle icon divider"></i>
            <div class="active section">Create Exam</div>
        </div>

        <h2 class="ui header">
            <div class="content">
                <i class="File Text Outline icon"></i> Create Exam
            </div>
            <div class="ui divider"></div>
        </h2>

        <div class="ui segment">Test Segment</div>
    </div>
</div>
@stop


@section('script')
<script>
    $(".ui.dropdown.group").dropdown({
        behavior: 'get item',
        allowAdditions: true
    });

    $(".ui.dropdown.subject").dropdown({
        behavior: 'get item',
        allowAdditions: true
    });
</script>
@stop