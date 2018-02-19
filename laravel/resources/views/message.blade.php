<!doctype html>
<html>
<head>
    <title>Ajax Example</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <script>
        function getMessage() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf_token"]').attr('content')
                },
                type: 'POST',
                url: '/getmsg',
                data: '_token = <?php echo csrf_token(); ?>',
                success: function (data) {
                    $('#msg').html(data.msg);
                }
            });
        }
    </script>
</head>
<body>
<div id="msg">
    This will be replaces using Ajax. Click the button to replace the message.
</div>
<?php
        echo Form::button('Replace Message',['onClick'=>'getMessage()']);
?>
</body>
</html>