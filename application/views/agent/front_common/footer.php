<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->


<script>
    $(document).ready(function() {
        $('.dataTable').DataTable();
        $("#start>input").click(function() {
            $(".input-group-text").click();
        })

        $('#start').datetimepicker({
            // Formats
            // follow MomentJS docs: https://momentjs.com/docs/#/displaying/format/
            format: 'MM-DD-YYYY hh:mm A',
            // defaultDate: moment(),
            // disabledTimeIntervals: [
            //     [moment().hour(8).minutes(0), moment().hour(4).minutes(0)],
            //     [moment().hour(8).minutes(9), moment().hour(4).minutes(5)]
            // ],

            disabledTimeIntervals: [
                [moment({
                    h: 16
                }), moment({
                    h: 8
                })],
                [moment({
                    h: 16
                }), moment({
                    h: 24
                })]
            ]

            // Your Icons
            // as Bootstrap 4 is not using Glyphicons anymore

        });
    });
</script>
</body>

</html>