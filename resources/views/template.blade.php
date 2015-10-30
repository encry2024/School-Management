<html>
    <head>
        <meta charset="UTF-8">
        <title>School Management</title>
        <link rel="stylesheet" href="{{ URL::to('/') }}/semantic/dist/semantic.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/semantic/dist/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/semantic/dist/components/menu.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/semantic/dist/components/segment.css">
        <link rel="stylesheet" href="{{ URL::to('/') }}/date-picker/themes/default.date.css">
        @yield('header')
    </head>

    <body>

        <script src="{{ URL::to('/') }}/semantic/dist/jquery.min.js"></script>
        <script src="{{ URL::to('/') }}/semantic/dist/semantic.min.js"></script>
        <script src="{{ URL::to('/') }}/semantic/dist/components/sidebar.js"></script>
        <script src="{{ URL::to('/') }}/semantic/dist/components/tab.js"></script>
        <script src="{{ URL::to('/') }}/semantic/dist/bootstrap-datepicker.min.js"></script>
        <script src="{{ URL::to('/') }}/date-picker/picker.js"></script>
        <script src="{{ URL::to('/') }}/date-picker/picker.date.js"></script>
        <script src="{{ URL::to('/') }}/semantic/dist/components/modal.js"></script>
        

        @yield('content')
        @yield('script')
        @yield('style')

        <style>
            body, label, h3, h4 {
                font-size: 14px !important;
            }
        </style>

    </body>
</html>