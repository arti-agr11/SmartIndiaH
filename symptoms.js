
var imported = document.createElement('script');
imported.src = 'config.js';
document.head.appendChild(imported);

function loadSymptoms(id_name) {
    array = [{
            "ID": 10,
            "Name": "Abdominal pain"
        },
        {
            "ID": 238,
            "Name": "Anxiety"
        },
        {
            "ID": 104,
            "Name": "Back pain"
        },
        {
            "ID": 75,
            "Name": "Burning eyes"
        },
        {
            "ID": 46,
            "Name": "Burning in the throat"
        },
        {
            "ID": 170,
            "Name": "Cheek swelling"
        },
        {
            "ID": 17,
            "Name": "Chest pain"
        },
        {
            "ID": 31,
            "Name": "Chest tightness"
        },
        {
            "ID": 175,
            "Name": "Chills"
        },
        {
            "ID": 139,
            "Name": "Cold sweats"
        },
        {
            "ID": 15,
            "Name": "Cough"
        },
        {
            "ID": 207,
            "Name": "Dizziness"
        },
        {
            "ID": 244,
            "Name": "Drooping eyelid"
        },
        {
            "ID": 273,
            "Name": "Dry eyes"
        },
        {
            "ID": 87,
            "Name": "Earache"
        },
        {
            "ID": 92,
            "Name": "Early satiety"
        },
        {
            "ID": 287,
            "Name": "Eye pain"
        },
        {
            "ID": 33,
            "Name": "Eye redness"
        },
        {
            "ID": 153,
            "Name": "Fast, deepened breathing"
        },
        {
            "ID": 76,
            "Name": "Feeling of foreign body in the eye"
        },
        {
            "ID": 11,
            "Name": "Fever"
        },
        {
            "ID": 57,
            "Name": "Going black before the eyes"
        },
        {
            "ID": 9,
            "Name": "Headache"
        },
        {
            "ID": 45,
            "Name": "Heartburn"
        },
        {
            "ID": 122,
            "Name": "Hiccups"
        },
        {
            "ID": 149,
            "Name": "Hot flushes"
        },
        {
            "ID": 40,
            "Name": "Increased thirst"
        },
        {
            "ID": 73,
            "Name": "Itching eyes"
        },
        {
            "ID": 96,
            "Name": "Itching in the nose"
        },
        {
            "ID": 35,
            "Name": "Lip swelling"
        },
        {
            "ID": 235,
            "Name": "Memory gap"
        },
        {
            "ID": 112,
            "Name": "Menstruation disorder"
        },
        {
            "ID": 123,
            "Name": "Missed period"
        },
        {
            "ID": 44,
            "Name": "Nausea"
        },
        {
            "ID": 136,
            "Name": "Neck pain"
        },
        {
            "ID": 114,
            "Name": "Nervousness"
        },
        {
            "ID": 133,
            "Name": "Night cough"
        },
        {
            "ID": 12,
            "Name": "Pain in the limbs"
        },
        {
            "ID": 203,
            "Name": "Pain on swallowing"
        },
        {
            "ID": 37,
            "Name": "Palpitations"
        },
        {
            "ID": 140,
            "Name": "Paralysis"
        },
        {
            "ID": 54,
            "Name": "Reduced appetite"
        },
        {
            "ID": 14,
            "Name": "Runny nose"
        },
        {
            "ID": 29,
            "Name": "Shortness of breath"
        },
        {
            "ID": 124,
            "Name": "Skin rash"
        },
        {
            "ID": 52,
            "Name": "Sleeplessness"
        },
        {
            "ID": 95,
            "Name": "Sneezing"
        },
        {
            "ID": 13,
            "Name": "Sore throat"
        },
        {
            "ID": 64,
            "Name": "Sputum"
        },
        {
            "ID": 179,
            "Name": "Stomach burning"
        },
        {
            "ID": 28,
            "Name": "Stuffy nose"
        },
        {
            "ID": 138,
            "Name": "Sweating"
        },
        {
            "ID": 248,
            "Name": "Swollen glands in the armpits"
        },
        {
            "ID": 169,
            "Name": "Swollen glands on the neck"
        },
        {
            "ID": 211,
            "Name": "Tears"
        },
        {
            "ID": 16,
            "Name": "Tiredness"
        },
        {
            "ID": 115,
            "Name": "Tremor at rest"
        },
        {
            "ID": 144,
            "Name": "Unconsciousness, short"
        },
        {
            "ID": 101,
            "Name": "Vomiting"
        },
        {
            "ID": 181,
            "Name": "Vomiting blood"
        },
        {
            "ID": 56,
            "Name": "weakness"
        },
        {
            "ID": 23,
            "Name": "Weight gain"
        },
        {
            "ID": 30,
            "Name": "Wheezing"
        }
    ]

    for (property in array) {
        // console.log(`${property}: ${array[property].ID},${array[property].Name}`);
        // console.log(` `)
        $(id_name).append(`<option value="${array[property].ID}">${array[property].Name}</option>`);
    }
}

$(document).ready(function () {
    $("#report").hide();
    $('#form').on('submit', function (event) {
        count_data = 0;
        symptoms_array = [];
        $('.symptom').each(function () {
            count_data = count_data + 1;
            newsymptom = $(`#symptoms${count_data}`).val();
            // console.log(`#symptoms${count_data}`)
            // console.log(newsymptom)
            if (newsymptom && !symptoms_array.includes(newsymptom))
                symptoms_array.push(parseInt(newsymptom));
        });

        age = $("#age").val();
        gender = $("#gender").val();
        // console.log(apiKey);
        data =
            `symptoms=[${symptoms_array}]&gender=${gender}&year_of_birth=${age}&token=${api_token}&format=json&language=en-gb`
        console.log(symptoms_array);
        $.ajax({
            type: "GET",
            cache: false,
            url: "https://sandbox-healthservice.priaid.ch/diagnosis",
            data: data, // multiple data sent using ajax
            success: function (html) {
                console.log(html)
                show_report(html)
            }
        });
        return false;

    });
});

function addOneMore(total_symptom) {
    count_data = 0;
    $('.symptom').each(function () {
        count_data = count_data + 1;
    });
    if ($(`#symptoms${count_data}`).val()) {
        // console.log(`symptoms${total_symptom}`)
        // $(`#symptoms${total_symptom}`).unbind();
        toAppend = "#symptom_div" + total_symptom;
        // console.log('LastID: '+toAppend);
        var total_symptom = total_symptom + 1;
        var appended = "symptom_div" + total_symptom;
        // var appended_id = "#symptom_div" + total_symptom;
        // console.log('NewID: ' + appended_id);
        // console.log('NewID: ' + appended);
        $(`<div class="col-sm-12 my-1" id="${appended}">
            <label class="sr-only" for="symptom${total_symptom}">Symptoms</label>
            <select class="form-control symptom" id="symptoms${total_symptom}" name="symptom${total_symptom}" onchange="addOneMore(${total_symptom})">
                <option></option>
            </select>
        </div>`).insertAfter(toAppend);
        loadSymptoms(`#symptoms${total_symptom}`);
    }
}




function show_report(arrary2) {
    $("#report").empty();
    $("#report").show();
    if (arrary2.length) {
        for (property in arrary2) {
            // console.log(`${property}: ${arrary2[property].Issue.Name}`);
            // console.log(`${property}: ${arrary2[property].Issue.Name}`);
            $("#report").append(`<div class="border border-light my-3 p-5 text-danger">
        ${arrary2[property].Issue.Name}<br>
        Probability: 
         ${arrary2[property].Issue.Accuracy}%
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