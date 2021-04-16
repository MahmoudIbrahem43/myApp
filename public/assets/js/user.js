
$(document).ready(function () {
    var HostUrl = window.location.origin;
    var users = $("#users").DataTable({
        dom: "lBfrtip",
        buttons: ["excel", "print"],
        processing: true,
        serverSide: true,
        destroy: true,
        ajax: {
            url: home_url + "/users",
            type: "GET",
        },

        columns: [
            {
                data: "id",
                name: "id"
            },

            {
                data: "name",
                name: "name",
           
            },
            {
                data: "user_name",
                name: "user_name",

            },
            {
                data: "mobile",
                name: "mobile",
            },
            {
                data: "date_of_birth",
                name: "date_of_birth",

            },

            {
                data: "email",
                name: "email",

            },
            {
                data: "gender",
                name: "gender",

            },
            {
                data: "country",
                name: "country",

            },

            {
                data: "city",
                name: "city",

            },
         
            {
                data: "role_id",
                name: "role_id",

            },
          

            {
                data: "edit",
                name: "edit",
                render: function (d, t, r, m) {
                    //   console.log(d, t, r, m)
                    var RowData = r;

                    //ex: "http://127.0.0.1:8000/students/11/edit"
                    return `
                        <a class="btn btn-info" href="${HostUrl + "/users/" + RowData.id + "/edit"}">edit</a>
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
                    <form action="${HostUrl + "/users/" + RowData.id}" method="post">
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
            targets: [0, 1, 2, 3, 4, 5],
            searchable: true
        }],
        ordering: true,
    });


  
});