/**
 * Created by Ahmad Sajid on 8/12/2015.
 */

$(document).ready(function () {

    $('#delete').on("click", function () {

        var checkboxValues = [];
        $('input[name=multiselect_checkbox]:checked').map(function() {
            checkboxValues.push($(this).val());
        });

        var data = {data : checkboxValues};
        if ($('input[name=multiselect_checkbox]:checked').length > 0) {

            if (confirm("Are you sure?")) {
                $.ajax({
                    type: "POST",
                    url: "{{ path('content_bulk_delete') }}",
                    data: data,
                    success: function (data, dataType) {
                        alert(data);
                        window.location.reload(true);
                    },

                    error: function (XMLHttpRequest, textStatus, errorThrown) {
                        alert('Error : ' + errorThrown);
                    }
                })
            }
            return false;
        } else {

            alert("You have not select any content");
        }

        console.log(checkboxValues);
    })

    $('#export').on("click", function () {

        var checkboxValues = [];
        $('input[name=multiselect_checkbox]:checked').map(function() {
            checkboxValues.push($(this).val());
        });

        var data = {data : checkboxValues};
        if ($('input[name=multiselect_checkbox]:checked').length > 0) {



            var newURLString = "{{ path('content_export_csv') }}" +
                "?data=" + checkboxValues;

            window.location.href = newURLString;    // The page will redirect instantly
                                                    // after this assignment


            return false;
        } else {

            alert("You have not select any content");
        }

        console.log(checkboxValues);
    })

})