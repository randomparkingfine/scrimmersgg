# The calendar:

## Fullcalendar:

This calendar is created using [Fullcalendar.io](https://fullcalendar.io/docs "Fullcalendar's doc").<br/>

## How the user will use it:

When arriving on the scheduling page, the user will see two dropdown menus for each days of the week.<br/>

The first dropdown menu represents the time at which the user **starts** playing. The second dropdown menu represents the time at which the user **stops** playing. The time limit for the second dropdown menu is **12:00PM**. <br/>

At first, on the starting hour dropdown menu it will be written *"Select starting time or leave blank"*. If the user selects a starting hour, the second dropdown menu will display the hour directly after the one selected.<br/>
If the user leaves ther dropdown menu for the starting hour on *"Select starting time or leave blank"*, then the ending hour dropdown menu will stay blank. This means that the user is not available on this day of the week.<br/>

**Example:** <br/>
- **Case 1:** *Starting hour selected*: 12:00AM -> *Ending hour displayed*: 1:00PM<br/>
- **Case 2:** *Starting hour selected*: *"Select starting time or leave blank"* -> *Ending hour displayed*: *blank*<br/>

## How the data will be sent to the database:

An AJAX POST call will be made to a PHP function. This AJAX call will pass the starting hours and ending hours of each days to the PHP function. 
If the user has not indicated a starting hour, and thus no ending hour, they will still be passed to the PHP function but with a special value such as *NULL*.<br/>

The JSON file needed to load the database needs to be composed of **FOUR** fields:<br/>
-**title**: By default it is *"Practice time"*, the user will not be able to modify it.  
-**startTime**: it represents the time at which the scheduling block will **start**. The syntax for this field is the 24-hour clock convention. (*e.g*: 1:00 PM == 13H)<br/>
-**endTime**: it represents the time at which the scheduling block will **end**. The syntax for this field is the 24-hour clock convention. (*e.g*: 1:00 PM == 13H)<br/>
-**daysOfWeek**: it represents the days of the week where the user has indicated a starting and ending time. The syntax for this field is an array. In this array we can put integers from 1 to 7, representing the index of the day in the week. (*e.g*: 1 == Monday, 2 == Tuesday, ..., 7 == Sunday)  
<br/>
**Example**:<br/>
\[<br/>
    {<br/>
        "title": "Practice time",<br/>
        "startTime": "19:00",<br/>
        "endTime": "22:00",<br/>
        "daysOfWeek": "[ 1, 4 ]"<br/>
    },<br/>
    {<br/>
        "title": "Practice time",<br/>
        "startTime": "19:00",<br/>
        "endTime": "20:00",<br/>
        "daysOfWeek": "[ 3, 5 ]"<br/>
    }<br/>
\]<br/>

**The JSON file can also be written like this:**<br/>
\[<br/>
    {<br/>
        "title": "Practice time",<br/>
        "startTime": "19:00",<br/>
        "endTime": "22:00",<br/>
        "daysOfWeek": "[ 1 ]"<br/>
    },<br/>
    {<br/>
        "title": "Practice time",<br/>
        "startTime": "19:00",<br/>
        "endTime": "22:00",<br/>
        "daysOfWeek": "[ 4 ]"<br/>
    },<br/>
    {<br/>
        "title": "Practice time",<br/>
        "startTime": "19:00",<br/>
        "endTime": "20:00",<br/>
        "daysOfWeek": "[ 3 ]"<br/>
    },<br/>
    {<br/>
        "title": "Practice time",<br/>
        "startTime": "19:00",<br/>
        "endTime": "20:00",<br/>
        "daysOfWeek": "[ 5 ]"<br/>
    }<br/>
\]<br/>