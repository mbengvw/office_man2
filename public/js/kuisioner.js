
$(document).ready(function () {
    $("#saveBtn").click(function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });

        $.ajax({
            data: $("#kuisionerForm").serialize(),
            url: app_path.base_path + "/store_kuisioner",
            type: "POST",
            dataType: "json",
            cache: false,
            beforeSend: function () {
                $(".loading").removeClass("preloader-deactivate");
            },
            complete: function () {
                $(".loading").addClass("preloader-deactivate");
            },
            success: function (data) {
                Swal.fire({
                    icon: "info",
                    title: "Berhasil...",
                    text: "Data telah berhasil disimpan.Terima kasih atas partisipasinya",
                });
                document.getElementById("kuisionerForm").reset();
            },
            error: function (data) {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Data tidak berhasil disimpan. Silahkan periksa kembali isian form!",
                });
                console.log("Error euy:", data);
            },
        });
    });
});
