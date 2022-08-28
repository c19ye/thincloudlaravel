$(function () {
    ("use strict");

    $(".datatable").each(function (index, element) {
        var department_id = $(this).attr("id");
        //console.log(department_id);
        var dtUserTable = $(".user-list-table" + department_id),
            assetPath = "../../../app-assets/",
            userView = "#",
            statusObj = {
                1: { title: "Pending", class: "badge-light-warning" },
                2: { title: "Active", class: "badge-light-success" },
                3: { title: "Inactive", class: "badge-light-secondary" },
            };

        // Users List datatable
        if (dtUserTable.length) {
            dtUserTable.DataTable({
                ajax: "/mynetwork/department/json/" + department_id, // JSON file to add data
                columns: [
                    // columns according to JSON

                    { data: "id" },
                    { data: "name" },
                    { data: "role_id" },
                    { data: "my_plans_id" },
                    { data: "billing" },
                    { data: "" },
                ],
                columnDefs: [
                    {
                        // For Checkboxes
                        targets: 0,
                        orderable: false,
                        responsivePriority: 3,
                        render: function (data, type, full, meta) {
                            return (
                                '<div class="form-check"> <input class="form-check-input dt-checkboxes" type="checkbox" value="" id="checkbox' +
                                data +
                                '" /><label class="form-check-label" for="checkbox' +
                                data +
                                '"></label></div>'
                            );
                        },
                        checkboxes: {
                            selectAllRender:
                                '<div class="form-check"> <input class="form-check-input" type="checkbox" value="" id="checkboxSelectAll" /><label class="form-check-label" for="checkboxSelectAll"></label></div>',
                        },
                    },
                    {
                        // User full name and username
                        targets: 1,
                        responsivePriority: 4,
                        render: function (data, type, full, meta) {
                            var $name = full["name"],
                                $email = full["email"],
                                $image = full["avatar"];
                            if ($image) {
                                // For Avatar image
                                var $output =
                                    '<img src="' +
                                    assetPath +
                                    "images/avatars/" +
                                    $image +
                                    '" alt="Avatar" height="32" width="32">';
                            } else {
                                // For Avatar badge
                                var stateNum =
                                    Math.floor(Math.random() * 6) + 1;
                                var states = [
                                    "success",
                                    "danger",
                                    "warning",
                                    "info",
                                    "dark",
                                    "primary",
                                    "secondary",
                                ];
                                var $state = states[stateNum],
                                    $name = full["name"],
                                    $initials = $name.match(/\b\w/g) || [];
                                $initials = (
                                    ($initials.shift() || "") +
                                    ($initials.pop() || "")
                                ).toUpperCase();
                                $output =
                                    '<span class="avatar-content">' +
                                    $initials +
                                    "</span>";
                            }
                            var colorClass =
                                $image === ""
                                    ? " bg-light-" + $state + " "
                                    : "";
                            // Creates full output for row
                            var $row_output =
                                '<div class="d-flex justify-content-left align-items-center">' +
                                '<div class="avatar-wrapper">' +
                                '<div class="avatar ' +
                                colorClass +
                                ' me-1">' +
                                $output +
                                "</div>" +
                                "</div>" +
                                '<div class="d-flex flex-column">' +
                                '<a href="' +
                                userView +
                                '" class="user_name text-body text-truncate"><span class="fw-bolder">' +
                                $name +
                                "</span></a>" +
                                '<small class="emp_post text-muted">' +
                                $email +
                                "</small>" +
                                "</div>" +
                                "</div>";
                            return $row_output;
                        },
                    },
                    {
                        // User Role
                        targets: 2,
                        render: function (data, type, full, meta) {
                            var $role = full["role_id"];
                            if (
                                ($role == "Üye") |
                                ($role == "Yazar") |
                                ($role == "Geliştirici") |
                                ($role == "Editör") |
                                ($role == "Admin")
                            ) {
                                var roleBadgeObj = {
                                    Üye: feather.icons["user"].toSvg({
                                        class: "font-medium-3 text-primary me-50",
                                    }),
                                    Yazar: feather.icons["settings"].toSvg({
                                        class: "font-medium-3 text-warning me-50",
                                    }),
                                    Geliştirici: feather.icons[
                                        "database"
                                    ].toSvg({
                                        class: "font-medium-3 text-success me-50",
                                    }),
                                    Editör: feather.icons["edit-2"].toSvg({
                                        class: "font-medium-3 text-info me-50",
                                    }),
                                    Admin: feather.icons["slack"].toSvg({
                                        class: "font-medium-3 text-danger me-50",
                                    }),
                                };
                                $outputrole =
                                    "<span class='text-truncate align-middle'>" +
                                    roleBadgeObj[$role] +
                                    $role +
                                    "</span>";
                            } else {
                                $outputrole =
                                    "<span class='text-truncate align-middle'>" +
                                    $role +
                                    "</span>";
                            }

                            return $outputrole;
                        },
                    },
                    {
                        targets: 4,
                        render: function (data, type, full, meta) {
                            var $billing = full["billing"];

                            return (
                                '<span class="text-nowrap">' +
                                $billing +
                                "</span>"
                            );
                        },
                    },

                    {
                        // Actions
                        targets: -1,

                        orderable: false,
                        render: function (data, type, full, meta) {
                            var $id = full["id"];
                            return (
                                '<a href="/mynetwork/department/delete/' +
                                $id +
                                '" class="btn btn-sm btn-icon">' +
                                feather.icons["trash-2"].toSvg({
                                    class: "font-medium-3 text-body",
                                }) +
                                "</a>"
                            );
                        },
                    },
                ],
                order: [[1, "desc"]],
                dom:
                    '<"d-flex justify-content-between align-items-center header-actions mx-2 row mt-50 mb-1"' +
                    '<"col-sm-12 col-md-4 col-lg-6" l>' +
                    '<"col-sm-12 col-md-8 col-lg-6 ps-xl-75 ps-0"<"dt-action-buttons d-flex align-items-center justify-content-md-end justify-content-center flex-sm-nowrap flex-wrap"<"me-1"f><"#department_useradd'+department_id+'.user_department mt-50">>>' +
                    ">t" +
                    '<"d-flex justify-content-between mx-2 row"' +
                    '<"col-sm-12 col-md-6"i>' +
                    '<"col-sm-12 col-md-6"p>' +
                    ">",
                language: {
                    url: "../../../app-assets/data/locales/tr.json",
                    paginate: {
                        // remove previous & next text from pagination
                        previous: "&nbsp;",
                        next: "&nbsp;",
                    },
                },

            });

        }
    });
});
