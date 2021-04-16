
$(document).ready(function () {
    var RoleId = getParameterByName('id') ?? -1;
    var HostUrl = window.location.origin;
    var usersRole = $("#usersRole").DataTable({
        dom: "lBfrtip",
        buttons: ["excel", "print"],
        processing: true,
        serverSide: true,
        destroy: true,
        ajax: {
            url: home_url + "/UsersRole/ShowUsers/"+RoleId,
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


        ],
        columnDefs: [{
            targets: [0, 1, 2, 3, 4, 5],
            searchable: true
        }],
        ordering: true,
    });



});

function getParameterByName(name, url = window.location.href) {
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}