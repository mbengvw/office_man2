$(document).ready(function () {
    fetchData();
    $(document).on("click", ".btn_approve", function (e) {
        e.preventDefault();
        let id = this.id;
        let status = $(this).data("status");
        let confirmed = false;
        if (status == 0) {
            confirmed = confirm("Anda yakin siap melayani ?");
        } else {
            confirmed = confirm("Anda yakin pelayanan sudah selesai ?");
        }

        if (confirmed) {
            $.ajaxSetup({
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr(
                        "content"
                    ),
                },
            });
            $.ajax({
                type: "POST",
                data: { id: id, status: status },
                url: app_path.base_path + "/buku-tamu/update",
                success: function (data) {
                    fetchData();
                    console.log(data);
                },
                error: function (data) {
                    console.log("Error:", data);
                },
            });
        }
    });
});

function fetchData() {
    let table = $(".yajra-datatable").DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        ajax: app_path.base_path + "/list-buku-tamu",
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
            },
            {
                data: "nama_lengkap",
                name: "nama_lengkap",
            },
            {
                data: "no_hp",
                name: "no_hp",
            },
            {
                data: "alamat",
                name: "alamat",
            },
            {
                data: "struktural.jabatan",
                name: "tujuan",
            },
            {
                data: "keperluan",
                name: "keperluan",
            },
            {
                data: "action",
                name: "action",
                orderable: true,
                searchable: true,
            },
        ],
    });
}
