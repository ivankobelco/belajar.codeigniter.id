var table = '';
view_data();

function view_data() {
    // $('#test_data').html('ini tampilan test............');
    // var table = 
    table = $('#data_list').DataTable({
        lengthMenu: [5, 10, 25, 50, 100, "All"],

        scrollY: "300px",
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: {
            heightMatch: 'none'
        },
        ajax: {
            url: url + 'index.php/hris/master_emp/emp_list',
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

function update_emp(i, emp_id, emp_name) {
    $('#data_table').fadeOut(500, function() {
        $('#emp_form').fadeIn(500, function() {
            $('#emp_id').val(emp_id); // mengisi field emp_id dengan value yang dikirim saat update_emp
            $('#emp_name').val(emp_name); // mengisi field emp_name dengan value yang dikirim saat update_emp
        });
    });
}

function add_emp() {
    $('#data_table').fadeOut(500, function() {
        $('#emp_form').fadeIn(500, function() {

        });
    });
};

$('#btn_cancel').click(function() {
    $('#emp_form').fadeOut(500, function() {
        $('#data_table').fadeIn(500, function() {

        });
    });
});

$('#btn_save').click(function() {
    $.post(url + 'index.php/hris/master_emp/save_emp', $('#form_employee').serialize(), function(result) {
        $('#emp_form').fadeOut(500, function() {
            $('#data_table').fadeIn(500, function() {
                table.ajax.reload(); // me-reload datatable 
                $('#form_employee').trigger('reset'); // mengosongkan form 
            });
        });

    });
});