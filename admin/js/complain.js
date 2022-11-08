
    getComplainData();

function getComplainData() {
    var getComplainData = "getComplainData";
    $("#tableRe").empty();
    $.ajax({
        url: './include/complain_server.php',
        type: 'post',
        data: {
            getComplainData: getComplainData
        },
        success: function(data, status) {
            $('#mainDiv').removeClass('d-none');
            $('#loaderDiv').addClass('d-none');

            $("#tableRe").html(data);
            $("#studentDataTable").DataTable(deleteProcess(), editDetails());

            $('.dataTables_length').addClass('bs-select');
            $("#addBtn").click(function() {
                $("#addModal").modal('show');
            });
        }
    });
}

function editDetails() {
    $(".editBtn").click(function() {
        var id = $(this).data('id');
        $("#editComplainId").html(id);
        $("#editModal").modal('show');
        $.ajax({
            url: './include/complain_server.php',
            type: 'post',
            data: {
                complain_details_data: id
            },
            success: function(data, status) {
                setTimeout(() => {
                    $("#editLoaderDiv").addClass('d-none');
                    $("#edit-form").removeClass('d-none');

                }, 1000);
                var jsonData = JSON.parse(data);
                console.log(jsonData.customer_name);
                $('#editCustomerValue').html('<option value=' + jsonData.customer_name + '>' + jsonData.customer_name + '</option>');
                $('#editcomplainStatus').val(jsonData.status);
                $('#editComplainType').val(jsonData.complain_type);
                $('#editComplainNote').val(jsonData.note);
                $('#editcomplainTime').val(jsonData.time);
            }
        });


    });
}

function deleteProcess() {
    $(".deleteBtn").click(function() {
        var id = $(this).data('id');
        $('#ServiceDeleteId').html(id);
        $("#deleteModal").modal('show');

    });
}

$("#complainDeleteConfirm").click(function() {
    var id = $('#ServiceDeleteId').html();
    $.ajax({
        url: './include/complain_server.php',
        type: 'post',
        data: {
            deleteData: id
        },
        success: function(data, status) {
            toastr.success(data);
            $("#deleteModal").modal('hide');
            setTimeout(() => {
                location.reload();
            }, 1000);
        }
    });
});
$("#complainUpdateBtn").click(function() {
    var editId = $("#editComplainId").html();
    var editcustomername = $('#editCustomerName').find(":selected").text();
    var editComplainType = $('#editComplainType').val();
    var editStatus = $('#editcomplainStatus').find(":selected").text();
    var editcomplainTime = $('#editcomplainTime').val();
    var editComplainNote = $('#editComplainNote').val();
    complainUpdate(editId, editcustomername, editComplainType, editStatus, editcomplainTime, editComplainNote);

});
const complainUpdate = (editId, editcustomername, editComplainType, editStatus, editcomplainTime, editComplainNote) => {

    if (editcustomername.length == 0) {
        toastr.error("Customer Name is require");
    } else if (editComplainType.length == 0) {
        toastr.error("Complain Type is require");
    } else if (editStatus.length == 0) {
        toastr.error("Status is require");
    } else if (editcomplainTime.length == 0) {
        toastr.error("Time is require");
    } else if (editComplainNote.length == 0) {
        toastr.error("Complain Note is require");
    } else {
        $.ajax({
            url: './include/complain_server.php',
            type: 'POST',
            data: {
                id: editId,
                customer_name: editcustomername,
                complain_type: editComplainType,
                status: editStatus,
                time: editcomplainTime,
                note: editComplainNote
            },
            success: function(data, status) {
                toastr.success(data);
                $("#editModal").modal('hide');
                setTimeout(() => {
                    location.reload();
                }, 1000);
            }
        });
    }
}
$("#addBtn").click(function() {
    $('#addModal').modal('show');
    setTimeout(() => {
        $('#addLoaderDiv').addClass('d-none');
        $('#add-form').removeClass('d-none');
    }, 1000);
});
$("#complainAddBtn").click(function() {
    var addName = $('#addCustomerName').find(":selected").text();
    var addComplainType = $("#addComplainType").val();
    var addComplainNote = $("#addComplainNote").val();
    addComplain(addName, addComplainType, addComplainNote);
});

function addComplain(addName, addComplainType, addComplainNote) {

    if (addName.length == 0) {
        toastr.error("Name is require");
    } else if (addComplainType.length == 0) {
        toastr.error("Complain Type is require");
    } else if (addComplainNote.length == 0) {
        toastr.error("Complain Note is require");
    } else {
        $.ajax({
            url: './include/complain_server.php',
            type: 'POST',
            data: {
                addName: addName,
                complain_type: addComplainType,
                note: addComplainNote
            },
            success: function(data, status) {
                $('#addModal').modal('hide');
                toastr.success(data)
                setTimeout(() => {
                    location.reload();
                }, 1000);
            }
        });
    }
} 
