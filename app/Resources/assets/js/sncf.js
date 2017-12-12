require('chart.js');
require('foundation-datepicker');

var codesEl = document.getElementById("codes").getContext('2d');
var agesEl = document.getElementById("ages").getContext('2d');
var gendersEl = document.getElementById("genders").getContext('2d');
var actionsEl = document.getElementById("actions").getContext('2d');
var durationsEl = document.getElementById("durations").getContext('2d');
var moodsEl = document.getElementById("moods").getContext('2d');
var categoriesEl = document.getElementById("categories").getContext('2d');

var colors = ["#FFFF00", "#1CE6FF", "#FF34FF", "#FF4A46", "#008941", "#006FA6", "#A30059",
    "#FFDBE5", "#7A4900", "#0000A6", "#63FFAC", "#B79762", "#004D43", "#8FB0FF", "#997D87",
    "#5A0007", "#809693", "#FEFFE6", "#1B4400", "#4FC601", "#3B5DFF", "#4A3B53", "#FF2F80",
    "#61615A", "#BA0900", "#6B7900", "#00C2A0", "#FFAA92", "#FF90C9", "#B903AA", "#D16100",
    "#DDEFFF", "#000035", "#7B4F4B", "#A1C299", "#300018", "#0AA6D8", "#013349", "#00846F",
    "#372101", "#FFB500", "#C2FFED", "#A079BF", "#CC0744", "#C0B9B2", "#C2FF99", "#001E09",
    "#00489C", "#6F0062", "#0CBD66", "#EEC3FF", "#456D75", "#B77B68", "#7A87A1", "#788D66",
    "#885578", "#FAD09F", "#FF8A9A", "#D157A0", "#BEC459", "#456648", "#0086ED", "#886F4C",
    "#34362D", "#B4A8BD", "#00A6AA", "#452C2C", "#636375", "#A3C8C9", "#FF913F", "#938A81",
    "#575329", "#00FECF", "#B05B6F", "#8CD0FF", "#3B9700", "#04F757", "#C8A1A1", "#1E6E00",
    "#7900D7", "#A77500", "#6367A9", "#A05837", "#6B002C", "#772600", "#D790FF", "#9B9700",
    "#549E79", "#FFF69F", "#201625", "#72418F", "#BC23FF", "#99ADC0", "#3A2465", "#922329",
    "#5B4534", "#FDE8DC", "#404E55", "#0089A3", "#CB7E98", "#A4E804", "#324E72", "#6A3A4C",
    "#83AB58", "#001C1E", "#D1F7CE", "#004B28", "#C8D0F6", "#A3A489", "#806C66", "#222800",
    "#BF5650", "#E83000", "#66796D", "#DA007C", "#FF1A59", "#8ADBB4", "#1E0200", "#5B4E51",
    "#C895C5", "#320033", "#FF6832", "#66E1D3", "#CFCDAC", "#D0AC94", "#7ED379", "#012C58",
    "#7A7BFF", "#D68E01", "#353339", "#78AFA1", "#FEB2C6", "#75797C", "#837393", "#943A4D",
    "#B5F4FF", "#D2DCD5", "#9556BD", "#6A714A", "#001325", "#02525F", "#0AA3F7", "#E98176",
    "#DBD5DD", "#5EBCD1", "#3D4F44", "#7E6405", "#02684E", "#962B75", "#8D8546", "#9695C5",
    "#E773CE", "#D86A78", "#3E89BE", "#CA834E", "#518A87", "#5B113C", "#55813B", "#E704C4",
    "#00005F", "#A97399", "#4B8160", "#59738A", "#FF5DA7", "#F7C9BF", "#643127", "#513A01",
    "#6B94AA", "#51A058", "#A45B02", "#1D1702", "#E20027", "#E7AB63", "#4C6001", "#9C6966",
    "#64547B", "#97979E", "#006A66", "#391406", "#F4D749", "#0045D2", "#006C31", "#DDB6D0",
    "#7C6571", "#9FB2A4", "#00D891", "#15A08A", "#BC65E9", "#FFFFFE", "#C6DC99", "#203B3C",
    "#671190", "#6B3A64", "#F5E1FF", "#FFA0F2", "#CCAA35", "#374527", "#8BB400", "#797868",
    "#C6005A", "#3B000A", "#C86240", "#29607C", "#402334", "#7D5A44", "#CCB87C", "#B88183",
    "#AA5199", "#B5D6C3", "#A38469", "#9F94F0", "#A74571", "#B894A6", "#71BB8C", "#00B433",
    "#789EC9", "#6D80BA", "#953F00", "#5EFF03", "#E4FFFC", "#1BE177", "#BCB1E5", "#76912F",
    "#003109", "#0060CD", "#D20096", "#895563", "#29201D", "#5B3213", "#A76F42", "#89412E",
    "#1A3A2A", "#494B5A", "#A88C85", "#F4ABAA", "#A3F3AB", "#00C6C8", "#EA8B66", "#958A9F",
    "#BDC9D2", "#9FA064", "#BE4700", "#658188", "#83A485", "#453C23", "#47675D", "#3A3F00",
    "#061203", "#DFFB71", "#868E7E", "#98D058", "#6C8F7D", "#D7BFC2", "#3C3E6E", "#D83D66",
    "#2F5D9B", "#6C5E46", "#D25B88", "#5B656C", "#00B57F", "#545C46", "#866097", "#365D25",
    "#252F99", "#00CCFF", "#674E60", "#FC009C", "#92896B"
];

