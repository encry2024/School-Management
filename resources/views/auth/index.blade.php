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
                <div class="active section">Dashboard</div>
            </div>

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
                <div class="ui calendar"></div>
            </div>
        </div>

        <br><br>

        <div class="ui grid">
            <div class="sixteen wide column">
                <div class="ui segments">
                    <div class="ui segment"><i class="flag icon"></i> Events Created</div>
                    <div class="ui segment red" style="font-size: 13px;">
                        <div class="ui negative message">
                            <div class="header" style="font-size: 13px;">
                                No events yet.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    @include('util.sidebar')

    <div class="ui small role modal">
        <div class="header">Create Event</div>
        <div class="content">
            <form class="ui form">
                <div class="field">
                    <label>Event Name</label>
                    <input type="text" name="event_name" placeholder="Event Name">
                </div>
                <div class="field">
                    <label>Event Description</label>
                    <input type="text" name="event_name" placeholder="Event Name">
                </div>
                <div class="field">
                    <label>Event Date</label>
                    <input type="text" name="event_name" id="event_date" placeholder="Event Name" readonly>
                </div>
            </form>
        </div>
    </div>
</div>
@stop


@section('script')
<script type="text/javascript">
    // Dropdown
    $(".ui.dropdown").dropdown();
    // Event picker
    $(document).ready(function() {
        $('.ui.calendar').fullCalendar({
            selectable: true,
            header: {
                left: 'prev,next,today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            select: function( start, end, jsEvent, view ) {
                /*console.log(jsEvent);*/
                $(this).addClass('create_role');
                $('.role.modal').modal('show');
                document.getElementById("event_date").value = start.format('YYYY-MM-DD h:mm a') + ' - ' + end.format('YYYY-MM-DD h:mm a');
            }
        })
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