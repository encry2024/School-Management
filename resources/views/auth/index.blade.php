@extends('template')


@section('header')
@include('util.header')
@stop


@section('content')
<div class="ui grid">
    <div class="three wide column">
        @include('util.user_menu')
    </div>

    <div class="ten wide column" 
         style="margin-left: 2rem; margin-top: 0rem; border-radius: 0px; height: 100%; border: none; box-shadow: none;"
         id="content">

        <div class="twelve wide column grid" style="margin-top: 0.5rem;">
            <h2 class="ui header">
                <div class="content"><i class="dashboard icon"></i> Dashboard</div>
                <div class="ui divider"></div>
            </h2>

            <div class="ui grid">
                <div class="sixteen wide column">
                    <div class="ui segment green" style="font-size: 13px;"><i class="Announcement icon"></i> No announcement yet</div>
                </div>
            </div>

            <br>

            <div class="five wide column">
                <div class="ui datepicker"></div>
            </div>
        </div>

        <br><br>

        <div class="ui grid">
            <div class="eight wide column">
                <div class="ui segments">
                    <div class="ui segment"><i class="flag icon"></i> Events</div>
                    <div class="ui segment red" style="font-size: 13px;">
                        <div class="ui negative message">
                            <div class="header" style="font-size: 13px;">
                            There are no events created.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="eight wide column">
                <div class="ui segments">
                    <div class="ui segment"><i class="flag icon"></i> Today's Activities</div>
                    <div class="ui segment red" style="font-size: 13px;">
                        <div class="ui negative message">
                            <div class="header" style="font-size: 13px;">
                            No activities yet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('util.sidebar')
</div>
@stop


@section('script')
<script type="text/javascript">
    // Dropdown
    $(".ui.dropdown").dropdown();
    // Date picker
    $('.datepicker').pickadate({
        clear: '',
        close: ''
    });

    $('.ui.sticky').sticky({
        context: '#content'
    });
    /*
    // Message Close
    $('.message .close').on('click', function() {
        $(this).closest('.message')
               .transition('fade');
    });
    */
</script>
@stop