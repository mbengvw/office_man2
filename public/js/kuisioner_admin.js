$(document).ready(function () {
    fetchData();
});

function fetchData() {
    /*------------------------------------------
    Pass Header Token
    --------------------------------------------*/
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    });
    let table = $(".yajra-datatable").DataTable({
        destroy: true,
        processing: true,
        serverSide: true,
        ajax: app_path.base_path + "/list-kuisioner",
        columns: [
            {
                data: "DT_RowIndex",
                name: "DT_RowIndex",
            },
            {
                data: "nama",
                name: "nama",
            },
            {
                data: "usia",
                name: "usia",
            },
            {
                data: "pendidikan",
                name: "pendidikan",
            },
            {
                data: "pekerjaan",
                name: "pekerjaan",
            },
            {
                data: "tingkat",
                name: "tingkat",
            },
            {
                data: "saran",
                name: "saran",
            },
        ],
    });
}
