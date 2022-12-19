$(document).ready(function () {
    $("#btn_simpan_buku_tamu").click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            data: $("#bukuTamuForm").serialize(),
            url: app_path.base_path + "/store_buku_tamu",
            type: "POST",
            dataType: "json",
            success: function (data) {
                alert(
                    "Data telah berhasil disimpan.Mohon menunggu staff kami akan segera melayani"
                );
                document.getElementById("bukuTamuForm").reset();
                window.location = app_path.base_path;
            },
            error: function (data) {
                alert(
                    "Data gagal disimpan. Silahkan periksa kembali isian form buku tamu"
                );
                console.log("Error euy:", data);
            },
        });
    });

    $(document).on("click", ".btn_approve", function (e) {
        e.preventDefault();
        let id = $(this).val();

        alert(id);
    });
});
