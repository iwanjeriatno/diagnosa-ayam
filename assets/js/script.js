  $(document).ready(function() {
        var base_url = 'http://localhost/AI/diagnosa-ayam/index.php';
        // Switch
        $("[data-toggle='switch']").wrap('<div class="switch" />').parent().bootstrapSwitch();

        // -------------------------
        //  display delete penyakit
        // -------------------------
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            // mengambil value dari button
            var id_penyakit = $(this).val();
            $('#modal_penyakit').attr('href', base_url+'/penyakit/delete/'+id_penyakit);
            $('#deleteModal').modal('show');
        });

        // -------------------------
        //  display delete penyakit_gejala
        // -------------------------
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            // mengambil value dari button
            var id_penyakit_gejala = $(this).val();
            $('#modal_penyakit_gejala').attr('href', base_url+'/penyakit/delete_penyakit_gejala/'+id_penyakit_gejala);
            $('#deleteModal').modal('show');
        });

        // -------------------------
        //  display delete gejala
        // -------------------------
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            // mengambil value dari button
            var id_gejala = $(this).val();
            $('#modal_gejala').attr('href', base_url+'/gejala/delete/'+id_gejala);
            $('#deleteModal').modal('show');
        });

        // -------------------------
        //  display rule
        // -------------------------
        $(document).on('click', '#delete', function(e) {
            e.preventDefault();
            // mengambil value dari button
            var id_rule = $(this).val();
            $('#modal_rule').attr('href', base_url+'/rule/delete/'+id_rule);
            $('#deleteModal').modal('show');
        });

  });
