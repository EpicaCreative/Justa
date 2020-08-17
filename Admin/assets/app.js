
$.ajax({
    url: 'ajax/dash_charts.php?social=' + $("#social_id").val(),
    type: 'POST',
    data: {
        social: $("#social_id").val()
    },
    success: response => {
        apply_chart(response);
    },
    error: () => {

    }
});

let get_bloco_leads = (filter = 'total', name = 'Total') =>
{
    $("#dropdown_title").text(name);

    $.ajax({
        url: 'ajax/bloco_leads.php',
        type: 'POST',
        data: {
            filter: filter
        },
        success: response => {
            $("#h1_total_leads").text(response.total_leads);
            $("#h1_novos_justos").text(response.seja_um_justo);
            $("#h1_total_candidatos").text(response.total_candidatos);
            $("#h1_credito_justo").text(response.credito_justo);
            $("#h1_justa_mais_tef").text(response.justa_mais_tef);
            $("#h1_newsletter").text(response.newsletter);
            $("#h1_maquininhas").text(response.maquininhas);
            
        },
        error: () => {

        }
    });
}

let apply_chart = response => 
{
    console.log(response.labels);   
    var ctx = document.getElementById('chart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: response.labels,
            datasets: [
            // { 
            //     data: response.cadastro_adquirido,
            //     label: "Interesse",
            //     borderColor: "#3e95cd",
            //     fill: false
            // },
            { 
                data: response.array_cadastro_justa_mais,
                label: "Justa Mais",
                borderColor: "#e8c3b9",
                fill: false
            }, { 
                data: response.array_cadastro_credito_justo,
                label: "Crédito Justo",
                borderColor: "#8e5ea2",
                fill: false
            }, { 
                data: response.array_cadastro_maquininhas,
                label: "Maquininhas",
                borderColor: "#3cba9f",
                fill: false
            }, 
             { 
                data: response.array_cadastro_seja_justo,
                label: "Justos",
                borderColor: "#c45850",
                fill: false
            },
            // { 
            //     data: response.array_cadastro_qr_codes,
            //     label: "Qr Codes",
            //     borderColor: "#323232",
            //     fill: false
            // }
            ]
        },    
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
};

get_bloco_leads();