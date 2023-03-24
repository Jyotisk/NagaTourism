<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.css"/>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.11.0/af-2.3.7/b-2.0.0/b-html5-2.0.0/b-print-2.0.0/cr-1.5.4/date-1.1.1/sl-1.3.3/datatables.js"></script>

<!-- <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.colVis.min.js"></script> -->
<script>
    $('.user-list').DataTable({
        "processing": true,
        "serverSide": true,
        "responsive": true,
        "scrollX": true,
        buttons: [
            // 'copyHtml5',
            // 'excelHtml5',
            // 'csvHtml5',
            // 'pdfHtml5'
        ],
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        dom: 'Blfrtip',
        "language": {
            "processing": 'Loading data...'
        },

        "ajax": {
            "url": "{{ route('DatatableUserList')}}",
            // "data": function(d) {
            //     d.dis_id = $('#district').val();
            //     d.block_id = $('#block').val();
            //     d.panchayat_id = $('#panchyat').val();
            //     d.program_id = $('#program').val();
            //     d.level_id = $('#level').val();
            //     d.des_id = $('#designation').val();
            //     d.ser_status = $('#service_status').val();
            // }
        },
        "columns": [ 
            // {
            //     data: 'DT_Row_Index',
            //     name: 'DT_Row_Index'
            // },

            {
                "data": "name"
            },
            {
                "data": "user_type"
            },
            {
                "data": "centre_name"
            },
            {
                "data": "status",
                "render": function(data, type, row, meta) {
                    if (type === 'display') {
                        data = '<div class="form-check form-switch"><input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked></div>';
                    }
                    return data;
                }
            },



        ],

    });
</script>