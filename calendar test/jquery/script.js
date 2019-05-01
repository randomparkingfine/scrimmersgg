$(document).ready(
    $('#fromMonday').on('change',function(){
        if (parseInt($("#fromMonday").val()) === -1) 
        {
            $('#toMonday').children().remove();
        }
        else
        {
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
        }
    }),

    $('#fromTuesday').on('change', function(){
        if (parseInt($("#fromTuesday").val()) === -1) 
        {
            $('#toTuesday').children().remove();
        }
        else
        {
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
        }
    }),

    $('#fromWednesday').on('change', function(){
        if (parseInt($("#fromWednesday").val()) === -1) 
        {
            $('#toWednesday').children().remove();
        }
        else
        {
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
        }
    }),

    $('#fromThursday').on('change', function(){
        if (parseInt($("#fromThursday").val()) === -1) 
        {
            $('#toThursday').children().remove();
        }
        else
        {
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
        }
    }),

    $('#fromFriday').on('change', function(){
        if (parseInt($("#fromFriday").val()) === -1) 
        {
            $('#toFriday').children().remove();
        }
        else
        {
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
        }
    }),

    $('#fromSaturday').on('change', function(){
        if (parseInt($("#fromSaturday").val()) === -1) 
        {
            $('#toSaturday').children().remove();
        }
        else
        {
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
        }
    }),

    $('#fromSunday').on('change', function(){
        if (parseInt($("#fromSunday").val()) === -1) 
        {
            $('#toSunday').children().remove();
        }
        else
        {
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
        }
    })
);



$('#submitBtn').on('click', function(){
    var mondayTime = mondayHours();
    var tuesdayTime = tuesdayHours();
    var wednesdayTime = wednesdayHours();
    var thursdayTime = thursdayHours();
    var fridayTime = fridayHours();
    var saturdayTime = saturdayHours();
    var sundayTime = sundayHours();
    console.log ("Monday " + mondayTime);
    console.log("Tuesday " + tuesdayTime);
    console.log ("Wednesday " + mondayTime);
    console.log("Thursday " + tuesdayTime);
    console.log ("Friday " + mondayTime);
    console.log("Saturday " + tuesdayTime);
    console.log ("Sunday " + mondayTime);
    console.log(tuesdayTime === mondayTime);
})

function mondayHours() {
    var str = "";
    if (parseInt($("#fromMonday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromMonday").val() + " " + $("#toMonday").val();
    }
    return str;
}

function tuesdayHours() {
    var str = "";
    if (parseInt($("#fromTuesday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromTuesday").val() + " " + $("#toTuesday").val();
    }
    return str;
}

function wednesdayHours() {
    var str = "";
    if (parseInt($("#fromWednesday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromWednesday").val() + " " + $("#toWednesday").val();
    }
    return str;
}

function thursdayHours() {
    var str = "";
    if (parseInt($("#fromThursday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromThursday").val() + " " + $("#toThursday").val();
    }
    return str;
}

function fridayHours() {
    var str = "";
    if (parseInt($("#fromFriday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromFriday").val() + " " + $("#toFriday").val();
    }
    return str;
}

function saturdayHours() {
    var str = "";
    if (parseInt($("#fromSaturday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromSaturday").val() + " " + $("#toSaturday").val();
    }
    return str;
}

function sundayHours() {
    var str = "";
    if (parseInt($("#fromSunday").val()) === -1) 
    {
        return null;
    } 
    else
    {
        str += $("#fromSunday").val() + " " + $("#toSunday").val();
    }
    return str;
}