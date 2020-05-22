function fetchMedicine(type)
{
    data=`page=fetchMedicine&type=${type}`
    $.ajax({
        type: "POST",
        cache: false,
        url: "API/api.php",
        dataType: "json",
        data: data, // multiple data sent using ajax
        success: function (html) {
            console.log(html)
            loadDate(html)
        }
    });
}


function loadDate(arrary2){
    $("#report").empty();
    $("#report").show();
    if (arrary2.length) {
        for (property in arrary2) {
            // console.log(`${property}: ${arrary2[property].Issue.Name}`);
            // console.log(`${property}: ${arrary2[property].Issue.Name}`);
            $("#report").append(`<div class="border border-light my-3 p-5 text-danger">
        ${arrary2[property].name}<br>
        Type: 
         ${arrary2[property].type}
        </div>`)
            // console.log(` `)
            // $(id_name).append(`<option value="${array[property].ID}">${array[property].Name}</option>`);
        }
    } else {
        $("#report").append(`<div class="border border-dark my-3 p-5 text-dark">
        No Match Found
        </div>`)
    }
}