var updateTimeout = 2000;

var cChart = new Chart(codesEl, {
    type: 'horizontalBar',
    data: {
        labels: codes.map(function(e) { return e.codename; }),
        datasets: [{
            data: codes.map(function(e) { return e.codeCount; }),
            borderWidth: 1,
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: false,
        },
        maintainAspectRatio: false,
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var aChart = new Chart(agesEl, {
    type: 'doughnut',
    data: {
        labels: ages.map(function(e) { return e.age; }),
        datasets: [{
            data: ages.map(function(e) { return e.ageCount; }),
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        }
    }
});

var gChart = new Chart(gendersEl, {
    type: 'doughnut',
    data: {
        labels: genders.map(function(e) { return e.gender; }),
        datasets: [{
            data: genders.map(function(e) { return e.genderCount; }),
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        }
    }
});

var aChart = new Chart(actionsEl, {
    type: 'doughnut',
    data: {
        labels: actions.map(function(e) { return e.action; }),
        datasets: [{
            data: actions.map(function(e) { return e.actionCount; }),
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        }
    }
});

var dChart = new Chart(durationsEl, {
    type: 'doughnut',
    data: {
        labels: durations.map(function(e) { return e.duration; }),
        datasets: [{
            data: durations.map(function(e) { return e.durationCount; }),
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        }
    }
});

var mChart = new Chart(moodsEl, {
    type: 'doughnut',
    data: {
        labels: moods.map(function(e) { return e.mood; }),
        datasets: [{
            data: moods.map(function(e) { return e.moodCount; }),
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        }
    }
});

var catChart = new Chart(categoriesEl, {
    type: 'doughnut',
    data: {
        labels: categories.map(function(e) {
            if (e.category) {
                return e.category[0];
            } else {
                return '';
            }
        }),
        datasets: [{
            data: categories.map(function(e) { return e.categoryCount; }),
            backgroundColor: colors
        }]
    },
    options: {
        legend: {
            display: true,
            position: 'bottom'
        }
    }
});



$(function() {
    $('#dpstart').fdatepicker()
        .on('changeDate', function(ev) {
            if (ev.date.valueOf() > endDate.valueOf()) {
                $('#alert').show().find('strong').text('Veuillez sélectionner une date antérieur à celle de fin');
            } else {
                $('#alert').hide();
                startDate = new Date(ev.date);
                $('#dpstart').text($('#dpstart').data('date'));
            }
            $('#dpstart').fdatepicker('hide');
            $('#dpend').click();
        });
    $('#dpend').fdatepicker()
        .on('changeDate', function(ev) {
            if (ev.date.valueOf() < startDate.valueOf()) {
                $('#alert').show().find('strong').text('Veuillez sélectionner une date postérieur à celle de début');
            } else {
                $('#alert').hide();
                endDate = new Date(ev.date);
                $('#dpend').text($('#dpend').data('date'));
                updateCharts();
            }
            $('#dpend').fdatepicker('hide');
        });
});

$(function(){
    $(document).on('change', '#lines', function() {
        updateCharts();
    });
});

function updateCharts() {
    line = $('#lines').val();
    href = window.location.pathname + '?start=' + startDate.getFullYear() + '-' + (startDate.getMonth() + 1) + '-' + startDate.getDate() + '&end=' + endDate.getFullYear() + '-' + (endDate.getMonth() + 1) + '-' + endDate.getDate();
    if (line != 'all') href += '&line=' + line;
    window.location.href = href;
}