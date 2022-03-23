$("#date").datetimepicker({
    format: "L",
    dateFormat: "dd-mm-yy",

    pickTime: false,
    minDate: new Date(),
});
$("#time").datetimepicker({
    format: "LT",
    stepping: 30,
    enabledHours: [12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24],
});
 // Calender
 $('#calender').datetimepicker({
    inline: true,
    format: 'L'
});

