$(document).ready(function() {

      var base_url = 'http://localhost/AI/diagnosa-ayam/index.php';

      var penyakit = $('input[name=kd_penyakit]:checked').val();

      // -------------------------
      //  button diagnosa
      // -------------------------
      $(document).on('click', '.gejala', function(e) {
          // mengambil value dari button
          var id_gejala = $(this).val();
          $('#gejala').attr('checked');
          $('#diagnosa').attr('href', base_url+'/diagnosis/gejala/'+id_gejala);
      });

      // -------------------------
      //  button lanjut
      // -------------------------
      $(document).on('click', '#gejala', function(e) {
          // mengambil value dari button
          var id_gejala = [];
          $(':checkbox:checked').each(function(i){
            id_gejala[i] = $(this).val();
          });

          var kd_penyakit = url('6');

          console.log(id_gejala);

          $('#gejala').attr('checked');
          $('#lanjut').attr('href', id_gejala);
      });

});
