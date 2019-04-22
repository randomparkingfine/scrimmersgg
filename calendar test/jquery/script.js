$(document).ready(
    $('#fromMonday').on('change',function(){
        $('#toMonday').children().remove();
        var nb = 0;
        for(var i = parseInt($("#fromMonday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {

                $('#toMonday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toMonday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }
        }
        $('#toMonday').append("<option value='24'> 12:00 PM</option>");
    }),

    $('#fromTuesday').on('change', function(){
        $('#toTuesday').children().remove();
        for(var i = parseInt($("#fromTuesday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {
                $('#toTuesday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toTuesday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }
        }
        $('#toTuesday').append("<option value='24'> 12:00 PM</option>");
    }),

    $('#fromWednesday').on('change', function(){
        $('#toWednesday').children().remove();
        for(var i = parseInt($("#fromWednesday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {
                $('#toWednesday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toWednesday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }
        }
        $('#toWednesday').append("<option value='24'> 12:00 PM</option>");
    }),

    $('#fromThursday').on('change', function(){
        $('#toThursday').children().remove();
        for(var i = parseInt($("#fromThursday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {
                $('#toThursday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toThursday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }
        }
        $('#toThursday').append("<option value='24'> 12:00 PM</option>");
    }),

    $('#fromFriday').on('change', function(){
        $('#toFriday').children().remove();
        for(var i = parseInt($("#fromFriday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {
                $('#toFriday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toFriday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }
        }
        $('#toFriday').append("<option value='24'> 12:00 PM</option>");
    }),

    $('#fromSaturday').on('change', function(){
        $('#toSaturday').children().remove();
        for(var i = parseInt($("#fromSaturday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {
                $('#toSaturday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toSaturday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }
        }
        $('#toSaturday').append("<option value='24'> 12:00 PM</option>");
    }),

    $('#fromSunday').on('change', function(){
        $('#toSunday').children().remove();
        for(var i = parseInt($("#fromSunday").val()) + 1; i < 24; i++) {
            nb = i % 12;
            if (i === 12) {
                nb = 12;
            }
            if (i > 12) {
                $('#toSunday').append("<option value='"+i+"'>" + nb + ":00 PM</option>");
            }
            else {
                $('#toSunday').append("<option value='"+i+"'>" + nb + ":00 AM</option>");
            }            
        }
        $('#toSunday').append("<option value='24'> 12:00 PM</option>");
    })
);