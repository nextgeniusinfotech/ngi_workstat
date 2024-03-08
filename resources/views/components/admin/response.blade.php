@if (Session::has('success'))
    @php
        $message = Session::get('success');
    @endphp

    <script>
        $(document).ready(function() {
            'use strict';
            var notify = $.notify(
                '<i class="fa fa-bell-o"></i><strong>Success</strong> {{ $message }}', {
                    type: 'theme',
                    allow_dismiss: true,
                    delay: 2000,
                    showProgressbar: true,
                    timer: 300
                });

        });
    </script>
@endif

@if (Session::has('error'))
    @php
        $message = Session::get('error');
    @endphp

    <script>
        $(document).ready(function() {
            'use strict';
            var notify = $.notify(
                '<i class="fa fa-bell-o"></i><strong>Error</strong> {{ $message }}', {
                    type: 'theme',
                    allow_dismiss: true,
                    delay: 2000,
                    showProgressbar: true,
                    timer: 300
                });

        });
    </script>
@endif
