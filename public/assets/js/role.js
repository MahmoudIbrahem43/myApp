$(document).ready(function () {
    var HostUrl = window.location.origin;
    var roles = $("#roles").DataTable({
         dom: "lBfrtip",
        buttons: ["excel", "print"],
        processing: true,
        serverSide: true,
        destroy: true,
        ajax: {
            url: home_url  + "/roles",
            type: "GET",
        },

        columns: [
            {
                data: "id",
                name: "id"
            },
            {
                data: "name",
                name: "name"
            },
            {
                data: "slug",
                name: "slug"
            },


            {
                data: "edit",
                name: "edit",
                render: function (d, t, r, m) {
                    //   console.log(d, t, r, m)
                    var RowData = r;

                    //ex: "http://127.0.0.1:8000/students/11/edit"
                    return `
                        <a class="btn btn-info" href="${HostUrl + "/roles/" + RowData.id + "/edit"}">edit</a>
                        `;
                }
            },

            {
                data: "delete",
                name: "delete",
                render: function (d, t, r, m) {
                    var RowData = r;
                    var TokenValue = $('input[name="_token"]').val();
                    return `
                    <form action="${HostUrl + "/roles/" + RowData.id}" method="post">
                       <input type="hidden" name="_token" value="${TokenValue}">
                       <input type="hidden" name="_method" value="DELETE">
                       <button type="submit" class="btn btn-danger" title="delete">
                          <span>Delete</span>
                       </button>
                   </form> `;
                }
            }

        ],
        columnDefs: [{
            targets: [0, 1, 2, 3, 4],
            searchable: true
        }],
        ordering: true,
    });
});