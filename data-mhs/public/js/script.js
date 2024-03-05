jQuery(document).ready(function(){
    jQuery(document).on('click', '.btn-edit', function(){
        let data_id = jQuery(this).attr("data-id");
        let data_nama_sekolah = jQuery(this).attr("data-nama_sekolah");
        let data_tahun_masuk = jQuery(this).attr("data-tahun_masuk");
        let data_tahun_keluar = jQuery(this).attr("data-tahun_keluar");
        let data_nilai_akhir = jQuery(this).attr("data-nilai_akhir");

        jQuery('#nama_sekolah').val(data_nama_sekolah);
        jQuery('#tahun_masuk').val(data_tahun_masuk);
        jQuery('#tahun_keluar').val(data_tahun_keluar);
        jQuery('#nilai_akhir').val(data_nilai_akhir);
        jQuery('#riwayat_id').val(data_id);

        jQuery('#form-riwayat').modal('show');
    });
});



