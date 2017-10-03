<script>
    $(function() {
        $.get('data.csv', function(data) {
            $('#CSVSource').html('<pre>' + data + '</pre>');
        });
    });
    </script>