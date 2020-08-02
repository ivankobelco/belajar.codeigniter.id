view_data();


function view_data() {
    // $('#test_data').html('ini tampilan test............');
    var table = $('#data_list').DataTable({
        lengthMenu: [5, 10, 25, 50, 100, "All"],

        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: {
            heightMatch: 'none'
        },
        ajax: {
            url: url + 'index.php/hris/employee_list/data_table',
            type: "POST",
            data: {
                'tgl_awal': '',
                'tgl_akhir': ''
            }
        },

        destroy: true,
        orderCellsTop: true,
    });
}

$('#btn_save').click(function(event) {
    let user_name = $('#user_name').val(); // mengambil nilai /value dari id=user_name
    $('#test_data').html('Button save di klik............' + user_name);
});

$('#user_name').change(function() {
    let user_name = $('#user_name').val(); // mengambil nilai /value dari id=user_name
    $('#test_data').html('Hasil....' + user_name);
})

function update_emp(i, emp_id, emp_name) {
    // $('#modal').modal();
    $('#emp_form').fadeIn(1000);
    $('#data_table').fadeOut(1000);

    // alert(i + ' -- ' + emp_id + ' -- ' + emp_name)
}