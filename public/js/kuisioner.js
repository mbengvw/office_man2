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
            success: function (data) {
                alert(
                    "Data telah berhasil disimpan.Terima Kasih atas partisispasinya"
                );
                document.getElementById("kuisionerForm").reset();
                window.location = app_path.base_path;
            },
            error: function (data) {
                alert(
                    "Data tidak berhasil disimpan. Silahkan periksa kembali isian form"
                );
                console.log("Error euy:", data);
            },
        });
    });
});
